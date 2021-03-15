<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RepSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rep-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cid') ?>

    <?= $form->field($model, 'uid') ?>

    <?= $form->field($model, 'repname') ?>

    <?= $form->field($model, 'repcode') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'lastdate') ?>

    <?php // echo $form->field($model, 'lastorderno') ?>

    <?php // echo $form->field($model, 'repstatus') ?>

    <?php // echo $form->field($model, 'reprole') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
