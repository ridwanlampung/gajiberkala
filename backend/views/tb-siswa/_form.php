<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\TbSiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kelas')->textInput() ?>

     <?= $form->field($model, 'tgl_masuk')->widget(
    	DatePicker::className(), [

    		'options' => ['placeholder' => 'Pilih Tanggal Masuk ...'],
    		'pluginOptions' => [
    			'format' => 'yyyy-mm-dd',
    			'todayHighlight' => true
    		]
    	]);?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
