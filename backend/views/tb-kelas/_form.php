<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TbKelas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-kelas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kelas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
