<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat extends Model
{
    protected $table = 't_surat';
    protected $allowedFields = ['agenda_surat','nomor_surat','tgl_surat','tgl_diterima_surat','instansi_surat','perihal_surat','file_surat','lampiran1_surat','lampiran2_surat','dispowali','disposekda','dispoasis1','dispoasis2','dispoasis3','dispokabag','dispotambah','subbag'];

    function autokode()
    {
        $builder = $this->table('t_surat');
        $builder->selectMax('agenda_surat','kodeMax');
        $query = $builder->get()->getResult();
        $kd = '';

        if($query > 0){
            foreach ($query as $key){
                $ambilkode = substr($key->kodeMax, -4);
                $counter = (intval($ambilkode))+1;
                $kd = sprintf('%04s', $counter);
            }
        } else {
            $kd = '0001';
        }
        return 'A-'.$kd;
    }

    function hapus_surat($agenda_surat)
    {   
        $builder = $this->db->table($this->table);
        return $builder->delete(['agenda_surat' => $agenda_surat]);
    }

    function list_surat($agenda_surat = false)
    {
        if($agenda_surat === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['agenda_surat' => $agenda_surat]);
        }
    }
}