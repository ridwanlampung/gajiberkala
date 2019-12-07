<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\Models\RiwayatGolRuang */

$this->title = 'Create Riwayat Gol Ruang';
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Gol Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-gol-ruang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'RefGolongan' => $RefGolongan,
        ]) ?>

</div>
