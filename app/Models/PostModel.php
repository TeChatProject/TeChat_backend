<?php

namespace App\Models;

use CodeIgniter\Model;
    
class PostModel extends Model
{
    protected $table = 'posts';
    protected $indexKey = 'post_id';
    protected $allowedFields = ['id','photo','icerik'];
}

?>