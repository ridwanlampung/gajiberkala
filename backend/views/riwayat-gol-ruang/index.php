<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RiwayatGolRuangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riwayat Gol Ruangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-gol-ruang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Riwayat Gol Ruang', ['create', 'nip'=>$nip], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nip',
            'gol_id',
            'golongan',
            'sk_no',
            //'sk_tanggal',
            //'tmt_golongan',
            //'jenis_kenaikan_pangkat',
            //'masa_kerja_gol_tahun',
            //'masa_kerja_gol_bulan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
