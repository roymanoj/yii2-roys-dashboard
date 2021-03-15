<?php

namespace app\controllers;

class LandingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
