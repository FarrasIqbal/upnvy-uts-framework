<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            // Default password: 'adminpassword' (di-hash agar aman)
            'password' => password_hash('admin1234', PASSWORD_DEFAULT),
        ];
        $this->db->table('users')->insert($data);
    }
}
