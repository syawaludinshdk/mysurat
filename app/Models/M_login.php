<?php

namespace App\Models;

use CodeIgniter\Model;

class M_login extends Model
{
    protected $table = 't_user';
    protected $allowedFields = ['id_user','pass_user','nama_user','email_user','alamat_user','telp_user','jk_user','bag_user'];
}