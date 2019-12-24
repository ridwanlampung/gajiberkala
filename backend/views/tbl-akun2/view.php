<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAkun2 */
?>
<div class="tbl-akun2-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_akun1',
            'kd_akun2',
            'akun2',
        ],
    ]) ?>

</div>
