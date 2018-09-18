<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Meditators;

/* @var $this yii\web\View */
/* @var $model common\models\Rating */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rating-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'meditator_id')->dropDownList(
        ArrayHelper::map(Meditators::find()->all(), 'id', 'name')
    ) ?>

    <?= $form->field($model, 'value')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
