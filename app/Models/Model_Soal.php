<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Soal extends Model{
    protected $table            = 'tb_soal';
    protected $primaryKey       = 'id_soal';
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_soal','soal','topik','a','b','c','d','kunci_jawaban'];
    protected $useTimestamp     = 'true';
    protected $useSoftDeletes   = 'flase';

    function getAll(){

        
        $builder = $this->db->table('tb_soal');
        // $builder->join('tb_topik','tb_topik.id_topik = tb_soal.topik');
        $query = $builder->get();
        return $query->getResult();
 }

 public function id($idsoal){
return $this->db->table('tb_soal')->where([
    'id_soal'=> $idsoal
    
])->get()->getRowArray();
 }

}