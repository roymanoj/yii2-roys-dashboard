<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/price.css',
    ];
    public $js = [
    //    'https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js',
      
   //  'js/site.js'
      //  'js/alert.js'
    ];
    public $depends = [
      //  'app\assets\AdminLtePluginAsset',
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap4\BootstrapAsset',
        //'app\assets\SweetAlertAsset',
       // 'app\assets\SweetAlertAsset',
   
    ];
}
