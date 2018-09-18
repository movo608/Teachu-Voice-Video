<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\ValidSpecializations;

/* @var $this yii\web\View */
/* @var $model common\models\Meditators */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meditators-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'specialization')->dropDownList(
        ArrayHelper::map(ValidSpecializations::find()->all(), 'name', 'name')
    ) ?>

    <?= $form->field($model, 'photo')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
