<?= view("frontend/friends") ?>
<!--
    Arkadaslar Ekleme
-->
<div class="container">
    <div class="row">
        <div class="mx-5 col-md-8">
            
    	    </div>
	    </div>
      <div class="col-md-6 mb-3 pull-right">
      Ara: <input type="text" id="arama" class="">
      </div>
</div>
<form action="" >
<?php 
                    
                    //$fALL_reverse = array_reverse($findALL);
                    foreach($findALL as $row){
                        $where = "(id= '".$userInfo['id']."' OR id = '".$row['id']."') AND (arkadas_id= '".$row['id']."' OR arkadas_id = '".$userInfo['id']."') AND (ark_durum= 'Bekliyor' OR ark_durum='Evet')";
                        
                        $whereother = $friendsModel->where($where)->find();
                        $check = true;
                        foreach($whereother as $vv){$check= false;}
                        if($row['id']!=$userInfo['id'] && $check){
                            ?>
                            <div class="people-nearby">
                              <div class="nearby-user">
                                <div class="row">
                                  <div class="col-md-2 col-sm-2">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="profile-photo-lg">
                                  </div>
                                  <div class="col-md-7 col-sm-7">
                                    <h5><a href="#" class="profile-link"><?= $row['ad'].'  '.$row['soyad'];?></a></h5>
                                    <p><?= $row['bolum']." ".$row['sinif'].". Sınıf"?></p>
                                  </div>
                                  <div class="col-md-3 col-sm-3">
                                  
                                      <button name="button"   type="submit" class="btn btn-primary pull-right" formaction="<?= base_url("dashboard/friends/addaction")?>" formmethod="post" value="<?= $row['id'] ?>" onmouseover="this.style.backgroundColor = '#35E53B';" onmouseout="this.style.backgroundColor = '#428BCA'">Add Friend</button>
                                  </div>
                                </div>
                              </div>
                            </div>                      
                            <?php echo '<br>'; 
                        } 
                        
                     
                    }

                ?>
          </form>      
                
    <?php
      function insertreq(){

      } 
    ?>




    </div>
    </div>
    </div>
</div>
</body>
</html>