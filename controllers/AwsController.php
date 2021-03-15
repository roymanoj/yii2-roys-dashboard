<?php

namespace app\controllers;
use Yii;
use yii\helpers\Url;

use app\models\forms\Awsupload;
use yii\web\UploadedFile;



class AwsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionRemove($bucket,$keyname){

       if( Yii::$app->request->post()  ){
            if(Yii::$app->aws->deleteFile($bucket,$keyname)){
                Yii::$app->session->setFlash('success', "File <b>".$keyname."</b> Deleted Succesfully");
                 //   return Yii::$app->request->referrer;

            }
       
     //   Yii::$app->session->setFlash('success', "File Deleted Succesfully");
        return $this->redirect(Yii::$app->request->referrer);
    }
    }

    public function actionUpload($bucket,$key){

        $model=new Awsupload();
        $model->scenario="upload";

     
        //$model->filepath=$model->filename->tempName;
      
       


       if ($model->load(Yii::$app->request->post()) && $model->validate(['scenario'=>'upload'])) {

       // Yii::$app->controller->enableCsrfValidation = false;

         $model->filename = UploadedFile::getInstance($model, 'filename');
           // $bucket='tipl-dashboard';
          // $key=='nil'?$keyname=$model->filename:$keyname=$key.'/'.$model->filename;    
            // file upload code goes here

        // if(Yii::$app->aws->uploadFile($bucket,$model)){
         if(Yii::$app->aws->objectUpload($bucket,$model)){

                Yii::$app->session->setFlash('success', "File : <b>".$model->filename->name."</b> uploded Succesfully");

            } else {

                Yii::$app->session->setFlash('danger', "Something went wrong");
            } 
         // return  var_dump($model->filename);
          /*  return $this->render('upload',[
                'model'=>$model->filename,
               // 'key'=>$keyname,
            ]);*/
            // return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));
         return $this->redirect(Url::base().'/aws/openbucket?bucket='.$bucket);
          // return $this->redirect(Yii::$app->request->referrer);

        } 




        return $this->render('_form',[
            'model'=>$model,
        ]);
    }


    public function actionOpen($bucket,$key){

       if(empty($key))
        $key='';

        return $this->render('open',[
            'bucket'=>$bucket,
            'key'=>$key
        ]);

    }


    public function actionOpenbucket($bucket){

      
         return $this->render('openbucket',[
             'bucket'=>$bucket,
             
         ]);
 
     }

     public function actionDownload($bucket,$keyname){

       // $result=Yii::$app->aws->download($bucket,$keyname);
       if(Yii::$app->aws->download($bucket,$keyname)){
            Yii::$app->session->setFlash('success', "File Downloded Succesfully");
             //   return Yii::$app->request->referrer;

        }


      /*  return $this->render('download',[
            'result'=>$result,
        ]);*/

         return $this->redirect(Yii::$app->request->referrer);
     }



    public function actionCreatebucket(){

        $model=new Awsupload();
        $model->scenario="create";

        if ($model->load(Yii::$app->request->post()) && $model->validate(['scenario'=>'create'])){ 


           if(Yii::$app->aws->createBucket($model->bucketname)){

            Yii::$app->session->setFlash('success', "New Bucket : <b>".$model->bucketname."</b> created Succesfully");

           } else {

           Yii::$app->session->setFlash('danger', "ERROR! Bucket not created, Please try again...");

           }


            return $this->render('index');

         }



        return $this->render('create_bucket',[
            'model'=>$model,
        ]);
    }




}
