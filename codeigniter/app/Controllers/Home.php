<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function login()
    {
        $data = $this->request->getPost();
        $model = model(HomeModel::class);
        $authority = $model->getAuthority($data);
        return redirect()->to(base_url('codeigniter/'));
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('codeigniter/'));
    }
}
