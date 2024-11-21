<?php

namespace App\Models;

use CodeIgniter\Model;

class TeacherModel extends Model
{
    public function getTeacher()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT xm, xb, mz, jg, zzmm, rjxk, sfzh, cjgzsj, csny, lxdh, byyx, zy, zqxl, zqxw, xl, xw, pth, zyjszw, jszg, gwdj, bm, bz FROM teachers');
        $results = $query->getResult();
        return $results;
    }
}
