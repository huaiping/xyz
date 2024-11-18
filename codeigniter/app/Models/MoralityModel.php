<?php

namespace App\Models;

use CodeIgniter\Model;

class MoralityModel extends Model
{
    public function getMorality()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT xh, xm, sfzh, dyjf, dyxf, sxzzsz, jthd, yjxxx, xystwh, gyld, rcxw, ssbx, jlf, kf, bz FROM morality');
        $results = $query->getResult();
        return $results;
    }

    public function updateMorality($data)
    {
        $db = \Config\Database::connect();
        $query = $db->query('UPDATE morality SET sxzzsz=10');
        $data['status'] = 'success';
        return $data;
    }
}
