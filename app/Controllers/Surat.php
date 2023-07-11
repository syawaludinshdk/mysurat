<?php

namespace App\Controllers;
use App\Models\M_surat;
use Codeigniter\Controller;

class Surat extends BaseController
{
    function __construct()
    {
        $modelsurat = new M_surat();
        $data['surat'] = $modelsurat->orderBy('agenda_surat', 'DESC')->findAll();
        return view('v_listsurat_baru', $data);
    }

    function index()
    {
        $modelsurat = new M_surat();
        $data['surat'] = $modelsurat->orderBy('agenda_surat', 'DESC')->findAll();
        if (session()->get('nama_user') == '') {
            session()->setFlashdata('gagal', 'Anda belum login');
            return redirect()->to(base_url('/Login'));
        }
        return view('v_listsurat_baru',$data);
    }

    function kode()
    {
        $modelsurat = new M_surat();

        $data = $modelsurat->autokode();
        return json_encode($data);
    }

    function suratbaru()
    {
        return view('v_listsurat_baru');
    }
    
    // function tambahsurat()
    // {
    //     helper(['form', 'url']);
    //     $modelsurat = new M_surat();
    //     $db = $modelsurat->table('t_surat');
    //     $surat = $this->request->getFile('file');
    //     $input = $this->validate([
    //         'file' => [
    //         'uploaded[file]',
    //         'mime_in[file,application/pdf]',
    //         'max_size[file,5120]',
    //         ]
    //     ]);
    //     $lampiran1 = $this->validate([
    //         'lampiran1' => [
    //         'uploaded[lampiran1]',
    //         'mime_in[lampiran1,application/pdf]',
    //         'max_size[lampiran1,5120]',
    //         ]
    //     ]);
    //     $lampiran2 = $this->validate([
    //         'lampiran2' => [
    //         'uploaded[lampiran2]',
    //         'mime_in[lampiran2,application/pdf]',
    //         'max_size[lampiran2,5120]',
    //         ]
    //     ]);
    //     if ($surat){
    //         $newname=$surat->getRandomName();
    //         $surat->move(WRITEPATH . 'assets', $newname);
    //         $data = [
    //             'agenda_surat' => $this->request->getPost('agenda'),
    //             'nomor_surat' => $this->request->getPost('surat'),
    //             'tgl_surat' => $this->request->getPost('tanggal_surat'),
    //             'tgl_diterima_surat' => $this->request->getPost('tanggal_terima_surat'),
    //             'instansi_surat' => $this->request->getPost('instansi_surat'),
    //             'perihal_surat' => $this->request->getPost('perihal_surat'),
    //             'file_surat' =>  $surat->getName(),
    //         ];
    //         $save = $db->insert($data);
    //         return redirect('Suratbaru')->with('msg', 'Data Berhasil Ditambahkan');
    //     } else {
    //         return redirect('Suratbaru')->with('danger', 'Masukkan File Surat sesuai dengan format');
    //     }
    // }

