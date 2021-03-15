<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\Rep */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rep-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cid')->textInput() ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <?= $form->field($model, 'repname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'repcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastdate')->textInput() ?>

    <?= $form->field($model, 'lastorderno')->textInput() ?>

    <?= $form->field($model, 'repstatus')->textInput() ?>

    <?= $form->field($model, 'reprole')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
