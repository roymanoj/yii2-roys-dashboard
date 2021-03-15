<?php

namespace app\controllers;

use Yii;
use app\models\Storage;

class StorageController extends \yii\web\Controller
{

    public function actionBrowse()
    {
      $s = new Storage();
      $s->browse('tipl-dashboard','');
    }


    public function actionDownload() {
        $s = new Storage();
        $f = $s->download('tipl-dashboard','logo.png');
        //download the file
        header('Content-Type: ' . $f['ContentType']);
        echo $f['Body'];
       // Yii::$app->response->sendFile('logo.png');

      }


      public function actionCreate($bucket){
        $s = new Storage();
        $f= $s->create($bucket,'');

      // echo Yii::$app->session->setFlash('success', "Your bucket created successfully");
       $message= '<div class="alert alert-success" role="alert">
        New Bucket <b>'.$bucket.' </b>Created Successfully!
      </div>';

      return $message;
        //var_dump($f);
      }



}