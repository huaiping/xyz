<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    public function getAuthority($data)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT account, password, name, group, status FROM members WHERE account='".$data['account']."';");
        $results = $query->getResult();
        return $results;
    }
}
