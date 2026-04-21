<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PengaturanModel;

class AdminPengaturan extends BaseController
{
    protected $pengaturanModel;

    public function __construct()
    {
        $this->pengaturanModel = new PengaturanModel();
    }

    public function index()
    {
        $data = [
            'title'      => 'Pengaturan Website',
            'pengaturan' => $this->pengaturanModel->first()
        ];
        return view('admin/pengaturan/index', $data);
    }

    public function update()
    {
        $this->pengaturanModel->save([
            'id'               => 1, // Memaksa update baris ID 1
            'kampus_1_alamat'  => $this->request->getVar('kampus_1_alamat'),
            'kampus_1_telepon' => $this->request->getVar('kampus_1_telepon'),
            'kampus_1_email'   => $this->request->getVar('kampus_1_email'),
            'kampus_2_alamat'  => $this->request->getVar('kampus_2_alamat'),
            'kampus_2_telepon' => $this->request->getVar('kampus_2_telepon'),
            'kampus_2_email'   => $this->request->getVar('kampus_2_email')
        ]);

        return redirect()->to('/admin/pengaturan')->with('pesan', 'Pengaturan kontak berhasil diperbarui.');
    }
}
