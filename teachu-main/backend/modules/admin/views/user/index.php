<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            'status',
            //'created_at',
            //'updated_at',
            'photo' => [
                'attribute' => 'photo',
                'label' => 'Photo',
                'format' => ['image', ['class' => 'col-md-12 col-sm-12']],
                'value' => function($value) {
                    return '/teachu-main/frontend/web/' . $value->photo;
                }
            ],
            'type' => [
                'attribute' => 'type',
                'label' => 'Type',
                'value' => function($value) {
                    switch ($value->type) {
                        case 1:
                            return 'overlord';
                        case 2:
                            return 'pupil';
                        case 3:
                            return 'mentor';
                        case 4:
                            return 'admin';
                    }
                }
            ],
            'sessions_attended',
            'sessions_offered',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}{link}'
            ],
        ],
    ]); ?>
</div>
