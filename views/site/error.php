<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;

if($name==='Forbidden (#403)'){
    return Yii::$app->response->redirect(Url::to(['site/accessdenied']));
}


if(Yii::$app->user->isGuest){
    $homeurl=Yii::$app->homeUrl;
    $msg='Home Page';
} else {
    $homeurl=Yii::$app->homeUrl.'dashboard';
    $msg='Dashboard';
}


?>
<section class="content">

    <div class="error-page">

    <div class="login-logo">
        <a href="<?=$homeurl?>"><b>ROYS</b>Dashboard <small>Ver 1.0</small></a>
      
   <img src="<?=Yii::getAlias('@web');?>/images/logo.png" class="img-responsive center-block" >

    </div>

    <h1 class="text-center text-red"><strong>Oooooops!! Sorry</strong> </h1>

        <h2 class="headline text-info"><i class="fa fa-warning text-red"></i></h2>

        <div class="error-content">
            <h3><?= $name ?></h3>

            <p>
                <b><?= nl2br(Html::encode($message)) ?></b>
            </p>

            <p>
                The above error occurred while the Web server was processing your request.
                Please contact us if you think this is a server error. Thank you.
                Meanwhile, you may <b><a href='<?= $homeurl ?>'>return to <b><?=$msg?></b></a></b> 
               
            </p>

            
           <a href="<?=$homeurl?>"> <h2 class="headline text-info">Back <i class="fa fa-home text-red"></i><?=$msg?></h2></a>

            
        </div>
    </div>

</section>
