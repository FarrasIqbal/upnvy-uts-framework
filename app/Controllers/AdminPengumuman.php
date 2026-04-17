<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PengumumanModel;

class AdminPengumuman extends BaseController
{
    protected $pengumumanModel;

    public function __construct()
    {
        $this->pengumumanModel = new PengumumanModel();
    }

    public function index()
    {
        $data = [
            'tittle' => 'Manajemen Pengumuman',
            'pengumuman' => $this->pengumumanModel->orderBy('id', 'DESC')->findAll()
        ];

        return view('admin/pengumuman/index', $data);
    }

    public function create()
    {
        $data = ['tittle' => 'Tambah Pengumuman Baru'];
        return view('admin/pengumuman/create', $data);
    }

    public function save()
    {
        $fileGambar = $this->request->getFile('gambar');

        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default-pengumuman.jpg';
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/pengumuman', $namaGambar);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->pengumumanModel->save([
            'judul'          => $this->request->getVar('judul'),
            'slug'           => $slug,
            'isi_pengumuman' => $this->request->getVar('isi_pengumuman'),
            'tanggal'        => $this->request->getVar('tanggal'),
            'status'     => $this->request->getVar('status'),
            'gambar'         => $namaGambar
        ]);

        return redirect()->to('/admin/pengumuman')->with('pesan', 'Pengumuman berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [
            'title'      => 'Edit Pengumuman',
            'pengumuman' => $this->pengumumanModel->find($id)
        ];
        return view('admin/pengumuman/edit', $data);
    }

    public function update($id)
    {
        $fileGambar = $this->request->getFile('gambar');
        $gambarLama = $this->request->getVar('gambarLama');

        if ($fileGambar->getError() == 4) {
            $namaGambar = $gambarLama;
        } else {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/pengumuman', $namaGambar);

            if ($gambarLama != 'default-pengumuman.jpg' && file_exists('assets/img/pengumuman/' . $gambarLama)) {
                unlink('assets/img/pengumuman/' . $gambarLama);
            }
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->pengumumanModel->save([
            'id'             => $id,
            'judul'          => $this->request->getVar('judul'),
            'slug'           => $slug,
            'isi_pengumuman' => $this->request->getVar('isi_pengumuman'),
            'tanggal'        => $this->request->getVar('tanggal'),
            'status'     => $this->request->getVar('status'),
            'gambar'         => $namaGambar
        ]);

        return redirect()->to('/admin/pengumuman')->with('pesan', 'Pengumuman berhasil diubah.');
    }

    public function delete($id)
    {
        $pengumuman = $this->pengumumanModel->find($id);
        if ($pengumuman['gambar'] != 'default-pengumuman.jpg') {
            unlink('assets/img/pengumuman/' . $pengumuman['gambar']);
        }

        $this->pengumumanModel->delete($id);
        return redirect()->to('/admin/pengumuman')->with('pesan', 'Pengumuman berhasil dihapus.');
    }
}
