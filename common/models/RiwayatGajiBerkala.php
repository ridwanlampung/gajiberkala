<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "riwayat_gaji_berkala".
 *
 * @property int $id
 * @property string|null $nip
 * @property string|null $pangkat
 * @property int|null $gaji_pokok_terakhir
 * @property string|null $oleh_pejabat
 * @property string|null $tanggal_sk
 * @property string|null $nomor_sk
 * @property string|null $tmt_sk
 * @property int|null $masa_kerja_tahun
 * @property int|null $masa_kerja_bulan
 * @property int|null $gaji_pokok_baru
 * @property string|null $tmt_gaji
 * @property string|null $kenaikan_berikutnya
 */
class RiwayatGajiBerkala extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_gaji_berkala';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gaji_pokok_terakhir', 'masa_kerja_tahun', 'masa_kerja_bulan', 'gaji_pokok_baru'], 'integer'],
            [['tanggal_sk', 'tmt_sk', 'tmt_gaji', 'kenaikan_berikutnya'], 'safe'],
            [['nip', 'pangkat', 'oleh_pejabat', 'nomor_sk'], 'string', 'max' => 255],
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
            'pangkat' => 'Pangkat',
            'gaji_pokok_terakhir' => 'Gaji Pokok Terakhir',
            'oleh_pejabat' => 'Oleh Pejabat',
            'tanggal_sk' => 'Tanggal Sk',
            'nomor_sk' => 'Nomor Sk',
            'tmt_sk' => 'Tmt Sk',
            'masa_kerja_tahun' => 'Masa Kerja Tahun',
            'masa_kerja_bulan' => 'Masa Kerja Bulan',
            'gaji_pokok_baru' => 'Gaji Pokok Baru',
            'tmt_gaji' => 'Tmt Gaji',
            'kenaikan_berikutnya' => 'Kenaikan Berikutnya',
        ];
    }

    public function setDefault()
    {
        // informasi umum
        $asn = DataUtama::find()->where(['nip'=>$this->nip])->one();
        $this->pangkat = $asn->golongan;

        // gaji terakhir
        if($rw = RiwayatGajiBerkala::find()->where(['nip'=>$this->nip])->orderBy(['id' => SORT_DESC])->one()){
            $this->gaji_pokok_terakhir = $rw->gaji_pokok_baru;
        }
        else{
            // 
        }

        // berikutnya
        $this->kenaikan_berikutnya = date('Y-m-d', strtotime('+2 years', strtotime('now')));
    }

}
