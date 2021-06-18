<?= view('frontend/activities')?>
    <div class="mt-5">
    <div class="row">
      <div class="col-lg-12 mx-auto">
          <div class="career-search mb-60">
            <div class="filter-result">
              <div class="job-box align-items-center justify-content-between mb-60 mb-3">
                <form action="<?php echo base_url('dashboard/etk_ekle')?>" method="POST">
                  <?= csrf_field()?>
                  <table style="width: 100%;">
                    <tbody style="width: 100%;">
                      <tr style="width: 100%;">
                          <td class="">
                          <div class="col-md-12 p-2 mt-1 bg-primary text-white">ETKİNLİK EKLE</div>
                          </td>
                          <td class="pull-right">
                            <div class="col-md-3 col-sm-3" style="width: 100%;">    
                              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiP1 multiP2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-down" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
                                </svg>
                              </button>
                            </div>  
                          </td>
                      </tr>
                    </tbody>
                  </table>
                  <hr>
                  <table style="width: 100%;">
                    <tbody style="width: 100%;">
                      <tr style="width: 100%">
                        <td style="width: 80%">
                          <div class="collapse multi-collapse" id="multiP1" style="float: top;">
                            <input type="text" placeholder="Etkinlik Basligi" name="etkinlikbaslik"class="mb-3" style="width: 80%; height: 32px; border: 1.5px solid darkbrown; border-style: ridge; border-radius: 2px;">
                              <div style="width: 100%; border: 0px;">
                                <textarea maxlength="300" name="text" placeholder="Tell about the event" style="border: 1.5px solid darkbrown; border-style: inset; border-radius: 2px; width: 95%; resize: vertical; height: 170px;">
                                </textarea>
                              </div>
                          </div>
                        </td>
                        <td style="width: 20%;">
                          <div class="collapse multi-collapse" id="multiP2" style="text-align: center;">
                            <div>
                                <input type="datetime-local" class="form-control2" name="datetime" style="height: 100px;"></input>
                            </div>
                            </br>
                            <div>Konum:
                              <select name="konum">
                                <option value="Park">Park</option>
                                <option value="Bursa Teknik Üniversitesi">University</option>
                                <option value="Nehir" >River</option>
                                <option value="Online" >Online</option>
                               </select>
                            </div>
                            <div>Türü:
                              <select name="type">
                                <option value="1">Sport</option>
                                <option value="2">Eğitim</option>
                                <option value="3" >Seminer</option>
                                <option value="4" >Buluşma</option>
                                <option value="5" >Oyun</option>
                               </select>
                            </div>
                            <div class="col-md-3 col-sm-3" style="width: 100%; border: 0px;">
                              <button class="btn btn-primary mt-5" type="submit" onmouseover="this.style.backgroundColor = '#35E53B';" onmouseout="this.style.backgroundColor = '#428BCA'">Etkinlik Ekle</button><br>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
            <?php foreach($all_Act as $vv):?>
             <div class="job-box d-md-flex align-items-center justify-content-between mb-50">
             <div class="job-left my-5 d-md-flex align-items-center flex-wrap">
                <table style="">
                  <tbody>
                    <tr style="font-weight: bold;"> 
                      <td>
                      <h2 class="pull-left mt-2 text-primary"><?= $vv['act_header']?></h2>
                      </td>
                      <td>
                      <div class="p-3 ml-5 bg-primary text-white"><?= $vv['act_type']?></div>
                      </td>
                      <td>
                      <p class="p-4 mx-5 pull-right">Düzenleyen: <?php $ss = $usersInfo->find($vv['act_author']); echo $ss['ad']." ".$ss['soyad'];?></p>
                      </td>
                    </tr>
                     <tr>
                        <td colspan="3" width="100%">
                         </br>
                         <p><?=$vv['act_text'] ?></p>
                         </td>
                     </tr>
                     </tbody>
                 </table>
             </div>
                 &nbsp;&nbsp;&nbsp;
                 <div class="job-right my-3 flex-shrink-0">
                 <form action="<?php echo base_url('dashboard/katil');?>" method="POST">
                  <input type="hidden" value="<?= $vv['act_id']?>" name="aktiviteid">
                  <input type="hidden" value="<?=$loggedUser?>" name="myId">
                  <?php $check = false;$arr = explode(',',$vv['act_persons']);foreach($arr as $aa){
                  if($aa==$loggedUser){$check = true;break;}}?>
                  <?php if($check != false){?>
                     <button class="btn d-block d-sm-inline-block btn-success disabled">KATIL</button>
                  <?php }else{?>
                    <button class="btn d-block d-sm-inline-block btn-success">KATIL</button>
                  <?php }?>
                 </div>
                 </form>
                 <button><?=strlen($vv['act_persons'])/2?></button>
             </div>
             <?php endforeach;?>