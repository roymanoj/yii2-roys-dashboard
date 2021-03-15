<?php
use app\models\forms\Awsupload;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
$this->title = 'Create New Bucket';
?>
<div class="awssite-create">
  
<?= Html::a('<i class="fa fa-home " style="font-size:1.5em;"></i><br /><b> Home</b>', ['/aws'], ['class'=>'btn btn-primary']) ?>

           <p>
           Please give name to your bucket
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(); ?>
                
            
                  
                    <?= $form->field($model, 'bucketname')->textinput(['autofocus' => true])->label('Bucket Name')?>

                    <p class="form-text text-muted">
                        [ Enter any value for 3 to 63 charecter maximim, special charecters "." & "-" only allowed. ]
                    </p>
 
                    <div class="form-group">
                        <?= Html::submitButton('Create Bucket', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

 
</div>




<br />
<br />

