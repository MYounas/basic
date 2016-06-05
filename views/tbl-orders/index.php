<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\tblOrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-orders-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'colOrder',
            'First_Name',
            'Last_Name',
            'Phone',
            'Email:email',
            'Status',
            'Payment',
            'Type',
            'Created_Date',
            'Updated_Date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
