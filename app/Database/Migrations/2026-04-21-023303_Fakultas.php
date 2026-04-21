<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fakultas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama_fakultas'    => ['type' => 'VARCHAR', 'constraint' => '255'],
            'singkatan'        => ['type' => 'VARCHAR', 'constraint' => '50'],
            'slug'             => ['type' => 'VARCHAR', 'constraint' => '255', 'unique' => true],
            'gambar_fakultas'  => ['type' => 'VARCHAR', 'constraint' => '255'],
            'keunggulan'       => ['type' => 'TEXT'],
            'prodi_magister'   => ['type' => 'TEXT', 'null' => true],
            'prodi_sarjana'    => ['type' => 'TEXT', 'null' => true],
            'prospek_karir'    => ['type' => 'TEXT', 'null' => true],
            'capaian_prestasi' => ['type' => 'TEXT', 'null' => true],
            'kontak_alamat'    => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true],
            'kontak_email'     => ['type' => 'VARCHAR', 'constraint' => '100', 'null' => true],
            'kontak_telepon'   => ['type' => 'VARCHAR', 'constraint' => '50', 'null' => true],
            'link_website'     => ['type' => 'VARCHAR', 'constraint' => '255', 'null' => true],
            'created_at'       => ['type' => 'DATETIME', 'null' => true],
            'updated_at'       => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('fakultas');
    }

    public function down()
    {
        $this->forge->dropTable('fakultas');
    }
}
