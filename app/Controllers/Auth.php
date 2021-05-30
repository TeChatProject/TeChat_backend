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
        if(session()->has('loggedUser')){
            return redirect()->to('/dashboard');
        }
        return view('auth/login');
    }//images
    public function check(){
        $validation = $this -> validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[users.email]',
                'errors' =>[
                    'required' =>'Email is required',
                    'valid_email' =>'Geçerli bir e-posta giriniz.',
                    'is_not_unique' => 'Kullandığınız e-posta sistemimizde bulunmamaktadır.'
                ]
                ],
            'password'=> [
                'rules' =>'required|min_length[5]|max_length[15]',
                'errors' => [
                    'required' => 'Password is required',
                    'min_length' => 'Parolanız en az 5 karakter içermelidir.',
                    'max_length' => 'Parolanız en fazla 15 karakter içermelidir.'
                ]
            ]
        ]);
        if(!$validation){
            return view('auth/login',['validation'=>$this->validator]);
        }else{
            $email = $this ->request->getPost('email');
            $password = $this->request->getPost('password');
            $token_response = $this->request->getPost('token_response');
            $usersModel = new \App\Models\UsersModel();
            $user_info = $usersModel->where('email',$email)->first();
            if(!($password==$user_info['password'])){
                session()->setFlashdata('fail','Geçersiz parola.');
                return redirect()->to('/auth')->withInput();
            }else{
                $user_id = $user_info['id'];
                session()->set('loggedUser',$user_id);
                return redirect()->to('/dashboard');
            }
            
        }
    }
    public function logout(){
        if(session()->has('loggedUser')){
            session()->remove('loggedUser');
            return redirect()->to('/auth?access=out')->with('fail','Sistemden çıkış yapıldı.');
        }
    }
}