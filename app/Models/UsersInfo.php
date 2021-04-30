<?php

namespace App\Models;

use CodeIgniter\Model;
    
class UsersInfo extends Model
{
    protected $table = 'users_info';
    protected $primaryKey = 'id';
    protected $allowedFields = ['ad','soyad','ogrno','bolum','sinif'];
}

?>