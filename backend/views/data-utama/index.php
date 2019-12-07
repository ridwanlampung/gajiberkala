<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DataUtamaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Utamas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-utama-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Utama', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nip',
            'nama',
            // 'kd_golongan',
            'golongan',
            //'tmt_pns',
            // 'berikutnya',
            [
                'header' => 'Gaji Berkala Berikutnya',
                'value' => 'berikutnya',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{myButton}',  // the default buttons + your custom button
                'buttons' => [
                    'myButton' => function($url, $model, $key) {     // render your custom button
                        // return Url::to(['Gaji Berkala', 'id' => $model->id]);;
                        return Html::a('Gaji Berkala',['riwayat-gaji-berkala/index','nip' => $model->nip],['class'=>'btn btn-primary']);
                    }
                ]
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{btn_gol}',  // the default buttons + your custom button
                'buttons' => [
                    'btn_gol' => function($url, $model, $key) {     // render your custom button
                        // return Url::to(['Gaji Berkala', 'id' => $model->id]);;
                        return Html::a('Gol Ruang',['riwayat-gol-ruang/index','nip' => $model->nip],['class'=>'btn btn-primary']);
                    }
                ]
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
