<?php

use yii\db\Migration;

/**
 * Class m191207_013548_jenaikan_pangkat
 */
class m191207_013548_jenaikan_pangkat extends Migration
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

        $this->createTable('{{%riwayat_gol_ruang}}', [
            'id' => $this->primaryKey(),
            'nip' => $this->string(),
            'gol_id' => $this->integer(),
            'golongan' => $this->string(),
            'sk_no' => $this->string(),
            'sk_tanggal' => $this->date(),
            'tmt_golongan' => $this->date(),
            'jenis_kenaikan_pangkat' => $this->string(),
            'masa_kerja_gol_tahun' => $this->integer(),
            'masa_kerja_gol_bulan' => $this->integer()
            ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191207_013548_jenaikan_pangkat cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191207_013548_jenaikan_pangkat cannot be reverted.\n";

        return false;
    }
    */
}
