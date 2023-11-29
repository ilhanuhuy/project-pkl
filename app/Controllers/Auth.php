<?php

namespace App\Controllers;
use App\Models\Model_Auth;
class Auth extends BaseController
{
    protected $model_auth;
    public function __construct()
    {
        helper('form');
        $this->model_auth = new Model_Auth();
    }

    public function register()
    {
    $data = array(
            'title' => 'Register',
        );
        return view('register',$data);
    }
    public function save_register(){
        if ($this ->validate([
            'nama_user'=>[
                'label'=>'Nama',
                'rules'=>'required',
                'errors'=> ['required'=> '{field} Wajib diisi!!!'
                ]
            ],'nip'=>[
                'label'=>'NIP',
                'rules'=>'required',
                'errors'=> ['required'=> '{field} Wajib diisi!!!'
                ]
            ],
            'no_hp'=>[
                'label'=>'No Handphone',
                'rules'=>'required',
                'errors'=> ['required'=> '{field} Wajib diisi!!!'
                ]
            ],
            'password'=>[
                'label'=>'Password',
                'rules'=>'required',
                'errors'=> ['required'=> '{field} Wajib diisi!!!'
                ]
            ],
            'repassword'=>[
                'label'=>'Retype Password',
                'rules'=>'required|matches[password]',
                'errors'=> [
                    'required'=> '{field} Wajib diisi!!!',
                    'matches'=> '{field} Password tidaksama !!!'
                ]
            ],
            ]
        )){ 
            $data = array(
                'nama_user' => $this->request->getPost('nama_user'),
                'nip' => $this->request->getPost('nip'),
                'no_hp' => $this->request->getPost('no_hp'),
                'password' => $this->request->getPost('password'),
                'level' => 3
            );//jika validasi berhasil
            $this->model_auth->save_register($data);
            session()->setFlashdata('pesan', 'Pendaftaran Berhasil!!!');
            return redirect()->to('/auth/login'); 
        }else {
                session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
                return redirect()->to(base_url('auth/register'));
            }
        }

 public function login()
    {
    $data = array(
            'title' => 'Login',
        );
        if(session('id_user')){
            return redirect()->to(site_url('home'));
        }
        return view('login',$data);
    
        
    }
    
    public function cek_login()
    {
    if ($this->validate([
        'nip'=>[
                'label'=>'nip',
                'rules'=>'required',
                'errors'=> ['required'=> '{field} Wajib diisi!!!'
                ]
        ],
        'password'=>[
                'label'=>'password',
                'rules'=>'required',
                'errors'=> ['required'=> '{field} Wajib diisi!!!'
                ]
            ]
        ])){
    $nip = $this->request->getPost('nip');
    $password = $this->request->getPost('password');
    $cek = $this->model_auth->login($nip, $password);
    if ($cek){
        session()->set('log', true);
        session()->set('nama_user', $cek['nama_user']);
        session()->set('nip', $cek['nip']);
        session()->set('level', $cek['level']);
        session()->set('foto_user', $cek['foto_user']);
        return redirect()->to('home');
    }else{
        session()->setFlashdata('pesan','Login Gagal. Cek NIP atau Password');
        return redirect()->to(base_url('auth/login'));
    }

}else{
        session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
        return redirect()->to(base_url('auth/login'));
    }
}
 public function logout(){
    session()->remove('log');
    session()->remove('nama_user');
    session()->remove('level');
    session()->remove('foto_user');
    session()->setFlashdata('pesan','LogoutSuksess.');
    return redirect()->to(base_url('auth/login'));

}
}