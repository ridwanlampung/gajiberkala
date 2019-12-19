<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbSiswa */

$this->title = Yii::t('app', 'Update Tb Siswa: {name}', [
    'name' => $model->id_siswa,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tb Siswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_siswa, 'url' => ['view', 'id' => $model->id_siswa]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tb-siswa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
