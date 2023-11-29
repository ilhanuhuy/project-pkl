<?php

namespace App\Controllers;

use App\Models\Model_Jawaban;
//use App\Models\Model_Topik;
class Jawaban extends BaseController
{
     protected $model_jawaban;
    public function __construct() {
        $this->model_jawaban = new Model_Jawaban();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Jawaban',
            'soal' => $this->model_jawaban->getAll(),
            'isi' => 'jawaban'
    );
        return view('layout/wrapper',$data);
    }
}
