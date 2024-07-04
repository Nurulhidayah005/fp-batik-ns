<?php

namespace App\Controllers;

class Logout extends BaseController
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
           $this->session->remove('LoggedUserData');

			return redirect()->to(base_url('login'));
		} else {
            return redirect()->to(base_url('home'));
       	}
    }
}
