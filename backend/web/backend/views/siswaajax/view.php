<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\TbSiswaAjax */
?>
<div class="tb-siswa-ajax-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_siswa',
            'nis',
            'nama',
            'alamat',
            'id_kelas',
            'tgl_masuk',
            'gaji_ortu',
        ],
    ]) ?>

</div>
