<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAkun3 */
?>
<div class="tbl-akun3-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_akun1',
            'kd_akun2',
            'kd_akun3',
            'akun3',
        ],
    ]) ?>

</div>
