<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahStatus extends Migration
{
    public function up()
    {

        $this->forge->addColumn('berita', [
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'default'    => 'aktif',
                'after'      => 'tanggal'
            ]
        ]);

        $this->forge->addColumn('pengumuman', [
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'default'    => 'aktif',
                'after'      => 'tanggal'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('berita', 'status');
        $this->forge->dropColumn('pengumuman', 'status');
    }
}
