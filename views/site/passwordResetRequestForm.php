<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
 
$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
 
<div class="card">
    
    <div class="card-body login-card-body">
    <p>Please fill out your email. A link to reset password will be sent to your email.</p>
   
        
 
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>
                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-success']) ?>
                </div>
                
            <?php ActiveForm::end(); ?>
 
    </div>
</div>