<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddProfiles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true
            ],
            'photo' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ],
            'create_at'=>[
                'type'=>'TIMESTAMP',
                'null'=>true
            ],
            'update_at'=>[
                'type'=>'TIMESTAMP',
                'null'=>true
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('profiles');
        
    }

    public function down()
    {
        $this->forge->dropTable('profiles');
    }
}
