<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTrainerEmail extends Migration
{
    public function up()
    {
        $this->forge->addColumn('trainers',[
            'email' => [
                'type' => 'VARCHAR',
                'constraint'=> 100,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('trainers', 'email');
    }
}
