<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_Jawaban;
use App\Models\Model_Soal;

class Ujian extends BaseController
{
    protected $model_soal;
    protected $model_jawaban;
    public function __construct() {
        $this->model_soal = new Model_Soal(); 
        $this->model_jawaban = new Model_Jawaban(); 
       
        helper('form');
    }
    public function index()
    {
        $data = array(
            'soaldanjawaban' => $this->model_soal->getAll(),
            // 'jawab'=> $this->model_jawaban->getAll(),
            // 'a' => $this->model_jawaban->getAll(),
            // 'b' => $this->model_jawaban->getAll(),
            // 'c' => $this->model_jawaban->getAll(),
            // 'd' => $this->model_jawaban->getAll()
        );

            
                // 'soal' => $this->model_soal->getAllData(),
            // 'jawaban' => $this->model_jawaban->getAll(),
//      echo "<pre>";
//         var_dump($data);
//         echo "</pre>";
//  die();
    return view('ujian',$data);
}

public function hasil()
{   
    $idsoal = $this->request->getVar('soal');
    $model_soal = new Model_Soal();
    $soal = $model_soal->id($idsoal);
    
    $model_jawaban = new Model_Jawaban();
    $data = $model_jawaban->insert([
        'id_soal'=> $soal,
        'jawaban'=> $this->request->getVar('jawaban'),
        'nama'=> $this->request->getVar('nama')
    ]);

    //        echo "<pre>";
    //     var_dump($this->request->getVar());
    //     echo "</pre>";
}



}