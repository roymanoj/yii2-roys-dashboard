<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = "Access Denied 403";

if(Yii::$app->user->isGuest){
    $homeurl=Yii::$app->homeUrl;
    $msg='Home Page';
} else {
    $homeurl=Yii::$app->homeUrl.'dashboard';
    $msg='Dashboard';
}


?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">

    <style>
   body{
    font-family: 'Ropa Sans', sans-serif;
    margin-top: 30px;
    background-color: rgb(145, 220, 233);
    background-color: rgb(28, 157, 243);
    text-align: center;
    color: #fff;
}
.error-heading{
    margin: 50px auto;
    width: 250px;
    border: 5px solid #fff;
    font-size: 126px;
    line-height: 126px;
    border-radius: 30px;
    text-shadow: 6px 6px 5px #000;
}
.error-heading img{
    width: 100%;
}
.error-main h1{
    font-size: 72px;
    margin: 0px;
    color: rgb(28, 157, 243);
    text-shadow: 0px 0px 5px #fff;
}



    </style>
</head>
<body>


	<div class="error-main">
		<h1>Oops! Sorry</h1>
		<div class="error-heading">403</div>
		<h2>You do not have permission to access the page that you have requested.</h2>
	</div>

    <div>
    <a href="<?=$homeurl?>"> <h2 class="headline text-info">Back to <i class="fa fa-home text-red"></i><?=$msg?></h2></a>
    </div>

    <div class="login-logo">
        <a href="<?=$homeurl?>">
      
   <img src="<?=Yii::getAlias('@web');?>/images/logo.png" class="img-responsive center-block" >
   </a>
    </div>

</body>
</html>
