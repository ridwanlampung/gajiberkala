<?php

use yii\db\Migration;

/**
 * Class m191201_232325_riwayat_gaji_berkala
 */
class m191201_232325_riwayat_gaji_berkala extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%riwayat_gaji_berkala}}', [
            'id' => $this->primaryKey(),
            'nip' => $this->string(),
            'pangkat' => $this->string(),
            'gaji_pokok_terakhir' => $this->integer(),
            'oleh_pejabat' => $this->string(),
            'tanggal_sk' => $this->date(),
            'nomor_sk' => $this->string(),
            'tmt_sk' => $this->date(),
            'masa_kerja_tahun' => $this->integer(),
            'masa_kerja_bulan' => $this->integer(),
            'gaji_pokok_baru' => $this->integer(),
            'tmt_gaji' => $this->date(),
            'kenaikan_berikutnya' => $this->date(),
            ], $tableOptions);

        // $this->addPrimaryKey('data_utama_pkey', 'data_utama', ['id']);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191201_232325_riwayat_gaji_berkala cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191201_232325_riwayat_gaji_berkala cannot be reverted.\n";

        return false;
    }
    */
}
