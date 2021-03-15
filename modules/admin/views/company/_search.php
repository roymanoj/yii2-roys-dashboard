<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CompanySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'companyname') ?>

    <?= $form->field($model, 'comprintname') ?>

    <?= $form->field($model, 'compcode') ?>

    <?= $form->field($model, 'compaddress') ?>

    <?php // echo $form->field($model, 'compcity') ?>

    <?php // echo $form->field($model, 'comppin') ?>

    <?php // echo $form->field($model, 'compphone') ?>

    <?php // echo $form->field($model, 'compemail') ?>

    <?php // echo $form->field($model, 'compcontact') ?>

    <?php // echo $form->field($model, 'compgstin') ?>

    <?php // echo $form->field($model, 'compstatus') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
