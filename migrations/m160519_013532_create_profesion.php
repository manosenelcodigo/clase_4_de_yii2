<?php

use yii\db\Migration;

class m160519_013532_create_profesion extends Migration
{
    public function up()
    {
        $this->createTable('profesion', [
            'id' => $this->primaryKey(),
            'profesion' => $this->string(),
            'create_by' => $this->integer(),
            'created_at'    => $this->dateTime(),
            'update_by' => $this->integer(),
            'updated_at'    => $this->dateTime(),
        ]);
    }

    public function down()
    {
        $this->dropTable('profesion');
    }
}
