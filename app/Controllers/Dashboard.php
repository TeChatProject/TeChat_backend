<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $postModel = new \App\Models\PostModel();
        $friendsModel = new \App\Models\FriendModel();
        $loggedUserID = session()->get('loggedUser');
        $ogrno = $usersModel2->find($loggedUserID);
        $userInfo = $usersModel2->find($loggedUserID);
        $postInfo = $postModel->find($loggedUserID);
        $postInfo1 = $postModel->findAll();
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo,
            'postInfo'=>$postInfo,
            'postInfo1'=>$postInfo1,
            'usersModel2'=>$usersModel2,
            'friendsModel'=>$friendsModel,
            'ogrno' => $ogrno

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
    public function profile($ogrno){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $postModel = new \App\Models\PostModel();
        $friendsModel = new \App\Models\FriendModel();
        $loggedUserID = session()->get('loggedUser');
        $findUserID = $usersModel2->where('ogrno',$ogrno)->first();
        $userInfo = $usersModel2->find($ogrno);
        $postInfo = $postModel->find($findUserID);
        $postInfo1 = $postModel->findAll();
        $profileInfo = $usersModel2->findAll();
        
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo,
            'postInfo'=>$postInfo,
            'postInfo1'=>$postInfo1,
            'profileInfo'=>$profileInfo,
            'findUserID'=>$findUserID,
            'friendsModel'=>$friendsModel
        ];
        //return view('dashboard/profile',$data);
    
        $isIn = false;
        foreach($profileInfo as $vv){
            if($ogrno == $vv['ogrno']){
                $isIn = true;
                return view('dashboard/profile',$data);
                break;
            }
        }
        if(!$isIn){
            echo "Sayfa bulunamadı";
        }
        
    }
    public function friends(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $friendsModel = new \App\Models\FriendModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $findFriends = $friendsModel->findAll();
        $findALL = $usersModel2->findAll();
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo,
            'findALL'=>$findALL,
            'usersModel2'=>$usersModel2,
            'friendsModel'=>$friendsModel,
            'findFriends'=>$findFriends

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
    public function req(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $friendsModel = new \App\Models\FriendModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $findALL = $usersModel2->findAll();
        $findFriends = $friendsModel -> findAll();
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo,
            'usersModel2'=>$usersModel2,
            'findALL'=>$findALL,
            'findFriends'=>$findFriends
        ];
        return view('dashboard/friendrequest',$data);
    }
    public function add(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $friendsModel = new \App\Models\FriendModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $findALL = $usersModel2->findAll();
        $friendsreq = $friendsModel->where($loggedUserID)->findAll();
        //$MyFriendsReq = $friendsModel->where('id',$loggedUserID,'ark_durum','Bekliyor')->findAll();
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo,
            'findALL'=>$findALL,
            'friendsModel'=>$friendsModel,
            'friendsreq'=>$friendsModel
        ];
        return view('dashboard/addfriends',$data);
    }
    public function addaction(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $friendsModel = new \App\Models\FriendModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $id_value = $this->request->getPost('button');
        $where = "(id= '".$userInfo['id']."' OR id = '".$id_value."') AND (arkadas_id= '".$id_value."' OR arkadas_id = '".$userInfo['id']."')";          
        $wheres = $friendsModel->where($where)->first();
        $values = [
            'id' => $loggedUserID,
            'arkadas_id' => $id_value,
            'ark_durum' => 2
        ];
        if($wheres){
            $query = $friendsModel->update($wheres,$values);
        }else{
            $query = $friendsModel->insert($values);
        }
        //$query = $friendsModel ->insert($values);
        return redirect()->to('/dashboard/friends/add');
    }
    public function reqaction(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $friendsModel = new \App\Models\FriendModel();
        $loggedUserID = session()->get('loggedUser');
        $buttonx = $this->request->getPost('button1');
        $bttn = explode(" ",$buttonx);
        $wheres = $friendsModel->where('id',$bttn[1])->where('arkadas_id',$loggedUserID)->find($bttn[1]);
        $values = [
            'id' => $bttn[1],
            'arkadas_id' => $loggedUserID,
            'ark_durum' => $bttn[0]
        ];
        $query = $friendsModel ->update($wheres,$values);
        return redirect()->to('/dashboard/friends');
    }
    public function profilep(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $postModel = new \App\Models\PostModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $postInfo = $postModel->find($loggedUserID);
        $postInfo1 = $postModel->findAll();
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo,
            'postInfo'=>$postInfo,
            'postInfo1'=>$postInfo1
        ];
        return view('dashboard/profile',$data);
    }
    #kişi profili görüntüleme için kişinin numarasını al o numaradan bilgileri al bilgileri profiline göre çek
}
