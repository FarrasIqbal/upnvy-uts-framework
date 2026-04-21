<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\PengumumanModel;
use App\Models\SejarahModel;
use App\Models\FakultasModel;
use App\Models\DownloadModel;

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
        $fakultasModel = new FakultasModel();
        $data = [
            'tittle' => 'Pendidikan | UPN VETERAN YOGYAKARTA',
            'fakultas' => $fakultasModel->findAll()
        ];

        return view('pendidikan', $data);
    }

    public function detailFakultas($slug = null)
    {
        $fakultasModel = new FakultasModel();
        $fakultas = $fakultasModel->where('slug', $slug)->first();

        if (!$fakultas) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Fakultas tidak ditemukan');
        }

        $data = [
            'tittle' => $fakultas['singkatan'] . ' | UPN VETERAN YOGYAKARTA',
            'fakultas' => $fakultas
        ];

        return view('detail-fakultas', $data);
    }



    public function download()
    {
        $downloadModel = new DownloadModel();
        $beritaModel = new BeritaModel();

        $semuaFile = $downloadModel->orderBy('kategori', 'ASC')->orderBy('id', 'DESC')->findAll();
        $dataGroup = [];
        foreach ($semuaFile as $file) {
            $dataGroup[$file['kategori']][] = $file;
        }

        $data = [
            'title'       => 'Download | UPN VETERAN YOGYAKARTA',
            'downloads'   => $dataGroup, // Mengirim data yang sudah dikelompokkan
            'berita_lain' => $beritaModel->where('status', 'aktif')->orderBy('tanggal', 'DESC')->findAll(5) // Untuk Sidebar
        ];

        return view('download', $data);
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
