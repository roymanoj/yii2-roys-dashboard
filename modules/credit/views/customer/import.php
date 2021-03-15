<?php
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'csvFile')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>

<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
10%
  </div>
</div>