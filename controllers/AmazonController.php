<?php

namespace app\controllers;

use Yii;
use app\models\Cloudupload;

class AmazonController extends \yii\web\Controller
{
    public function actionIndex()
    {
       // $path='';
       // $s3 = Yii::$app->get('s3');
       // $result = $s3->list($path);

        return $this->render('index');
    }




    public function actionRemove($file){

        $path='';
        $s3 = Yii::$app->get('s3');
      

        
       $result = $s3->commands()->delete($file)->execute();


       if($result)
            {

                Yii::$app->getSession()->setFlash('Success', 'File deleted successfully..');  

            } else {

                Yii::$app->getSession()->setFlash('danger', 'File have some issue..');   
        
            }

            $result = $s3->list($path);

            return $this->render('index',[
                's3'=>$s3,
                'result'=>$result,
                 'path'=>$path,
            ]);
    

          


    }



    public function actionDownload($file){

        $path='';
        $s3 = Yii::$app->get('s3');
       // $url = $s3->getUrl($file);


      // $result = $s3->commands()->get($file)->saveAs('/home/manoj/Desktop/test/'.$file)->execute();
       //$result = $s3->commands()->get($file)->saveAs('/home/manoj/Desktop/test/'.$file)->execute();
        $result = $s3->get($file);
       
        //Yii::$app->response->sendFile('/home/manoj/Desktop/test/'.$file);
        header('Content-Type: ' . $result['ContentType']);
        echo $result['Body'];
       
               
       if($result)
            {
              //  return \Yii::$app->response->sendFile($url);
                Yii::$app->getSession()->setFlash('Success', 'File downloaded successfully..');  

            } else {

                Yii::$app->getSession()->setFlash('danger', 'File have some issue..');   
        
            }

            $result = $s3->list($path);

            return $this->render('index',[
                's3'=>$s3,
                'result'=>$result,
                'path'=>$path,
            ]);
    

    }


    public function actionCreate($bucket){

        if(Yii::$app->s3cloud->createBucket($bucket,'')){

            echo "<h3 class=\"text text-success\">Bucket : <b>". $bucket ."</b> Created Successfully<h3>";

        } 


    }




}
