<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Jawaban extends Model
{
    protected $table            = 'tb_jawaban';
    protected $primaryKey       = 'id_jawaban';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_jawaban','id_soal','nama','jawaban'];
    protected $useTimestamp     = 'true';
    protected $useSoftDeletes   = 'flase';

    function getAll(){
        $builder = $this->db->table('tb_jawaban');
        $builder->join('tb_soal','tb_soal.id_soal = tb_jawaban.id_soal');
        $query = $builder->get();
        return $query->getResult();
    }
     function getJWB(){
        $builder = $this->db->table('tb_jawaban');
        $builder->where(['id_soal']);
        $query = $builder->get();
        return $query->getRowArray();
     }
}