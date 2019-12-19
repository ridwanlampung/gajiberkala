<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbSiswa */

$this->title = Yii::t('app', 'Create Tb Siswa');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tb Siswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
