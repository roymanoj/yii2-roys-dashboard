<?php

namespace app\controllers;

use yii;

class DashboardController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $response=Yii::$app->user->identity->usrlevel;

        switch ($response) {
            case 10:
                return $this->render('coachee');
              break;
            case 20:
                return $this->render('coach');
              break;
            case 30:
                return $this->render('admin');
              break;
            
            default:
            return $this->render('member');
          }
     
                    
    }



public function actionTesting() {

  

  return $this->render('testing');

}

public function actionTimeline() {

  

  return $this->render('timeline');

}

public function actionPrice(){

  return $this->render('pricetable');
}

public function actionTimelines(){
  return $this->render('multiline');

}

public function actionMytime(){
return $this->render('mytime');

}

public function actionMyprice(){
  return $this->render('price');
}

public function actionCodesample(){
  return $this->render('codesample');
}

public function actionLogincode(){
  return $this->render('logincode');
}


public function actionAdminlte(){

  return $this->render('adminlte');
}



}
