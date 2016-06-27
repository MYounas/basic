<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\hello */

$this->title = 'Create Hello';
$this->params['breadcrumbs'][] = ['label' => 'Hellos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hello-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
