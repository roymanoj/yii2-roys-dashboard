<?php
use yii\helpers\Html;
use app\components\AwsCloud;
/* @var $this yii\web\View */
?>
<h1>amazon S3 Bucket</h1>


<?= Html::a('<i class="fa fa-upload " style="font-size:2em;"></i><br /><b> Upload New File</b>', ['/cloudupload'], ['class'=>'btn btn-success']) ?>

<h2 class="text text-center text-success">
<?=!empty($s3)?'Amazon S3 Bucket Connected':'Amazon S3 Bucket Disconnected'?> <br />
<b><spsn class="text text-danger">( <?=Yii::$app->get('s3')->defaultBucket?> )</span></b>
</h2>



<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Last Update</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    
   

<?= 

Yii::$app->s3cloud->showBucket();



?>

</tbody>
  </table>
</div>

<br />
<br />

<h2 class="text text-center text-success">Amzon S3 Demo</h2>