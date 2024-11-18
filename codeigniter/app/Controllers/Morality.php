<?php

namespace App\Controllers;

use App\Models\MoralityModel;

class Morality extends BaseController
{
    public function index()
    {
        return view('morality');
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
        $data = $this->request->getPost('data');
        $model = model(MoralityModel::class);
        $morality = $model->updateMorality($data);
        echo json_encode($data);
    }

}
