<?php

use yii\helpers\Html;
$user=ucwords(strtolower(Yii::$app->user->identity->username));
$member=date('M-Y',strtotime(Yii::$app->user->identity->created_at));
/* @var $this \yii\web\View */

?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
    <!-- Left navbar links -->
 

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <!--
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php //\yii\helpers\Url::home()?>" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
        -->
       
    </ul>
  
    <!-- SEARCH FORM -->
    <!--
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
-->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-danger navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <?= Html::a('<i class="fas fa-sign-out-alt"></i>', ['site/logout'], ['data-method' => 'post', 'class' => 'nav-link']) ?>
        </li>
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="<?=Yii::getAlias('@web');?>/images/user.png" class="user-image" alt="User Image"/>
                <span class="d-none d-md-inline">  <?=$user?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                <img src="<?=Yii::getAlias('@web');?>/images/user.png" class="img-circle"
                                 alt="User Image"/>

                    <p>
                    <?=$user?>
                        <small>Member Since (<?= $member ?>) </small>
                    </p>
                </li>
                <!-- Menu Body -->
              
                <!-- Menu Footer-->
                <li class="user-footer">
                <?= Html::a(
                                    'Chnage Password',
                                    ['/site/change-password'],
                                    ['data-method' => 'post', 'class' => 'btn btn-primary btn-flat','style'=>'border-radius: 24px;']
                                ) ?>
                           
                                <?= Html::a(
                                    'Sign Out',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-danger btn-flat ','style'=>'border-radius: 24px;']
                                ) ?>
                             
                           
                                
                           
                               
                </li>

              </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                    class="fas fa-th-large"></i></a>
        </li>
    </ul>
</nav>