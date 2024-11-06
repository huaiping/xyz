<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    public function getStudent()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT xh, xm, xb, sfzh, fqxm, fqdh, mqxm, mqdh, jtzz, zkf, czbyxx, gqty, qsh, bz FROM students');
        $results = $query->getResult();
        return $results;
    }
}
