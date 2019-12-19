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
 * @property int $id_kelas
 * @property string $tgl_masuk
 * @property int $gaji_ortu
 *
 * @property TbKelas $kelas
 */
class TbSiswaAjax extends \yii\db\ActiveRecord
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
            [['nis', 'nama', 'alamat', 'id_kelas', 'tgl_masuk', 'gaji_ortu'], 'required'],
            [['id_kelas', 'gaji_ortu'], 'integer'],
            [['tgl_masuk'], 'safe'],
            [['nis'], 'string', 'max' => 5],
            [['nama'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['id_kelas'], 'exist', 'skipOnError' => true, 'targetClass' => TbKelas::className(), 'targetAttribute' => ['id_kelas' => 'id_kelas']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_siswa' => 'Id Siswa',
            'nis' => 'Nis',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'id_kelas' => 'Id Kelas',
            'tgl_masuk' => 'Tgl Masuk',
            'gaji_ortu' => 'Gaji Ortu',
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
