<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Dashboard';
?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3>Gaji Berkala Bulan ini (<?= 'bulan '.$bulan.' tahun '.$tahun ?>)</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Tgl Gaji Berkala</th>
                        <th>Cetak</th>
                    </tr>
                    <?php
                        $no=0;
                        foreach($gaji_berkala as $gb){
                            $no++;
                            echo "
                            <tr>
                                <td>".$no."</td>
                                <td>".$gb->nip."</td>
                                <td>".$gb->dataUtama->nama."</td>
                                <td>".$gb->kenaikan_berikutnya."</td>
                                <td>".Html::a('Cetak Pengantar', ['gaji-berkala/cetak', 'nip' => $gb->nip], ['class' => 'btn btn-primary', 'target'=>'_blank'])."</td>
                                </tr>
                            ";
                        }
                    ?>
                </table>
            </div>
        </div>

        <div class="box">
            <div class="box-header">
                <h3>Gaji Berkala Bulan Depan (<?= 'bulan '.$bulan1.' tahun '.$tahun1 ?>)</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Tgl Gaji Berkala</th>
                    </tr>
                    <?php
                        $no=0;
                        foreach($gaji_berkala_bulan_depan as $gb){
                            $no++;
                            echo "
                            <tr>
                                <td>".$no."</td>
                                <td>".$gb->nip."</td>
                                <td>".$gb->dataUtama->nama."</td>
                                <td>".$gb->kenaikan_berikutnya."</td>
                            </tr>
                            ";
                        }
                    ?>
                </table>
            </div>
        </div>

        <div class="box">
            <div class="box-header">
                <?php $tahun4 = $np_tahun+4; ?>
                <h3>Naik Pangkat Bulan Ini(<?= 'Tahun '.$tahun4.' Bulan '.$np_bulan ?>)</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Tgl Kenaikan Pangkat</th>
                    </tr>
                    <?php
                        $no=0;
                        foreach($GolRuangTahunBulan as $grt){
                            $no++;
                            echo "
                            <tr>
                                <td>".$no."</td>
                                <td>".$grt->nip."</td>
                                <td>".$grt->dataUtama->nama."</td>
                                <td>".$grt->sk_tanggal."</td>
                            </tr>
                            ";
                        }
                    ?>
                </table>
            </div>
        </div>

        <div class="box">
            <div class="box-header">
                <h3>Naik Pangkat Tahun Ini (<?= $np_tahun+4 ?>)</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Tgl Kenaikan Pangkat</th>
                    </tr>
                    <?php
                        $no=0;
                        foreach($GolRuangTahun as $grt){
                            $no++;
                            echo "
                            <tr>
                                <td>".$no."</td>
                                <td>".$grt->nip."</td>
                                <td>".$grt->dataUtama->nama."</td>
                                <td>".$grt->sk_tanggal."</td>
                            </tr>
                            ";
                        }
                    ?>
                </table>
            </div>
        </div>
    </dov>
</div>