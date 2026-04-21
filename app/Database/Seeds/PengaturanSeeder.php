<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id'               => 1,
            'kampus_1_alamat'  => 'Jl. Padjajaran, Sleman, Yogyakarta, Indonesia. 55283',
            'kampus_1_telepon' => '(0274) 486733',
            'kampus_1_email'   => 'info@upnyk.ac.id',
            'kampus_2_alamat'  => 'Jl. Babarsari 2 Yogyakarta, Indonesia. 55281',
            'kampus_2_telepon' => '(0274) 486733',
            'kampus_2_email'   => 'info@upnyk.ac.id'
        ];
        $this->db->table('pengaturan')->insert($data);
    }
}
