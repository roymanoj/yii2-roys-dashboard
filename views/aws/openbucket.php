<?php
/* @var $this yii\web\View */
use Aws\S3\S3Client;  
use Aws\Exception\AwsException;
use app\widgets\Alert;
use app\models\Aws;
use yii\helpers\Html;





use app\assets\AppAsset;
AppAsset::register($this);


$this->title = 'Bucket Content';

?>

<?= Html::a('<i class="fa fa-home " style="font-size:1.5em;"></i><br /><b> Home</b>', ['/aws'], ['class'=>'btn btn-primary']) ?>

<p class="text text-center">
<?= Html::a('<i class="fa fa-upload " style="font-size:1.5em;"></i><br /><b> Upload New File</b>', ['aws/upload?bucket='.$bucket.'&key=nil'], ['class'=>'btn btn-success']) ?>
</p>
<br />
<br />


<?php if(Yii::$app->session->hasFlash('success')):?>
   

<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Success!</strong> <br /><?= Yii::$app->session->getFlash('success'); ?>
</div>

<?php endif; ?>

<?php if(Yii::$app->session->hasFlash('danger')):?>

<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Error:</strong> <?= Yii::$app->session->getFlash('danger'); ?>
</div>


<?php endif; ?>


<?= Yii::$app->aws->showBucket($bucket,''); ?>



