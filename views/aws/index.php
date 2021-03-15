<?php
/* @var $this yii\web\View */
use Aws\S3\S3Client;  
use Aws\Exception\AwsException;
use app\widgets\Alert;
use app\models\Aws;
use yii\helpers\Html;


$this->title = 'Amazon S3 File Manager';

?>


<p class="text text-center">

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
<?= Html::a('<i class="fa fa-plus " style="font-size:1.5em;"></i><span style="font-size:1.5em;"> <b> &nbsp; Add New Bucket</b></span>', ['aws/createbucket'], ['class'=>'btn btn-danger']) ?>
<h3 class="text text-center text-success">
All Available Buckets :
</h3>

<?=Yii::$app->aws->listAllBuckets();?>



