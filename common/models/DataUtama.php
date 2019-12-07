<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "data_utama".
 *
 * @property int $id
 * @property string|null $nip
 * @property string|null $nama
 * @property int|null $kd_golongan
 * @property string|null $golongan
 * @property string|null $tmt_pns
 */
class DataUtama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_utama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_golongan'], 'integer'],
            [['tmt_pns'], 'safe'],
            [['nip', 'nama', 'golongan'], 'string', 'max' => 255],
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
            'nama' => 'Nama',
            'kd_golongan' => 'Kd Golongan',
            'golongan' => 'Golongan',
            'tmt_pns' => 'Tmt Pns',
        ];
    }

    public function getBerikutnya()
    {
        if($rw = RiwayatGajiBerkala::find()->where(['nip'=>$this->nip])->orderBy(['id' => SORT_DESC])->one()){
            return $rw->kenaikan_berikutnya;
        }
        else{
            return '';
        }
    }
    

}
