<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusToUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addColumn('users',[
            'status' => [
                'type' => 'VARCHAR',
                'constraint'=> 50,
                'default' => 'new',
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropTable('users', 'status');
    }
}
