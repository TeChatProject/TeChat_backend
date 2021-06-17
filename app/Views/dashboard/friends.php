<?= view("frontend/friends") ?>
<!--
    Arkadaslar
-->
<form action="">
    <div class="container">
    <div class="row">
        <div class="mx-5 col-md-8">
            <div class="people-nearby">
              
            <?php 
            
            foreach($findALL as $row){
                $where = "(id= '".$userInfo['id']."' OR id = '".$row['id']."') AND (arkadas_id= '".$row['id']."' OR arkadas_id = '".$userInfo['id']."') AND ark_durum='Evet'";   
                $whereother = $friendsModel->where($where)->find();
                $check = false;
                foreach($whereother as $vv){$check = true;}
             if($row['id']!=$userInfo['id'] && $check){
                 ?>
             
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                      <h5><a href="<?= base_url("dashboard/profile/{$row['ogrno']}")?>" class="profile-link"><?= $row['ad'].'  '.$row['soyad'];?></a></h5>
                      <p><?= $row['bolum']." ". $row['sinif'].". Sınıf"?></p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button name="button1" type="submit" class="btn btn-primary pull-right" value="1 <?=$row['id']?>" formaction="<?= base_url("dashboard/friends/reqaction")?>" formmethod="post" onmouseover="this.innerHTML = 'Arkadaşlıktan Çıkar'; this.style.backgroundColor = '#AF0000';" onmouseout="this.innerHTML = 'Arkadaşsınız'; this.style.backgroundColor = '#428BCA'">Arkadaşsınız</button>
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


                <?php 

                    /*
                    foreach($findALL as $row){
                        if(!($row['id']==$userInfo['id'])){
                            echo $row['ad'].'  '.$row['soyad'];?>
                            <button type="button" class="mx-5 btn btn-primary" value="<?= $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        Arkadaş Ekle</button>                        
                            <?php echo '<br>'; 
                        } 
                    }
                */

                ?>
                
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>
</body>
</html>