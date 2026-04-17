<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sejarah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tentang' => [
                'type'       => 'TEXT',
            ],
            'sejarah' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('sejarah');
    }

    public function down()
    {
        //
    }
}
