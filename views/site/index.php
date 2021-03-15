<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'ROYS - Dashboard 1.0';
?>
<div class="site-index">
<div class="login-logo">
        
      
        <img src="<?=Yii::getAlias('@web');?>/images/logo.png" class="img-responsive center-block" >
     
 </div>

    <div class="jumbotron">
    <h1><b><span class="text text-primary">ROYS</span></b><span class="text text-danger" ><b> Dashboard</b></span> <small >Ver 1.0</small></h1>

        <p class="lead">Webapp Made Simple for developer....</p>

        <p><?= (Yii::$app->user->isGuest) ? Html::a(
                        'Sign In',
                        ['/site/login'],
                        ['class'=>'btn btn-primary btn-lg'],
                        ['data-method' => 'post', 'class' => 'btn btn-success btn-flat']
              ) : 
             
              Html::a(
                  'Logout ( ' . ucfirst(Yii::$app->user->identity->username) . ' )', 
                  ['/site/logout'], 
                  ['class' => 'btn btn-danger btn-lg', 'data-method' => 'post']                
              );
          
             
             
             
            ?> </p>
    </div>

    
</div>
