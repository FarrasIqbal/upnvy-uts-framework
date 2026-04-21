<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengaturan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'kampus_1_alamat'  => ['type' => 'TEXT', 'null' => true],
            'kampus_1_telepon' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true],
            'kampus_1_email'   => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true],
            'kampus_2_alamat'  => ['type' => 'TEXT', 'null' => true],
            'kampus_2_telepon' => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true],
            'kampus_2_email'   => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true],
            'updated_at'       => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengaturan');
    }

    public function down()
    {
        $this->forge->dropTable('pengaturan');
    }
}
