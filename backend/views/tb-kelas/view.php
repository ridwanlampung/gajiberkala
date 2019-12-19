<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TbKelas */

$this->title = $model->id_kelas;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tb Kelas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-kelas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_kelas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_kelas], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_kelas',
            'nama_kelas',
        ],
    ]) ?>

</div>
<table class="table table-bordered table-hover">
    <thead>
        <tr class="danger">
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nama Kelas</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($TbSiswas as $s): ?>
        <tr>
            <td><?php echo $s->nis; ?></td>
            <td><?php echo $s->nama; ?></td>
            <td><?php echo $s->alamat; ?></td>
            <td><?php echo $model->nama_kelas; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
