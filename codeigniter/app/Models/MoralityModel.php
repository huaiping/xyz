<?php

namespace App\Models;

use CodeIgniter\Model;

class MoralityModel extends Model
{
    //protected $table = 'students';

    public function getMorality()
        {
            //if ($id === false) {
                //return $this->findAll();
            //}

            //return $this->where(['xh' => $id])->first();

            $db = \Config\Database::connect();
            $query = $db->query('SELECT xh, xm, sfzh, (sxzzsz+jthd+yjxxx+xystwh+gyld+rcxw+ssbx+jlf+kf) as dyjf, dyxf, sxzzsz, jthd, yjxxx, xystwh, gyld, rcxw, ssbx, jlf, kf, bz FROM morality');
            $results = $query->getResult();
            return $results;

        }

}
