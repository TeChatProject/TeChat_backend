<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
        $usersModel = new \App\Models\UsersModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggedUserID);
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo
        ];
		return view('dashboard/index', $data);
	}
    public function about(){
        return view('dashboard/about');
    }
    public function friends(){
        return view('dashboard/friends');
    }
    public function activities(){
        return view('dashboard/activities');
    }
}
