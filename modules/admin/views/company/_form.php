<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companyname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comprintname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compaddress')->textArea() ?>

    <?= $form->field($model, 'compcity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comppin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compemail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compcontact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'compgstin')->textInput(['maxlength' => true]) ?>

    <h4 class="text text-primary text-center">Add Admin User Details for Company</h4>

    <?= $form->field($model, 'comuser')->textInput(['readonly' => !$model->isNewRecord]) ?>

    <?= $form->field($model, 'compass')->input('password') ?>

    <?= $form->field($model, 'comemail')->textInput() ?>

    <?= $form->field($model, 'comphone')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
