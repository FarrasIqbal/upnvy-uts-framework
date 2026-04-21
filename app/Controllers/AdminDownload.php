<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DownloadModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdminDownload extends BaseController
{

    protected $downloadModel;

    public function __construct()
    {
        $this->downloadModel = new DownloadModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Manajemen Download',
            'downloads' => $this->downloadModel->orderBy('kategori', 'ASC')->orderBy('id', 'DESC')->findAll()
        ];
        return view('admin/download/index', $data);
    }

    public function create()
    {
        $data = ['title' => 'Tambah File Baru'];
        return view('admin/download/create', $data);
    }

    public function save()
    {
        $fileDokumen = $this->request->getFile('file_unduhan');

        if ($fileDokumen->getError() == 4) {
            return redirect()->back()->with('error', 'Anda harus memilih file dokumen untuk diupload!');
        }

        $namaFile = $fileDokumen->getRandomName();

        $fileDokumen->move('assets/files', $namaFile);

        $this->downloadModel->save([
            'judul'        => $this->request->getVar('judul'),
            'kategori'     => $this->request->getVar('kategori'),
            'file_unduhan' => $namaFile
        ]);

        return redirect()->to('/admin/download')->with('pesan', 'File dokumen berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [
            'title'    => 'Edit File Download',
            'download' => $this->downloadModel->find($id)
        ];
        return view('admin/download/edit', $data);
    }

    public function update($id)
    {
        $fileDokumen = $this->request->getFile('file_unduhan');
        $fileLama = $this->request->getVar('fileLama');

        if ($fileDokumen->getError() == 4) {
            $namaFile = $fileLama;
        } else {
            $namaFile = $fileDokumen->getRandomName();
            $fileDokumen->move('assets/files', $namaFile);

            if (file_exists('assets/files/' . $fileLama)) {
                unlink('assets/files/' . $fileLama);
            }
        }

        $this->downloadModel->save([
            'id'           => $id,
            'judul'        => $this->request->getVar('judul'),
            'kategori'     => $this->request->getVar('kategori'),
            'file_unduhan' => $namaFile
        ]);

        return redirect()->to('/admin/download')->with('pesan', 'File dokumen berhasil diubah.');
    }

    public function delete($id)
    {
        $download = $this->downloadModel->find($id);

        if (file_exists('assets/files/' . $download['file_unduhan'])) {
            unlink('assets/files/' . $download['file_unduhan']);
        }
        $this->downloadModel->delete($id);

        return redirect()->to('/admin/download')->with('pesan', 'File berhasil dihapus.');
    }
}
