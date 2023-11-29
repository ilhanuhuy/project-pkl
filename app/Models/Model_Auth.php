<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Auth extends Model
{
    public function save_register($data)
    {
        $this->db->table('tb_user')->insert($data);
    }
    public function login($nip, $password){
        return $this->db->table('tb_user')->where([
            'nip'=>$nip,
            'password'=>$password
        ])->get()->getRowArray();
    }
}