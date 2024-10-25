<?php

namespace App\Controllers;

use App\Models\TeacherModel;

class Teacher extends BaseController
{
    public function index()
    {
        return view('teacher');
    }

    public function get_json()
    {
        $model = model(TeacherModel::class);
        $teachers = $model->getTeacher();
        $data['teachers'] = json_encode($teachers);
        echo $data['teachers'];
    }
}
