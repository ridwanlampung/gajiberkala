<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TbSiswa */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tb Siswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-siswa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_siswa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_siswa], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <!-- TES TAMBAH KOMENTAR -->
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_siswa',
            'nis',
            'nama',
            'alamat',
            'id_kelas',
            'tgl_masuk',
        ],
    ]) ?>

</div>
