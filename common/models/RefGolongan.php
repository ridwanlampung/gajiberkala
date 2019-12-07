<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ref_golongan".
 *
 * @property int $id
 * @property string|null $nama
 * @property string|null $nama_pangkat
 * @property int|null $fung_kredit_utama
 * @property int|null $fung_kredit_tambahan
 * @property int|null $fung_kredit_total
 */
class RefGolongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_golongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'fung_kredit_utama', 'fung_kredit_tambahan', 'fung_kredit_total'], 'integer'],
            [['nama'], 'string', 'max' => 5],
            [['nama_pangkat'], 'string', 'max' => 30],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nama_pangkat' => 'Nama Pangkat',
            'fung_kredit_utama' => 'Fung Kredit Utama',
            'fung_kredit_tambahan' => 'Fung Kredit Tambahan',
            'fung_kredit_total' => 'Fung Kredit Total',
        ];
    }
}
