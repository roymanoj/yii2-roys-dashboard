<?php

namespace app\assets;
use Yii;
use yii\web\AssetBundle;
use yii\web\View;


// set @themes alias so we do not have to update baseUrl every time we change themes
// Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * Main frontend application asset bundle.
 */
class RoysAsset extends AssetBundle
{
 
   public $basePath = '@webroot';
   public $baseUrl = '@web';

    public $css = [
        'css/roys.css',       
    ];
    public $js = [
        'js/roys.js',
      

    ];
    public $depends = [
     
        
        
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap4\BootstrapAsset',
       
    ];

}