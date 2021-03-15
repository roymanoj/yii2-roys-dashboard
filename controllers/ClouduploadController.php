<?php

namespace app\controllers;

use Yii;
use app\models\Cloudupload;

class ClouduploadController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $model=new Cloudupload();


        $path='';
        $s3 = Yii::$app->get('s3');
        $result = $s3->list($path);

        if ($model->load(Yii::$app->request->post())) {


            if($model->upload){

                return $this->render('_success',[
                    'model'=>$model,
                  
                ]);

            } 


            Yii::$app->session->setFlash('danger', "File not uplodead successfully....");
            return $this->render('index',[
                'model'=>$model,
                's3'=>$s3,
                'result'=>$result,
                'path'=>$path,
            ]);

        
        }   

        return $this->render('index',[
            'model'=>$model,
            's3'=>$s3,
            'result'=>$result,
            'path'=>$path,
        ]);

       
    }


   




}
