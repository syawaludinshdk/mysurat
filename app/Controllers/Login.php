<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_Login;

class Login extends BaseController
{
    function index()
    {
        return view('v_login');
    }

    function cek_login()    
    {
        $session = session();
        $muser = new M_login();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $muser->where(['id_user'=> $username])->first();
        
        if($data){
            $pass = $data['pass_user'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'nama_user'       => $data['nama_user'],
                    'email_user'     => $data['email_user'],
                    'bag_user'       => $data['bag_user'],
                    'email_user'     => $data['email_user'],
                    'alamat_user'     => $data['alamat_user'],
                    'telp_user'     => $data['telp_user'],
                    'jk_user'     => $data['jk_user'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Beranda');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('/Login'));
            }
        }else{
            $session->setFlashdata('msg', 'Pengguna tidak ditemukan');
            return redirect()->to(base_url('/Login'));
        }
    }

    function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Login');
    }
}
