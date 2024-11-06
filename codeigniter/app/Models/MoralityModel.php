<?php

namespace App\Models;

use CodeIgniter\Model;

class MoralityModel extends Model
{
    public function getMorality()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT xh, xm, sfzh, (sxzzsz+jthd+yjxxx+xystwh+gyld+rcxw+ssbx+jlf+kf) as dyjf, dyxf, sxzzsz, jthd, yjxxx, xystwh, gyld, rcxw, ssbx, jlf, kf, bz FROM morality');
        $results = $query->getResult();
        return $results;
    }
}
