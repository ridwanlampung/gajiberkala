<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\Models\RiwayatGajiBerkala */

$this->title = 'Update Riwayat Gaji Berkala: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Gaji Berkalas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="riwayat-gaji-berkala-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
