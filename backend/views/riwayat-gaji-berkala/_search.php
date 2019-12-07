<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RiwayatGajiBerkalaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riwayat-gaji-berkala-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'pangkat') ?>

    <?= $form->field($model, 'gaji_pokok_terakhir') ?>

    <?= $form->field($model, 'oleh_pejabat') ?>

    <?php // echo $form->field($model, 'tanggal_sk') ?>

    <?php // echo $form->field($model, 'nomor_sk') ?>

    <?php // echo $form->field($model, 'tmt_sk') ?>

    <?php // echo $form->field($model, 'masa_kerja_tahun') ?>

    <?php // echo $form->field($model, 'masa_kerja_bulan') ?>

    <?php // echo $form->field($model, 'gaji_pokok_baru') ?>

    <?php // echo $form->field($model, 'tmt_gaji') ?>

    <?php // echo $form->field($model, 'kenaikan_berikutnya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
