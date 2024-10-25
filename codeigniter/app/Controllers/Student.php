<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Student extends BaseController
{
    public function index()
    {
        return view('student');
    }

    public function get_json()
    {
        $model = model(StudentModel::class);
        $students = $model->getStudent();
        $data['students'] = json_encode($students);
        echo $data['students'];
    }
}
