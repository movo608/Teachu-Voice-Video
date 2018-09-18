<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\MeditatorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Meditators';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meditators-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Meditators', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'specialization',
            'photo' => [
                'label' => 'photo',
                'attribute' => 'photo',
                'format' => ['image', ['class' => 'col-md-12 col-sm-12']],
                'value' => function($value) {
                    return '/teachu-main/backend/web/' . $value->photo;
                }
            ],
            'rating',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
