<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        // Jika sudah login, langsung tendang ke admin
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/berita');
        }
        return view('auth/login');
    }

    public function process()
    {
        $db = \Config\Database::connect();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $db->table('users')->where('username', $username)->get()->getRowArray();

        if ($user) {
            // Cek password hash
            if (password_verify($password, $user['password'])) {
                // Set Session
                session()->set([
                    'username'   => $user['username'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/admin/berita');
            } else {
                return redirect()->back()->with('error', 'Password salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/')->with('pesan', 'Anda berhasil logout.');
    }
}
