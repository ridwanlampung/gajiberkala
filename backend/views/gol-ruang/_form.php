<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\Models\RiwayatGolRuang */
/* @var $form yii\widgets\ActiveForm */
use kartik\date\DatePicker;
?>

<div class="riwayat-gol-ruang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gol_id')->dropDownList($RefGolongan, ['prompt' => '- Pilih Golongan -']) ?>

    <?= $form->field($model, 'sk_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sk_tanggal')->widget(DatePicker::className(),
                                                      [
                                                          'type' => DatePicker::TYPE_INPUT,
                                                        //   'value' => '1980-01-01',
                                                        //   'options' => ['placeholder' => 'Tanggal'],
                                                          
                                                          'pluginOptions' => 
                                                          [
                                                              'autoclose'=>true,
                                                              'format' => 'yyyy-mm-dd',
                                                          ],
                                                          // 'disabled'=> !$model->isNewRecord, 
                                                      ]);?>

    <?php // $form->field($model, 'tmt_golongan')->textInput() ?>

    <?= $form->field($model, 'tmt_golongan')->widget(DatePicker::className(),
                                                  [
                                                      'type' => DatePicker::TYPE_INPUT,
                                                    //   'value' => '1980-01-01',
                                                    //   'options' => ['placeholder' => 'Tanggal'],
                                                      
                                                      'pluginOptions' => 
                                                      [
                                                          'autoclose'=>true,
                                                          'format' => 'yyyy-mm-dd',
                                                      ],
                                                      // 'disabled'=> !$model->isNewRecord, 
                                                  ]);?>

    <?= $form->field($model, 'jenis_kenaikan_pangkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'masa_kerja_gol_tahun')->textInput() ?>

    <?= $form->field($model, 'masa_kerja_gol_bulan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
