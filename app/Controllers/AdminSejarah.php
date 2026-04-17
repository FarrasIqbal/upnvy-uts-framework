<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Sejarah;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SejarahModel;

class AdminSejarah extends BaseController
{
    protected $sejarahModel;

    public function __construct()
    {
        $this->sejarahModel = new SejarahModel();
    }

    public function index()
    {
        $data = [
            'tittle' => "Manajemen Sejarah Kampus",
            'sejarah' => $this->sejarahModel->orderBy('id', 'DESC')->findAll()
        ];

        return view('admin/sejarah/index', $data);
    }

    // public function create()
    // {
    //     $data = ['tittle' => 'Update Sejarah'];
    //     return view('admin/sejarah/create', $data);
    // }

    // public function save()
    // {
    //     $this->sejarahModel->save([
    //         'tentang' => $this->request->getVar('tentang'),
    //         'sejarah' => $this->request->getVar('sejarah')
    //     ]);

    //     return redirect()->to('/admin/sejarah')->with('pesan', 'Sejarah kampus berhasil diperbarui');
    // }

    public function edit($id)
    {
        $data = [
            'tittle' => 'Edit Sejarah',
            'sejarah' => $this->sejarahModel->find($id)
        ];

        return view('admin/sejarah/edit', $data);
    }

    public function update($id)
    {
        $this->sejarahModel->save([
            'id'       => $id,
            'tentang'  => $this->request->getVar('tentang'),
            'sejarah'  => $this->request->getVar('sejarah')
        ]);

        return redirect()->to('/admin/sejarah')->with('pesan', 'Sejarah kampus berhasil diperbarui');
    }

    // public function delete($id){
    //     $sejarah = $this->sejarahModel->find($id);

    //     $this->sejarahModel->delete();
    // }
}
