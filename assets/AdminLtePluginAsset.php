<?php
namespace app\assets;

use yii\web\AssetBundle;
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';

    public $css = [
        'sweetalert2/sweetalert2min.css',
        'sweetalert2/sweetalert2.css',
        'sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'

       // 'chart.js/Chart.min.css',
        // more plugin CSS here
    ];
    public $js = [
        'sweetalert2/sweetalert2.all.min.js',
        'sweetalert2/sweetalert2.js',
        
        //'chart.js/Chart.bundle.min.js'
        // more plugin Js here
    ];
    public $depends = [
      //  'hail812\adminlte3\assets\AdminLteAsset'
    ];
}