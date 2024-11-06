<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    public function getTeacher()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT xm, xb, mz, xk, sfzh, cjgz, csny, lxdh, byyx, zy, xl, xw, bm, bz FROM teachers');
        $results = $query->getResult();
        return $results;
    }
}
