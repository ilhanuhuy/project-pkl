<?php

namespace App\Controllers;
use App\Models\Model_Tambah;
use App\Models\Model_Soal;
use App\Models\Model_Jawaban;

class Tambah extends BaseController
{

    
     
     protected $model_soal;
     protected $model_jawaban;
    
    public function __construct() {
  
        $this->model_soal = new Model_Soal();
        helper('form');
    }
    public function index()
    {

        
        $data = array(
            'title' => 'Tambah',
 
            'isi' => 'tambah'
    );
      

        return view('layout/wrapper',$data);
    }
    public function simpan(){
    // $pilih = $this->request->getVar('topik');
    $soal = $this->request->getVar('soal');
    $modelsoal = new Model_Soal();
    $modeljawaban = new Model_Jawaban();
    

    $idsoal = $modelsoal->getInsertID();
    $modelsoal->insert([
        'id_soal'=> $idsoal,
        'soal' => $this->request->getVar('soal'),
        'a' => $this->request->getVar('a'),
        'b' => $this->request->getVar('b'),
        'c' => $this->request->getVar('c'),
        'd' => $this->request->getVar('d'),
        'kunci_jawaban' => $this->request->getVar('kunci')
    ]);
    // $jawabanB = $this->request->getVar('b');
    // $modeljawaban->insert([
    //     'id_soal'=> $idsoal,
    //     'b'=>$jawabanB,
    // ]);
    //  $jawabanC = $this->request->getVar('c');
    // $modeljawaban->insert([
    //     'id_soal'=> $idsoal,
    //     'c'=>$jawabanC,
    // ]);
    //  $jawabanD = $this->request->getVar('d');
    // $modeljawaban->insert([
    //     'id_soal'=> $idsoal,
    //     'd'=>$jawabanD,
    // ]);

    return redirect()->to(base_url('tambah'));


    
           // echo "<pre>";
        // var_dump($this->request->getVar());
        // echo "</pre>";
     }

    }