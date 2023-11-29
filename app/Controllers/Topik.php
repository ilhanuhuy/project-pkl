<?php

namespace App\Controllers;
use App\Models\Model_Topik;
class Topik extends BaseController
{
    protected $model_topik;
    public function __construct() {
        $this->model_topik = new Model_Topik();
        helper('form');
    }
    public function index()
    {
        $data = array(
            'title' => 'Topik',
            'topik' => $this->model_topik->all_data(),
            'isi' => 'topik'
    );
        return view('layout/wrapper',$data);
    }
    public function add(){
        $data = array('topik' => $this->request->getPost());
        $this->model_topik->add($data);
        session()->setFlashdata('pesan','Topik Berhasih Di Tambahkan!!!');
        return redirect()->to(base_url('topik'));
    }
}
