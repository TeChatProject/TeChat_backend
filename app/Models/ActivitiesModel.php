<?php

namespace App\Models;

use CodeIgniter\Model;
    
class ActivitiesModel extends Model
{
    protected $table = 'activities';
    protected $primaryKey = 'act_id';
    protected $allowedFields = ['act_author','act_type','act_text','act_header','act_persons','act_date','act_konum'];
    
}

?>