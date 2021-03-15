<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\base\Customer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cid')->textInput() ?>

    <?= $form->field($model, 'areaid')->textInput() ?>

    <?= $form->field($model, 'customername')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cusaddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuscity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuspin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cusphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cusstatus')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
