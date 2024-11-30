<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function login()
    {
        $session = session();
        $model = model(HomeModel::class);
        $authority = $model->getAuthority();
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('codeigniter/'));
    }
}
