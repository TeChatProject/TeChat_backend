<?php

namespace App\Models;

use CodeIgniter\Model;
    
class FriendModel extends Model
{
    protected $table = 'friends';
    protected $allowedFields = ['id','arkadas_id','ark_durum'];
    
}

?>