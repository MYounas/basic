<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
// use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\tblOrders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'colOrder')->textInput() ?>

    <?= $form->field($model, 'First_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Last_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Phone')->textInput() ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status')->dropDownList([ 'Completed' => 'Completed', 'Under Process' => 'Under Process', ], ['prompt' => 'Status']) ?>

    <?= $form->field($model, 'Payment')->dropDownList([ 'Paid' => 'Paid', 'UnPaid' => 'UnPaid', ], ['prompt' => 'Payment']) ?>

    <?= $form->field($model, 'Type')->dropDownList([ 'Embroider' => 'Embroider', 'Vinyl' => 'Vinyl', 'Engraving' => 'Engraving', 'Photo' => 'Photo', ], ['prompt' => 'Type']) ?>

    <!-- <?= $form->field($model, 'Created_Date')->textInput() ?> -->
    <?= $form->field($model, 'Created_Date')->widget(
        DatePicker::className(), [
            // inline too, not bad
             'inline' => false, 
             // modify template for custom rendering
            // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <!-- <?= $form->field($model, 'Updated_Date')->textInput() ?> -->
  <?= $form->field($model, 'Updated_Date')->widget(
        DatePicker::className(), [
            // inline too, not bad
             'inline' => false, 
             // modify template for custom rendering
            // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
