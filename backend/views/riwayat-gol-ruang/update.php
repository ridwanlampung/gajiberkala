<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\Models\RiwayatGolRuang */

$this->title = 'Update Riwayat Gol Ruang: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Gol Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-gol-ruang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'RefGolongan' => $RefGolongan,
    ]) ?>

</div>
