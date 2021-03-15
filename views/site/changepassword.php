<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use app\widgets\Alert;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
 
<div class="login-box">
     
    <div class="card-body login-card-body">
    <?= Alert::widget() ?>
  
    <p>Enter old password and new password to change the password</p>
    <p class="text pull-right">User Name: <?=ucwords(strtolower(Yii::$app->user->identity->username)) ?></p>
         
            <?php $form = ActiveForm::begin(['id' => 'change-password']); ?>
                <?= $form->field($model, 'oldpassword')->input('password')->label('Enter Your Old Password') ?>
                <?= $form->field($model, 'password')->input('password')->label('Enter New Password') ?>
                <?= $form->field($model, 'password_repeat')->input('password')->label('Re-Enter New Password') ?>
                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-success btn-lg center-block']) ?>
                </div>
                
            <?php ActiveForm::end(); ?>
 
    </div>
</div>