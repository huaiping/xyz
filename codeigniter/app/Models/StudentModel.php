<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    public function getStudent()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT xh, xm, xb, mz, sfzh, fqxm, fqdh, mqxm, mqdh, xxjtzz, zkf, czbyxx, gqty, qsh, gkf, dxlqyx, lqzy, bz FROM students');
        $results = $query->getResult();
        return $results;
    }
}
