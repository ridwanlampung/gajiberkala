<?php

use yii\db\Migration;

/**
 * Class m191215_043146_user
 */
class m191215_043146_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            // 'id' => '1', 
            'username' => 'admin', 
            'auth_key' => '7HV8k4MmhXNJZThG9SfcmLlSkF4oIE9n', 
            'password_hash' => '$2y$13$cFZQV5iGKyl.6IxV/6vN/e/RiLOc5TJBI3JYgHOX1I5E6sxf749n.', 
            'password_reset_token' => NULL, 
            'email' => 'asasdas@gmail.com', 
            'status' => 10, 
            'created_at' => time(), 
            'updated_at' => time(), 
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191215_043146_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191215_043146_user cannot be reverted.\n";

        return false;
    }
    */
}
