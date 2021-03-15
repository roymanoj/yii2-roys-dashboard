<?php
use app\models\Cloudupload;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
$this->title = 'Cloud Upload';
?>
<div class="site-contact">
  

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            The file uploaded successfully !
        </div>

    <?php else: ?>

        <p>
           Please select a file to upload
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'upload-form']); ?>

                    <?= $form->field($model, 'filename')->input('file'); ?>
 
                    <div class="form-group">
                        <?= Html::submitButton('Upload', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>




<br />
<br />

<h2 class="text text-center text-success">Dashboard Cloud Upload</h2>