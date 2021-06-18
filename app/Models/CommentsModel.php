<?php

namespace App\Models;

use CodeIgniter\Model;
    
class CommentsModel extends Model
{
    protected $table = 'places_comments';
    protected $primaryKey = "comment_id";
    protected $allowedFields = ['places_id','commenter','comment_text','comment_time'];
    
}

?>