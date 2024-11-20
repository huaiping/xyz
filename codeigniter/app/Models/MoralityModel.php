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
        $query = $db->query("UPDATE morality SET sxzzsz='".$data['sxzzsz']."', jthd='".$data['jthd']."', yjxxx='".$data['yjxxx']."', xystwh='".$data['xystwh']."', gyld='".$data['gyld']."', rcxw='".$data['rcxw']."', ssbx='".$data['ssbx']."', jlf='".$data['jlf']."', kf='".$data['kf']."' WHERE sfzh='".$data['sfzh']."';");
        $query = $db->query('UPDATE morality SET dyjf=sxzzsz + jthd + yjxxx + xystwh + gyld + rcxw + ssbx + jlf + kf;');
        $query = $db->query("UPDATE morality SET dyxf= CASE WHEN dyjf<60 THEN 2 WHEN dyjf>=60 AND dyjf<70 THEN 3 WHEN dyjf>=70 AND dyjf<80 THEN 4 WHEN dyjf>=80 AND dyjf<90 THEN 5 WHEN dyjf>=90 THEN 6 ELSE dyxf END WHERE sfzh='".$data['sfzh']."';");
        $data['status'] = 'success';
        return $data;
    }
}
