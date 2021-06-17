<?= view("frontend/friends") ?>
<div class="container">
    <div class="row">
        <div class="mx-5 col-md-8">
            <div class="people-nearby">
          <form action="">
          <?php foreach($findFriends as $row){
             if($row['arkadas_id']==$userInfo['id'] && $row['ark_durum']=='Bekliyor'){?>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                      <h5><a href="#" class="profile-link"><?= $usersModel2->find($row['id'])['ad'].'  '.$usersModel2->find($row['id'])['soyad'];?></a></h5>
                      <p><?=  $usersModel2->find($row['id'])['bolum']." ". $usersModel2->find($row['id'])['sinif'].". Sınıf"?></p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right" name="button1" type="submit" value="1 <?=$row['id']?>" formaction="<?= base_url("dashboard/friends/reqaction")?>" formmethod="post"onmouseover="this.style.backgroundColor = '#AF0000';" onmouseout="this.style.backgroundColor = '#428BCA'">Reddet</button>
                    <button class="btn btn-primary pull-left" name="button1" type="submit" value="3 <?=$row['id']?>" formaction="<?= base_url("dashboard/friends/reqaction")?>" formmethod="post"onmouseover="this.style.backgroundColor = '#35E53B';" onmouseout="this.style.backgroundColor = '#428BCA'">Kabul Et</button>
                  </div>

                </div>
              </div>
              <?php
          }
        }
          ?>
          </form>
            </div>
    	</div>
	</div>
</div>