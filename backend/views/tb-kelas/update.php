<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbKelas */

$this->title = Yii::t('app', 'Update Tb Kelas: {name}', [
    'name' => $model->id_kelas,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tb Kelas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kelas, 'url' => ['view', 'id' => $model->id_kelas]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tb-kelas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
