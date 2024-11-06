<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EditSchoolTableAddCreateAt extends Migration
{
    public function up()
    {
        $this->forge->addColumn('schools',[
            'created_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('schools', 'created_at');
    }
}
