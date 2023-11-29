<?php

namespace App\Controllers;
use App\Models\Model_Tambah;
use App\Models\Model_Soal;
use App\Models\Model_Jawaban;

class Tambah extends BaseController
{

    
     protected $model_tambah;
     
     protected $model_soal;
     protected $model_jawaban;
    
    public function __construct() {
        $this->model_tambah = new Model_Tambah();
        $this->model_soal = new Model_Soal();
        $this->model_jawaban = new Model_Jawaban();
        helper('form');
    }
    public function index()
    {

        $modeldata = new Model_Tambah();
        
        $data = array(
            'title' => 'Tambah',
            'tambah' => $modeldata->findAll(),
            'isi' => 'tambah'
    );
      

        return view('layout/wrapper',$data);
    }
    public function simpan(){
    $pilih = $this->request->getVar('topik');
    $soal = $this->request->getVar('soal');
    $modelsoal = new Model_Soal();
    $modeljawaban = new Model_Jawaban();
    
    $modelsoal->insert([
        'topik'=> $pilih,
        'soal'=> $soal,
    ]);

    $idsoal = $modelsoal->getInsertID();
    $jawabanA = $this->request->getVar('jawabanA');
    $modeljawaban->insert([
        'id_soal'=> $idsoal,
        'jawaban_detail'=>$jawabanA,
    ]);
    $jawabanB = $this->request->getVar('jawabanB');
    $modeljawaban->insert([
        'id_soal'=> $idsoal,
        'jawaban_detail'=>$jawabanB,
    ]);
     $jawabanC = $this->request->getVar('jawabanC');
    $modeljawaban->insert([
        'id_soal'=> $idsoal,
        'jawaban_detail'=>$jawabanC,
    ]);
     $jawabanD = $this->request->getVar('jawabanD');
    $modeljawaban->insert([
        'id_soal'=> $idsoal,
        'jawaban_detail'=>$jawabanD,
    ]);
    $idjawaban = $modeljawaban->getInsertID();
    $jawabanBenar = $this->request->getPost('jawabanBenar');
   

$result = $modeljawaban->update($idjawaban-$jawabanBenar, [
    'jawaban_benar' => true

]);

    return redirect()->to(base_url('tambah'));


    
           // echo "<pre>";
        // var_dump($this->request->getVar());
        // echo "</pre>";
     }

    }