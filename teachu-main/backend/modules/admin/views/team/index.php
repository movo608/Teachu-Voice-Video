<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\TeamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teams';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'photo' => [
                'label' => 'photo',
                'attribute' => 'photo',
                'format' => ['image', ['class' => 'col-md-12 col-sm-12']],
                'value' => function($value) {
                    return '/teachu-main/backend/web/' . $value->photo;
                }
            ],
            'city',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
