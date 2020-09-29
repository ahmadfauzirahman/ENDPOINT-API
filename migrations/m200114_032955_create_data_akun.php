<?php

use yii\db\Migration;

/**
 * Class m200114_032955_create_data_akun
 */
class m200114_032955_create_data_akun extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('data_jurnal.data_akun', [
            'id' => $this->primaryKey(),
            'kode_acc' => $this->string(30),
            'nama_acc' => $this->string(120),
            'header' => $this->integer(2),
            'parent' => $this->integer(2),
            'dk' => $this->string(1),
            'saldo_awal' => $this->money(),
            'l_nonaktif' => $this->integer(1)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
//        echo "m200114_032955_create_data_akun cannot be reverted.\n";
        $this->dropTable('data_akun');
//        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200114_032955_create_data_akun cannot be reverted.\n";

        return false;
    }
    */
}
