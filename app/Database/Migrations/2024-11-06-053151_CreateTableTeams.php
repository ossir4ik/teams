<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableTeams extends Migration
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
            'name'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'kind_of_sport'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'school_id'=>[
                'type'=>'INT',
                'constraint'=>5,
            ],

            'trainer_id'=>[
                'type'=>'INT',
                'constraint'=>5,
            ],

            'training_id'=>[
                'type'=>'INT',
                'constraint'=>5,
            ],
        ]);
        $this->forge->addKey('id',true);
        //$this->forge->addForeignKey();
        $this->forge->createTable("team");
    }

    public function down()
    {
        $this->forge->dropTable("team");
    }
}
