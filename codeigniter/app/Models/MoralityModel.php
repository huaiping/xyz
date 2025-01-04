<?php

namespace App\Models;

use CodeIgniter\Model;

class MoralityModel extends Model
{
    public function getMorality()
    {
        $db = \Config\Database::connect();
        $query = $db->query('SELECT xh, xm, sfzh, dyjf, dyxf, zzsxsz, jthd, yjxxx, xystwh, gyld, rcxw, ssbx, jlf, kf, jkfjl1, jkfjl2, jkfjl3, jkfjl4, jkfjl5, jkfjl6, jkfjl7, jkfjl8, jkfjl9, jkfjl10, bz FROM morality ORDER BY xh asc');
        $results = $query->getResult();
        return $results;
    }

    public function updateMorality($data)
    {
        $db = \Config\Database::connect();
        $query = $db->query("UPDATE morality SET zzsxsz='".$data['zzsxsz']."', jthd='".$data['jthd']."', yjxxx='".$data['yjxxx']."', xystwh='".$data['xystwh']."', gyld='".$data['gyld']."', rcxw='".$data['rcxw']."', ssbx='".$data['ssbx']."', jlf='".$data['jlf']."', kf='".$data['kf']."', jkfjl1='".$data['jkfjl1']."', jkfjl2='".$data['jkfjl2']."', jkfjl3='".$data['jkfjl3']."', jkfjl4='".$data['jkfjl4']."', jkfjl5='".$data['jkfjl5']."', jkfjl6='".$data['jkfjl6']."', jkfjl7='".$data['jkfjl7']."', jkfjl8='".$data['jkfjl8']."', jkfjl9='".$data['jkfjl9']."', jkfjl10='".$data['jkfjl10']."' WHERE sfzh='".$data['sfzh']."';");
        $query = $db->query('UPDATE morality SET dyjf=zzsxsz + jthd + yjxxx + xystwh + gyld + rcxw + ssbx + jlf + kf;');
        $query = $db->query("UPDATE morality SET dyxf= CASE WHEN dyjf<60 THEN 2 WHEN dyjf>=60 AND dyjf<70 THEN 3 WHEN dyjf>=70 AND dyjf<80 THEN 4 WHEN dyjf>=80 AND dyjf<90 THEN 5 WHEN dyjf>=90 THEN 6 ELSE dyxf END WHERE sfzh='".$data['sfzh']."';");
        $data['status'] = 'success';
        return $data;
    }
}
