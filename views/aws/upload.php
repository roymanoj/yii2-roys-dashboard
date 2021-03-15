<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>body:</h1>

   <?= var_dump($model)?>
   <?php   echo file_get_contents($model->tempName)?>
   <p>Name: <?=$model->name?> </p>
   <p>Path: <?=$model->tempName.'/'.$model->name?> </p>
   <p>Size: <?=$model->size?> </p>

   

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
