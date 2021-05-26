<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $postModel = new \App\Models\PostModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $postInfo = $postModel->find($loggedUserID);
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo,
            'postInfo'=>$postInfo
        ];
        
		return view('dashboard/index', $data);
	}
    public function post(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $icerik = $this->request->getPost('textholder');
        $arr = [
            'id'=>$userInfo['id'],
            'photo'=>'',
            'icerik'=>$icerik
        ];
        $postModel = new \App\Models\PostModel();
        $query = $postModel->insert($arr);
        if($query){
            return redirect()->to('/dashboard');
        }
        
    }
    public function about(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $postModel = new \App\Models\PostModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $postInfo = $postModel->find($loggedUserID);
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo,
            'postInfo'=>$postInfo
        ];
        return view('dashboard/about',$data);
    }
    public function friends(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/friends',$data);
    }
    public function activities(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo
        ];
        return view('dashboard/activities',$data);
    }
    #kişi profili görüntüleme için kişinin numarasını al o numaradan bilgileri al bilgileri profiline göre çek
}
