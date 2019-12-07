<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GajiBerkalaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riwayat Gaji Berkalas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-gaji-berkala-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Gaji Berkala', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nip',
            'pangkat',
            'gaji_pokok_terakhir',
            'oleh_pejabat',
            //'tanggal_sk',
            //'nomor_sk',
            //'tmt_sk',
            //'masa_kerja_tahun',
            //'masa_kerja_bulan',
            //'gaji_pokok_baru',
            //'tmt_gaji',
            //'kenaikan_berikutnya',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
