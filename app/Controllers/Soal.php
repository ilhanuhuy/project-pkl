<?php

namespace App\Controllers;

use App\Models\Model_Soal;
use App\Models\Model_Topik;
use App\Models\Model_Jawaban;
class Soal extends BaseController
{
     protected $model_soal;
     protected $model_topik;
     protected $model_jawaban;
    public function __construct() {
        $this->model_soal = new Model_Soal();
        $this->model_topik = new Model_Topik();
        $this->model_jawaban = new Model_jawaban();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Soal',
            'soal' => $this->model_soal->getAll(),
            'jawaban' => $this->model_jawaban->getAll(),
            'isi' => 'soal'
    );
        return view('layout/wrapper',$data);
    }
    
}
