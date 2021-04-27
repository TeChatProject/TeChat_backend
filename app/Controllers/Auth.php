<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Pass;
class Auth extends BaseController
{
    public function __construct(){
        helper(['url','form']);
    }
    public function index()
    {
        return view('auth/login');
    }
    public function check(){
        $validation = $this -> validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' =>[
                    'required' =>'Email is required',
                    'valid_email' =>'Enter a valid email address',
                    'is_not_unique' => 'This email is not registered on our service'
                ]
                ],
            'password'=> [
                'rules' =>'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'Password is required',
                    'min_length' => 'Password must have atlest 5 characters in length',
                    'max_length' => 'Password must not have more that 12 characters in length'
                ]
            ]
        ]);
        if(!$validation){
            return view('auth/login',['validation'=>$this->validator]);
        }else{
            $email = $this ->request->getPost('email');
            $password = $this->request->getPost('password');
            $usersModel = new \App\Models\UsersModel();
            $user_info = $usersModel->where('email',$email)->first();
            if(!($password==$user_info['password'])){
                session()->setFlashdata('fail','Incorrect password');
                return redirect()->to('/auth')->withInput();
            }else{
                $user_id = $user_info['id'];
                session()->set('loggedUser',$user_id);
                return redirect()->to('/dashboard');
            }
        }
    }
}