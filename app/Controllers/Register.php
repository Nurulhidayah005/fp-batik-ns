<?php

namespace App\Controllers;

class Register extends BaseController
{
    protected $session;
	protected $userModel;

	function __construct()
	{
		$this->userModel = new \App\Models\UserModel();
		$this->session = \Config\Services::session();
	}

    public function index()
    {
    	if ($this->session->get('LoggedUserData')) {
			return redirect()->to(base_url('home'));
		} else {
       		return view('register/form');
       	}
    }

    public function proses_register()
	{
        $nama = $this->request->getPost('nama');
		$username = $this->request->getPost('username');
		$pass = $this->request->getPost('password');

        $user_baru = [
            'nama' => $nama,
            'username' => $username,
            'password' => sha1($pass)
        ];

        $proses_db = $this->userModel->insert($user_baru);

        if ($proses_db === false)
        {
                $error = $this->userModel->errors();
                $msg = '';
                foreach ($error as $key => $value) {
                    $msg .= "{$value} ";
                }
                $pesan = 'Gagal resgistrasi '. $msg;

                $data_temp = $this->session->getFlashdata('msg');

                if ($data_temp != null && $data_temp != '') {
                    $error_msg = $data_temp;
                }  {
                    $error_msg = $pesan;
                }

                $data_view = [
                    'error_msg' => $error_msg
                ];

                return view('register/form', $data_view);
        } 

        $this->session->setFlashdata("success","Registrasi sukses");   
		return redirect()->to(base_url('login'));

	}
}
