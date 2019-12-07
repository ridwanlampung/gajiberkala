<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\Models\RiwayatGajiBerkala */

$this->title = 'Create Riwayat Gaji Berkala';
$this->params['breadcrumbs'][] = ['label' => 'Riwayat Gaji Berkalas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riwayat-gaji-berkala-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
