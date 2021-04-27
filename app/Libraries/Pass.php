<?php 
namespace App\Libraries;

class Pass{
    public static function check($entered_password,$db_password)
    {
        if(password_verify($entered_password,$db_password)){
            return true;
        }else{
            return false;
        }
    }
}