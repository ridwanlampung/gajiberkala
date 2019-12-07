<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GolRuangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riwayat-gol-ruang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'gol_id') ?>

    <?= $form->field($model, 'golongan') ?>

    <?= $form->field($model, 'sk_no') ?>

    <?php // echo $form->field($model, 'sk_tanggal') ?>

    <?php // echo $form->field($model, 'tmt_golongan') ?>

    <?php // echo $form->field($model, 'jenis_kenaikan_pangkat') ?>

    <?php // echo $form->field($model, 'masa_kerja_gol_tahun') ?>

    <?php // echo $form->field($model, 'masa_kerja_gol_bulan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
