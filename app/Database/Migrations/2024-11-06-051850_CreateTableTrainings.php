<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTrainings extends Migration
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
            'date'=>[
                'type'=>'DATETIME',
                'null' => true,
            ],
            'start_time'=>[
                'type'=>'DATETIME',
                'null' => true,
            ],
            'end_time'=>[
                'type'=>'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id',true);
        //$this->forge->addForeignKey();
        $this->forge->createTable("trainings");
    }

    public function down()
    {
        $this->forge->dropTable("trainings");
    }
}
