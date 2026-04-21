<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FakultasModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFakultas extends BaseController
{
    protected $fakultasModel;

    public function __construct()
    {
        $this->fakultasModel = new FakultasModel();
    }

    public function index()
    {
        $data = [
            'title'    => 'Manajemen Fakultas',
            'fakultas' => $this->fakultasModel->orderBy('id', 'DESC')->findAll()
        ];
        return view('admin/fakultas/index', $data);
    }

    public function create()
    {
        $data = ['title' => 'Tambah Fakultas Baru'];
        return view('admin/fakultas/create', $data);
    }

    public function save()
    {
        // Penanganan Upload Gambar
        $fileGambar = $this->request->getFile('gambar_fakultas');
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default-fakultas.jpg';
        } else {
            $namaGambar = $fileGambar->getRandomName();
            // Pastikan Anda sudah membuat folder public/assets/img/fakultas/
            $fileGambar->move('assets/img/fakultas', $namaGambar);
        }

        $slug = url_title($this->request->getVar('nama_fakultas'), '-', true);

        $this->fakultasModel->save([
            'nama_fakultas'    => $this->request->getVar('nama_fakultas'),
            'singkatan'        => $this->request->getVar('singkatan'),
            'slug'             => $slug,
            'keunggulan'       => $this->request->getVar('keunggulan'),
            'prodi_magister'   => $this->request->getVar('prodi_magister'),
            'prodi_sarjana'    => $this->request->getVar('prodi_sarjana'),
            'prospek_karir'    => $this->request->getVar('prospek_karir'),
            'capaian_prestasi' => $this->request->getVar('capaian_prestasi'),
            'kontak_alamat'    => $this->request->getVar('kontak_alamat'),
            'kontak_email'     => $this->request->getVar('kontak_email'),
            'kontak_telepon'   => $this->request->getVar('kontak_telepon'),
            'link_website'     => $this->request->getVar('link_website'),
            'gambar_fakultas'  => $namaGambar
        ]);

        return redirect()->to('/admin/fakultas')->with('pesan', 'Data Fakultas berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [
            'title'    => 'Edit Fakultas',
            'fakultas' => $this->fakultasModel->find($id)
        ];
        return view('admin/fakultas/edit', $data);
    }

    public function update($id)
    {
        $fileGambar = $this->request->getFile('gambar_fakultas');
        $gambarLama = $this->request->getVar('gambarLama');

        if ($fileGambar->getError() == 4) {
            $namaGambar = $gambarLama;
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/fakultas', $namaGambar);

            if ($gambarLama != 'default-fakultas.jpg' && file_exists('assets/img/fakultas/' . $gambarLama)) {
                unlink('assets/img/fakultas/' . $gambarLama);
            }
        }

        $slug = url_title($this->request->getVar('nama_fakultas'), '-', true);

        $this->fakultasModel->save([
            'id'               => $id,
            'nama_fakultas'    => $this->request->getVar('nama_fakultas'),
            'singkatan'        => $this->request->getVar('singkatan'),
            'slug'             => $slug,
            'keunggulan'       => $this->request->getVar('keunggulan'),
            'prodi_magister'   => $this->request->getVar('prodi_magister'),
            'prodi_sarjana'    => $this->request->getVar('prodi_sarjana'),
            'prospek_karir'    => $this->request->getVar('prospek_karir'),
            'capaian_prestasi' => $this->request->getVar('capaian_prestasi'),
            'kontak_alamat'    => $this->request->getVar('kontak_alamat'),
            'kontak_email'     => $this->request->getVar('kontak_email'),
            'kontak_telepon'   => $this->request->getVar('kontak_telepon'),
            'link_website'     => $this->request->getVar('link_website'),
            'gambar_fakultas'  => $namaGambar
        ]);

        return redirect()->to('/admin/fakultas')->with('pesan', 'Data Fakultas berhasil diubah.');
    }

    public function delete($id)
    {
        $fakultas = $this->fakultasModel->find($id);
        if ($fakultas['gambar_fakultas'] != 'default-fakultas.jpg') {
            unlink('assets/img/fakultas/' . $fakultas['gambar_fakultas']);
        }

        $this->fakultasModel->delete($id);
        return redirect()->to('/admin/fakultas')->with('pesan', 'Data Fakultas berhasil dihapus.');
    }
}
