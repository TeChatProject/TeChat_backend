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
        $file = $this->request->getFile('image');
        $konum="";
        $konum = $this->request->getPost('konum');
        if ($file->isValid() && ! $file->hasMoved())
        {
            $newName = $file->getRandomName();
            $file->move('images/',$newName);
        }else{
            $newName=""; 
        }
        $arr = [
            'id'=>$userInfo['id'],
            'photo'=>$newName,
            'icerik'=>$icerik,
            'konum'=>$konum
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
        $loggedUser = $usersModel2->find($loggedUserID);
        
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo,
            'postInfo'=>$postInfo,
            'postInfo1'=>$postInfo1,
            'profileInfo'=>$profileInfo,
            'findUserID'=>$findUserID,
            'friendsModel'=>$friendsModel,
            'loggedUserID'=>$loggedUserID,
            'loggedUser'=>$loggedUser
        ];
        $isIn = false;
        foreach($profileInfo as $vv){
            if($ogrno == $vv['ogrno']){
                $isIn = true;
                return view('dashboard/profile',$data);
                break;
            }
        }
        if(!$isIn){
            echo "Sayfa bulunamad??";
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
            'findFriends'=>$findFriends,
            'friendsModel'=>$friendsModel
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
        return redirect()->to('/dashboard/friends/add');
    }
    public function reqaction(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $friendsModel = new \App\Models\FriendModel();
        $loggedUserID = session()->get('loggedUser');
        $buttonx = $this->request->getPost('button1');
        $bttn = explode(" ",$buttonx);
        $wheres = $friendsModel->where('id',$bttn[1])->where('arkadas_id',$loggedUserID)->first();
        $values = [
            'id' => $bttn[1],
            'arkadas_id' => $loggedUserID,
            'ark_durum' => $bttn[0]
        ];
        $query = $friendsModel->update($wheres,$values);
        return redirect()->to('/dashboard/friends');
    }
    public function pp(){
        $image = \Config\Services::image();
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel = new \App\Models\UsersInfo();
        $loggedUserID = session()->get('loggedUser');
        $file = $this->request->getFile('ppFile');
        $userInfo = $usersModel->find($loggedUserID);
        $image = service('image');
        if ($file->isValid() && ! $file->hasMoved())
        {
            $newName = $file->getRandomName();
            $file->move('profilepic/',$newName);
            $image->withFile("./profilepic/{$newName}")
            ->fit(315,315,'center')->save("./profilepic/{$newName}");
        }else{
            $newName=""; 
        }
        $where = $usersModel->find($loggedUserID);
        $value = [
            'ppPath'=>"/profilepic/{$newName}"
        ];
        $query = $usersModel->update($where,$value);
        return redirect()->to('/dashboard');
    }
    public function activities(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $friendsModel = new \App\Models\FriendModel();
        $activitiesModel = new \App\Models\ActivitiesModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $findAllAct = $activitiesModel->findAll();
        
        $data = [
            'title'=>'Dashboard',
            'loggedUser'=>$loggedUserID,
            'userInfo'=>$userInfo,
            'friendsModel'=>$friendsModel,
            'act_Model'=>$activitiesModel,
            'all_Act'=>$findAllAct,
            'usersInfo'=>$usersModel2
        ];
        return view('dashboard/activities',$data);
    }
    public function etk_ekle(){
        $activitiesModel = new \App\Models\ActivitiesModel();
        $usersModel = new \App\Models\UsersInfo();
        $loggedUserID = session()->get('loggedUser');
        $baslik = $this->request->getPost('etkinlikbaslik');
        $datetime = $this->request->getPost('datetime');
        $type = $this->request->getPost('type');
        $konum = $this->request->getPost('konum');
        $text = $this->request->getPost('text');
        $data = [
            'act_author'=>$loggedUserID,
            'act_type'=>$type,
            'act_text'=>$text,
            'act_header'=>$baslik,
            'act_date'=>$datetime,
            'act_konum'=>$konum
        ];
        $query = $activitiesModel->insert($data);
        return redirect()->to('/dashboard/activities');
    }
    public function katil(){
        $activitiesModel = new \App\Models\ActivitiesModel();
        $aktivite = $this->request->getPost('aktiviteid');
        $act_ids = $this->request->getPost('myId');
        $act_person = $activitiesModel->where('act_id',$aktivite)->first();
        $query = $activitiesModel->set('act_persons',"{$act_person['act_persons']},{$act_ids}")->where('act_id',$aktivite)->update();
        return redirect()->to('/dashboard/activities');
    }
    public function places(){
        $usersModel1 = new \App\Models\UsersModel();
        $usersModel2 = new \App\Models\UsersInfo();
        $activitiesModel = new \App\Models\ActivitiesModel();
        $friendsModel = new \App\Models\FriendModel();
        $comments = new \App\Models\CommentsModel();
        $places = new \App\Models\PlacesModel();
        $loggedUserID = session()->get('loggedUser');
        $userInfo = $usersModel2->find($loggedUserID);
        $ogrno = $usersModel2->find($loggedUserID);
        $allPlaces = $places->findAll();
        $allComments = $comments->findAll();
        $data = [
            'title'=>'Dashboard',
            'userInfo'=>$userInfo,
            'ogrno'=>$ogrno,
            'actModel'=>$activitiesModel,
            'friendsModel'=>$friendsModel,
            'allPlaces'=>$allPlaces,
            'allComments'=>$allComments,
            'comments'=>$comments,
            'userModel'=>$usersModel2
        ];
        return view('/dashboard/places',$data);
    }
    public function comment(){
        $comments = new \App\Models\CommentsModel();
        $allComments = $comments->findAll();
        $comment = $this->request->getPost('text');
        $getPlaceId = $this->request->getPost('placeid');
        $loggedUserID = session()->get('loggedUser');
        $values = [
            'places_id'=>$getPlaceId,
            'comment_text'=>$comment,
            'commenter'=>$loggedUserID,
        ];
        $query = $comments->insert($values);
        return redirect()->to('/dashboard/places');
    }
}
