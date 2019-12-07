<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\Models\RiwayatGajiBerkala */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riwayat-gaji-berkala-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pangkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gaji_pokok_terakhir')->textInput() ?>

    <?= $form->field($model, 'oleh_pejabat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_sk')->textInput() ?>

    <?= $form->field($model, 'nomor_sk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmt_sk')->textInput() ?>

    <?= $form->field($model, 'masa_kerja_tahun')->textInput() ?>

    <?= $form->field($model, 'masa_kerja_bulan')->textInput() ?>

    <?= $form->field($model, 'gaji_pokok_baru')->textInput() ?>

    <?= $form->field($model, 'tmt_gaji')->textInput() ?>

    <?= $form->field($model, 'kenaikan_berikutnya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
