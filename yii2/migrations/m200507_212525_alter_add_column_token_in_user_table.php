<?php

use yii\db\Migration;

/**
 * Class m200507_212525_alter_add_column_token_in_user_table
 */
class m200507_212525_alter_add_column_token_in_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'token', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'token');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200507_212525_alter_add_column_token_in_user_table cannot be reverted.\n";

        return false;
    }
    */
}
