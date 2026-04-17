<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\PengumumanModel;
use App\Models\SejarahModel;

class Home extends BaseController
{
    public function index()
    {
        $beritaModel = new BeritaModel();
        $data['berita'] = $beritaModel->where('status', 'aktif')->orderBy('tanggal', 'DESC')->findAll(4);

        $pengumumanModel = new PengumumanModel();
        $data['pengumuman'] = $pengumumanModel->where('status', 'aktif')->orderBy('tanggal', 'DESC')->findAll(2);
        return view('home', $data);
    }

    public function tentang()
    {
        $sejarahModel = new SejarahModel();
        $data['sejarah'] = $sejarahModel->first();
        return view('tentang', $data);
    }

    public function pendidikan()
    {
        return view('pendidikan');
    }

    public function download()
    {
        return view('download');
    }

    // Tambahkan method ini
    public function detailBerita($slug = null)
    {
        $beritaModel = new BeritaModel();
        $berita = $beritaModel->where('slug', $slug)->where('status', 'aktif')->first();

        if (!$berita) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Berita tidak ditemukan.');
        }

        $beritaLain = $beritaModel->where('status', 'aktif')->orderBy('tanggal', 'DESC')->findAll(5);

        $data = [
            'berita' => $berita,
            'berita_lain' => $beritaLain
        ];

        return view('detail-berita', $data);
    }

    public function semuaBerita()
    {
        $beritaModel = new BeritaModel();

        $data = [
            'berita' => $beritaModel->where('status', 'aktif')->orderBy('tanggal', 'DESC')->paginate(5, 'berita'),
            'pager' => $beritaModel->pager,
            'berita_lain' => $beritaModel->where('status', 'aktif')->orderBy('tanggal', 'DESC')->findAll(5)
        ];
        return view('semua-berita', $data);
    }

    // Tambahkan method ini
    public function detailFakultas($slug = null)
    {
        // Di sini nantinya Anda bisa melakukan query ke database berdasarkan $slug
        // $data['fakultas'] = $this->fakultasModel->getFakultas($slug);

        return view('fakultas/feb');
    }

    public function detailPengumuman($slug = null)
    {
        $pengumumanModel = new PengumumanModel();
        $beritaModel = new BeritaModel();

        $pengumuman = $pengumumanModel->where('slug', $slug)->where('status', 'aktif')->first();

        if (!$pengumuman) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Pengumuman tidak ditemukan.');
        }

        $beritaLain = $beritaModel->where('status', 'aktif')->orderBy('tanggal', 'DESC')->findAll(5);

        $data = [
            'pengumuman' => $pengumuman,
            'berita_lain' => $beritaLain
        ];

        return view('detail-pengumuman', $data);
    }

    public function semuaPengumuman()
    {
        $pengumumanModel = new PengumumanModel();
        $beritaModel = new BeritaModel();
        $data = [
            'pengumuman'  => $pengumumanModel->where('status', 'aktif')->orderBy('tanggal', 'DESC')->paginate(5, 'pengumuman'),
            'pager'       => $pengumumanModel->pager,
            'berita_lain' => $beritaModel->where('status', 'aktif')->orderBy('tanggal', 'DESC')->findAll(5)
        ];

        return view('semua-pengumuman', $data);
    }

    public function sejarahUpn()
    {
        $sejarahModel = new SejarahModel();

        $data = [
            'tittle' => 'Detail Sejarah UPNY',
            'sejarah' => $sejarahModel->first()
        ];

        return view('detail-sejarah', $data);
    }
}
