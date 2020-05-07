<?php

use yii\db\Migration;

/**
 * Class m200507_190823_alter_auth_key_column_in_user_table
 */
class m200507_190823_alter_auth_key_column_in_user_table extends Migration {
    /**
     * {@inheritdoc}
     */
    public function safeUp() {
        $this->alterColumn('user', 'auth_key', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->alterColumn('user', 'auth_key', $this->string(32));
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200507_190823_alter_auth_key_column_in_user_table cannot be reverted.\n";

        return false;
    }
    */
}
