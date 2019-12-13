<?php

use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\AddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Addresses';
$this->params['breadcrumbs'][] = $this->title;
$searchModel = new \app\models\search\AddressSearch();
$dataProvider = $searchModel->search(Yii::$app->request->queryParams, Yii::$app->request->get('id'));
?>
<div class="address-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Address', ['//address/create?user_id='.$user_id], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'class' => \yii\grid\ActionColumn::class,
        'columns' => [
            // ['class' => SerialColumn::class],

            'id',
            // 'user_id',
            'index',
            'country',
            'city',
            'street',
            'house_number',
            'flat_number',

            [
                'class' => \yii\grid\ActionColumn::class,
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', str_replace('user', 'address', $model).'&user_id='.Yii::$app->request->get('id'));
                    },

                    'update' => function ($model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', str_replace('user', 'address', $model).'&user_id='.Yii::$app->request->get('id'));
                    },
                    'delete' => function ($model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', str_replace('user', 'address', $model).'&user_id='.Yii::$app->request->get('id'));
                    }

                ],
            ],

        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>
