<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo
        ];
		return view('dashboard/index', $data);
	}
    public function about(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo
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
}
