<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Meditators;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\RatingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ratings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rating-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rating', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'meditator_id' => [
                'label' => 'Mentor',
                'attribute' => 'meditator_id',
                'value' => function($value) {
                    return Meditators::findOne(['id' => $value->meditator_id])->name;
                }
            ],
            'value',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
