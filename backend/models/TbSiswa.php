<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_siswa".
 *
 * @property int $id_siswa
 * @property string $nis
 * @property string $nama
 * @property string $alamat
 * @property int|null $id_kelas
 *
 * @property TbKelas $kelas
 */
class TbSiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_siswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nis', 'nama', 'alamat'], 'required'],
            [['id_kelas'], 'integer'],
            [['nis'], 'string', 'max' => 5],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['id_kelas'], 'exist', 'skipOnError' => true, 'targetClass' => TbKelas::className(), 'targetAttribute' => ['id_kelas' => 'id_kelas']],
            [['tgl_masuk'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_siswa' => Yii::t('app', 'Id Siswa'),
            'nis' => Yii::t('app', 'Nis'),
            'nama' => Yii::t('app', 'Nama'),
            'alamat' => Yii::t('app', 'Alamat'),
            'id_kelas' => Yii::t('app', 'Id Kelas'),
            'tgl_masuk' => Yii::t('app', 'Tanggal Masuk'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKelas()
    {
        return $this->hasOne(TbKelas::className(), ['id_kelas' => 'id_kelas']);
    }
}
