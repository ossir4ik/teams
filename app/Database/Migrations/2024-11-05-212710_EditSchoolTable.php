<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class EditSchoolTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('schools',[
            'updated_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('schools', 'updated_at');
    }
}
