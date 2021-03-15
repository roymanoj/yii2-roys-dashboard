<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Upload File';
$this->params['breadcrumbs'][] = $this->title;



$ext = pathinfo($model->filename, PATHINFO_EXTENSION);
?>
<div class="site-upload">
<?= Html::a('Back Home', ['/amazon'], ['class'=>'btn btn-danger']) ?>

    <p>
        File uploaded Succesfully.
    </p>

    <br>
    <p>
    File Name : <?=$model->filename?> <br />
    File Extension: <?=$ext?> <br />
    File Type : <?=$model->types?>  <br />
  
    </p>

    
</div>
