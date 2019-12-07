<?php

use yii\db\Migration;

/**
 * Class m191207_020552_ref_gol_ruang
 */
class m191207_020552_ref_gol_ruang extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%ref_golongan}}', [
            'id' => $this->tinyInteger()->notNull(),
            'nama' => $this->string(5),
            'nama_pangkat' => $this->string(30),
            'fung_kredit_utama' => $this->smallInteger(),
            'fung_kredit_tambahan' => $this->smallInteger(),
            'fung_kredit_total' => $this->smallInteger()
        ], $tableOptions);

        $this->addPrimaryKey('ref_golongan_pkey', 'ref_golongan', ['id']);

        $this->batchInsert(
            'ref_golongan', 
            [
                'id',
                'nama',
                'nama_pangkat',
                'fung_kredit_utama',
                'fung_kredit_tambahan',
                'fung_kredit_total'
            ], 
            [
                ['11', 'I/a', 'Juru Muda', '0', '0', '0'],
                ['12', 'I/b', 'Juru Muda Tingkat I', '0', '0', '0'],
                ['13', 'I/c', 'Juru', '0', '0', '0'],
                ['14', 'I/d', 'Juru Tingkat I', '0', '0', '0'],
                ['21', 'II/a', 'Pengatur Muda', '20', '5', '25'],
                ['22', 'II/b', 'Pengatur Muda Tingkat I', '32', '8', '40'],
                ['23', 'II/c', 'Pengatur', '48', '12', '60'],
                ['24', 'II/d', 'Pengatur Tingkat I', '64', '16', '80'],
                ['31', 'III/a', 'Penata Muda', '80', '20', '100'],
                ['32', 'III/b', 'Penata Muda Tingkat I', '120', '30', '150'],
                ['33', 'III/c', 'Penata', '160', '40', '200'],
                ['34', 'III/d', 'Penata Tingkat I', '240', '60', '300'],
                ['41', 'IV/a', 'Pembina', '320', '80', '400'],
                ['42', 'IV/b', 'Pembina Tingkat I', '440', '110', '550'],
                ['43', 'IV/c', 'Pembina Utama Muda', '560', '140', '700'],
                ['44', 'IV/d', 'Pembina Utama Madya', '680', '170', '850'],
                ['45', 'IV/e', 'Pembina Utama', '840', '210', '1050'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191207_020552_ref_gol_ruang cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191207_020552_ref_gol_ruang cannot be reverted.\n";

        return false;
    }
    */
}
