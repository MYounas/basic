<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tblOrdersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-orders-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'colOrder') ?>

    <?= $form->field($model, 'First_Name') ?>

    <?= $form->field($model, 'Last_Name') ?>

    <?= $form->field($model, 'Phone') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Status') ?>

    <?php // echo $form->field($model, 'Payment') ?>

    <?php // echo $form->field($model, 'Type') ?>

    <?php // echo $form->field($model, 'Created_Date') ?>

    <?php // echo $form->field($model, 'Updated_Date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
