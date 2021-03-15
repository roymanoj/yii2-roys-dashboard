<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\Outstanding */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="outstanding-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cid')->textInput() ?>

    <?= $form->field($model, 'cusid')->textInput() ?>

    <?= $form->field($model, 'billdate')->textInput() ?>

    <?= $form->field($model, 'billnumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'billamt')->textInput() ?>

    <?= $form->field($model, 'paidamt')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