    function tambahsurat()
    {
        helper(['form', 'url']);
        $modelsurat = new M_surat();
        $db = $modelsurat->table('t_surat');
        $surat = $this->request->getFile('file');
        $filelampiran1 = $this->request->getFile('lampiran1');
        $filelampiran2 = $this->request->getFile('lampiran2');
        $input = $this->validate([
            'file' => [
            'uploaded[file]',
            'mime_in[file,application/pdf]',
            'max_size[file,5120]',
            ]
        ]);
        $lampiran1 = $this->validate([
            'lampiran1' => [
            'uploaded[lampiran1]',
            'mime_in[lampiran1,application/pdf]',
            'max_size[lampiran1,5120]',
            ]
        ]);
        $lampiran2 = $this->validate([
            'lampiran2' => [
            'uploaded[lampiran2]',
            'mime_in[lampiran2,application/pdf]',
            'max_size[lampiran2,5120]',
            ]
        ]);
        if ($input){
            if(!$lampiran1){
                $newname=$surat->getRandomName();
                $surat->move(WRITEPATH . 'assets', $newname);
                $data = [
                'agenda_surat' => $this->request->getPost('agenda'),
                'nomor_surat' => $this->request->getPost('surat'),
                'tgl_surat' => $this->request->getPost('tanggal_surat'),
                'tgl_diterima_surat' => $this->request->getPost('tanggal_terima_surat'),
                'instansi_surat' => $this->request->getPost('instansi_surat'),
                'perihal_surat' => $this->request->getPost('perihal_surat'),
                'file_surat' =>  $surat->getName()
                ];
                $save = $db->insert($data);
                return redirect('Suratbaru')->with('msg', 'Data Berhasil Ditambahkan');
            }else{
                if($lampiran1){
                    if(!$lampiran2){
                        $newname=$surat->getRandomName();
                        $surat->move(WRITEPATH . 'assets', $newname);
                        $newlampiran1=$filelampiran1->getRandomName();
                        $filelampiran1->move(WRITEPATH . 'assets', $newlampiran1);
                        $data = [
                        'agenda_surat' => $this->request->getPost('agenda'),
                        'nomor_surat' => $this->request->getPost('surat'),
                        'tgl_surat' => $this->request->getPost('tanggal_surat'),
                        'tgl_diterima_surat' => $this->request->getPost('tanggal_terima_surat'),
                        'instansi_surat' => $this->request->getPost('instansi_surat'),
                        'perihal_surat' => $this->request->getPost('perihal_surat'),
                        'file_surat' =>  $surat->getName(),
                        'lampiran1_surat' => $filelampiran1->getName()
                        ];
                        $save = $db->insert($data);
                        return redirect('Suratbaru')->with('msg', 'Data Berhasil Ditambahkan');    
                    }
                    else {
                        $newname=$surat->getRandomName();
                        $surat->move(WRITEPATH . 'assets', $newname);
                        $newlampiran1=$filelampiran1->getRandomName();
                        $filelampiran1->move(WRITEPATH . 'assets', $newlampiran1);
                        $newlampiran2=$filelampiran2->getRandomName();
                        $filelampiran2->move(WRITEPATH . 'assets', $newlampiran2);
                        $data = [
                        'agenda_surat' => $this->request->getPost('agenda'),
                        'nomor_surat' => $this->request->getPost('surat'),
                        'tgl_surat' => $this->request->getPost('tanggal_surat'),
                        'tgl_diterima_surat' => $this->request->getPost('tanggal_terima_surat'),
                        'instansi_surat' => $this->request->getPost('instansi_surat'),
                        'perihal_surat' => $this->request->getPost('perihal_surat'),
                        'file_surat' =>  $surat->getName(),
                        'lampiran1_surat' => $filelampiran1->getName(),
                        'lampiran2_surat' => $filelampiran2->getName()
                        ];
                        $save = $db->insert($data);
                        return redirect('Suratbaru')->with('msg', 'Data Berhasil Ditambahkan');
                    }
                } else{
                    return redirect('Suratbaru')->with('danger', 'gagal');     
                }
            }
        } else {
            return redirect('Suratbaru')->with('danger', 'Masukkan File Surat sesuai dengan format');
        }
    }

    function hapussurat($agenda_surat)
    {
        $model = new M_surat;
        $ambilsurat = $model->list_surat($agenda_surat)->getRow();
        if(isset($ambilsurat))
        {
            $model->hapus_surat($agenda_surat);
            return redirect('Suratbaru')->with('msg', 'Data Berhasil Dihapus');
        }else{
            return redirect('Suratbaru')->with('msg', 'Data Gagal Dihapus');
        }
    }

    function listsurat()
    {
        return view('v_listsurat_all');
    }

    function suratbatal()
    {
        return view('v_listsurat_batal');
    }
}
