<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TbKelas */

$this->title = Yii::t('app', 'Create Tb Kelas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tb Kelas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kelas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
