<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSchool extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
                'auto_increment'=>true,
            ],
            'school_name'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'address'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'phone_number'=>[
                'type'=>'VARCHAR',
                'constraint'=>20,
            ],
        ]);
        $this->forge->addKey('id',true);
        //$this->forge->addForeignKey();
        $this->forge->createTable("schools");
    }

    public function down()
    {
        $this->forge->dropTable("schools");
    }
}
