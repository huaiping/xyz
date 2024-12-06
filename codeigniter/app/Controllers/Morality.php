<?php

namespace App\Controllers;

use App\Models\MoralityModel;

class Morality extends BaseController
{
    public function index()
    {
        $session = session();
        if (null == $session->get('group')) {
            return redirect()->to(base_url('codeigniter/'));
        } elseif ($session->get('group') == '2400') {
            return view('morality');
        } else {
            return view('morality_readonly');
        }
    }

    public function get_json()
    {
        $model = model(MoralityModel::class);
        $morality = $model->getMorality();
        $data['morality'] = json_encode($morality);
        echo $data['morality'];
    }

    public function update_json()
    {
        $data = $this->request->getPost();
        $model = model(MoralityModel::class);
        $morality = $model->updateMorality($data);
        echo json_encode($morality);
    }
}
