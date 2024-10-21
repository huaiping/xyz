<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    //protected $table = 'students';

    public function getStudent()
        {
            //if ($id === false) {
                //return $this->findAll();
            //}

            //return $this->where(['xh' => $id])->first();

            $db = \Config\Database::connect();
            $query = $db->query('SELECT xh, xm, sfzh FROM students');
            $results = $query->getResult();
            return $results;

        }

}