<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\CustomerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cid') ?>

    <?= $form->field($model, 'areaid') ?>

    <?= $form->field($model, 'customername') ?>

    <?= $form->field($model, 'cusaddress') ?>

    <?php // echo $form->field($model, 'cuscity') ?>

    <?php // echo $form->field($model, 'cuspin') ?>

    <?php // echo $form->field($model, 'cusphone') ?>

    <?php // echo $form->field($model, 'cusdueamt') ?>

    <?php // echo $form->field($model, 'cusstatus') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
