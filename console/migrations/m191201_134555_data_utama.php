<?php

use yii\db\Migration;

/**
 * Class m191201_134555_data_utama
 */
class m191201_134555_data_utama extends Migration
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

        $this->createTable('{{%data_utama}}', [
            'id' => $this->primaryKey(),
            'nip' => $this->string(),
            'nama' => $this->string(),
            'kd_golongan' => $this->tinyInteger(),
            'golongan' => $this->string(),
            'tmt_pns' => $this->date(),
            ], $tableOptions);

        // $this->addPrimaryKey('data_utama_pkey', 'data_utama', ['id']);
        

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191201_134555_data_utama cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191201_134555_data_utama cannot be reverted.\n";

        return false;
    }
    */
}
