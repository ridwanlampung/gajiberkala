<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "riwayat_gol_ruang".
 *
 * @property int $id
 * @property string|null $nip
 * @property int|null $gol_id
 * @property string|null $golongan
 * @property string|null $sk_no
 * @property string|null $sk_tanggal
 * @property string|null $tmt_golongan
 * @property string|null $jenis_kenaikan_pangkat
 * @property int|null $masa_kerja_gol_tahun
 * @property int|null $masa_kerja_gol_bulan
 */
class RiwayatGolRuang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_gol_ruang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gol_id', 'masa_kerja_gol_tahun', 'masa_kerja_gol_bulan'], 'integer'],
            [['sk_tanggal', 'tmt_golongan'], 'safe'],
            [['nip', 'golongan', 'sk_no', 'jenis_kenaikan_pangkat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'gol_id' => 'Gol ID',
            'golongan' => 'Golongan',
            'sk_no' => 'Sk No',
            'sk_tanggal' => 'Sk Tanggal',
            'tmt_golongan' => 'Tmt Golongan',
            'jenis_kenaikan_pangkat' => 'Jenis Kenaikan Pangkat',
            'masa_kerja_gol_tahun' => 'Masa Kerja Gol Tahun',
            'masa_kerja_gol_bulan' => 'Masa Kerja Gol Bulan',
        ];
    }

    public function setDefault()
    {
    }

    public function setGolRuang()
    {
        $model = RefGolongan::find()->where(['id'=>$this->gol_id])->one();
        $this->golongan = $model->nama_pangkat;
    }
    
    public function getDataUtama()
    {
        return $this->hasOne(DataUtama::className(), ['nip' => 'nip']);
    }
}
