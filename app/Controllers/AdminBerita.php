<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Berita;
use App\Models\BeritaModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminBerita extends BaseController
{
    protected $beritaModel;

    public function __construct()
    {
        $this->beritaModel = new BeritaModel();
    }

    public function index()
    {
        $data = [
            'tittle' => 'Manajemen Berita',
            'berita' => $this->beritaModel->orderBy('id', 'DESC')->findAll()
        ];

        return view('admin/berita/index', $data);
    }

    public function create()
    {
        $data = ['tittle' => 'Tambah Berita Baru'];
        return view('admin/berita/create', $data);
    }

    public function save()
    {
        $fileGambar = $this->request->getFile('gambar');

        if ($fileGambar->getError() == 4) {
            $nameGambar = 'default.jpg';
        } else {
            $nameGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/berita', $nameGambar);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->beritaModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'isi_berita' => $this->request->getVar('isi_berita'),
            'penulis' => $this->request->getVar('penulis'),
            'tanggal' => $this->request->getVar('tanggal'),
            'status' => $this->request->getVar('status'),
            'gambar' => $nameGambar

        ]);

        return redirect()->to('/admin/berita')->with('pesan', 'Berita berhasil ditambahkan');
    }

    // 5. Menampilkan form Edit Berita
    public function edit($id)
    {
        $data = [
            'title'  => 'Edit Berita',
            'berita' => $this->beritaModel->find($id)
        ];
        return view('admin/berita/edit', $data);
    }

    // 6. Menyimpan perubahan (Update) ke Database
    public function update($id)
    {
        $fileGambar = $this->request->getFile('gambar');
        $gambarLama = $this->request->getVar('gambarLama');

        // Cek apakah admin mengupload gambar baru
        if ($fileGambar->getError() == 4) {
            $namaGambar = $gambarLama; // Pakai gambar lama
        } else {
            // Generate nama file random & pindahkan file
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move('assets/img/berita', $namaGambar);

            // Hapus file gambar lama jika bukan gambar default
            if ($gambarLama != 'default.jpg' && file_exists('assets/img/berita/' . $gambarLama)) {
                unlink('assets/img/berita/' . $gambarLama);
            }
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);

        // Fungsi save() di CI4 akan otomatis melakukan UPDATE jika ada 'id' yang dikirim
        $this->beritaModel->save([
            'id'         => $id,
            'judul'      => $this->request->getVar('judul'),
            'slug'       => $slug,
            'isi_berita' => $this->request->getVar('isi_berita'),
            'penulis'    => $this->request->getVar('penulis'),
            'tanggal'    => $this->request->getVar('tanggal'),
            'status'     => $this->request->getVar('status'),
            'gambar'     => $namaGambar
        ]);

        return redirect()->to('/admin/berita')->with('pesan', 'Data berita berhasil diubah.');
    }

    public function delete($id)
    {
        $berita = $this->beritaModel->find($id);

        if ($berita['gambar'] != 'default.jpg') {
            unlink('assets/img/berita/' . $berita['gambar']);
        }

        $this->beritaModel->delete($id);
        return redirect()->to('/admin/berita')->with('pesan', "Berita berhasil dihapus");
    }
}
