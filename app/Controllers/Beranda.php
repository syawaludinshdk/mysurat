<?php

namespace App\Controllers;

class Beranda extends BaseController
{
    public function index()
    {
        if (session()->get('nama_user') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/Login'));
         }  
        return view('v_beranda');
    }

    function profil()
    {
        return view('v_profil');
    }
}
