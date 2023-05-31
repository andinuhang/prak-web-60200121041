<?php

use yii\db\Migration;

/**
 * Class m230531_020315_mahasiswa041
 */
class m230531_020315_mahasiswa041 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{mahasiswa041}}',[
            'id041'=>$this->primarykey(),
            'nim041'=>$this->string(255)->notNull()->unique(),
            'nama041'=>$this->string(255)->notNull(),
            'kelas041'=>$this->string(255)->notNull(),
            'status041'=>$this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230531_020315_mahasiswa041 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230531_020315_mahasiswa041 cannot be reverted.\n";

        return false;
    }
    */
}
