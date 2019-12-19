<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_kelas".
 *
 * @property int $id_kelas
 * @property string|null $nama_kelas
 *
 * @property TbSiswa[] $tbSiswas
 */
class TbKelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kelas'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kelas' => Yii::t('app', 'Id Kelas'),
            'nama_kelas' => Yii::t('app', 'Nama Kelas'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbSiswas()
    {
        return $this->hasMany(TbSiswa::className(), ['id_kelas' => 'id_kelas']);
    }
    public function getJumlahSiswa()
    {
        return $this->getTbSiswas()->count();
    }
}
