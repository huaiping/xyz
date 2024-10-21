<?php

namespace App\Controllers;

use App\Models\StudentModel;
//use CodeIgniter\Exceptions\PageNotFoundException;

class Student extends BaseController
{
    //public function index(): string
    public function index()
    {
        $model = model(StudentModel::class);

        $data['students'] = $model->getStudent();

        return view('student', $data);
        //return view('student');
    }
}
