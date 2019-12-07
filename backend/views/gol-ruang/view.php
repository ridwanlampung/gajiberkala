<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\Models\RiwayatGolRuang */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Gol Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="riwayat-gol-ruang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nip',
            'gol_id',
            'golongan',
            'sk_no',
            'sk_tanggal',
            'tmt_golongan',
            'jenis_kenaikan_pangkat',
            'masa_kerja_gol_tahun',
            'masa_kerja_gol_bulan',
        ],
    ]) ?>

</div>
