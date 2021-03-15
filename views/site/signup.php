<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
 
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
$fieldOptions3 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];
?>

<div class="card">
    
    <div class="card-body login-card-body">
    <p>Please fill out the following fields to signup:</p>
   
        
       
            <?php $form = ActiveForm::begin(['id' => 'form-signup']
             ); ?>
            <?= $form->field($model, 'username',$fieldOptions3)->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'email',$fieldOptions1) ?>
            <?= $form->field($model, 'password',$fieldOptions2)->passwordInput() ?>
               
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-success centre-block', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        
        
    </div>
   
</div>