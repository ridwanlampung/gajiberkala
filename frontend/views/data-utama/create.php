<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\Models\DataUtama */

$this->title = 'Create Data Utama';
$this->params['breadcrumbs'][] = ['label' => 'Data Utamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-utama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
