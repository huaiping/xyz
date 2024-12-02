<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    public function getAuthority($data)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT `group` FROM members WHERE account='".$data['account']."' and password='".$data['password']."';");
        $results = $query->getResult();
        return $results;
    }
}
