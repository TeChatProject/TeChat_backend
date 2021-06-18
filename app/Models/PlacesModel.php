<?php

namespace App\Models;

use CodeIgniter\Model;
    
class PlacesModel extends Model
{
    protected $table = 'places';
    protected $primaryKey = "places_id";
    protected $allowedFields = ["places_id","places_name"];
    
}

?>