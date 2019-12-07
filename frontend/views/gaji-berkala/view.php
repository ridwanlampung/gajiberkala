<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\Models\RiwayatGajiBerkala */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Gaji Berkalas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="riwayat-gaji-berkala-view">

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
            'pangkat',
            'gaji_pokok_terakhir',
            'oleh_pejabat',
            'tanggal_sk',
            'nomor_sk',
            'tmt_sk',
            'masa_kerja_tahun',
            'masa_kerja_bulan',
            'gaji_pokok_baru',
            'tmt_gaji',
            'kenaikan_berikutnya',
        ],
    ]) ?>

</div>
