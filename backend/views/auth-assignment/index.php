<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuthAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Auth Assignments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assignment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Auth Assignment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'user_id',
            //'username',
            //'userName.username',
            [
                'attribute' => 'user_id',
                'value' => function($model) {
                    return $model->userName->username;
                }
            ],
            'item_name',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
