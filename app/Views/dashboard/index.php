<?= view("frontend/index"); ?>
    <div class="divider"></div>
    <div class="panel rounded shadow">
        <form action="<?= base_url('dashboard/post')?>" method="POST" enctype="multipart/form-data">
            <?= csrf_field()?>
            <textarea class="form-control input-lg no-border" rows="2" placeholder="Bugünlerde neler yapıyorsun?" name="textholder"></textarea>
        <div class="panel-footer">
            <button class="btn btn-success pull-right mt-5">POST</button>
            <ul class="nav nav-pills">
                <li><a class="" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><i class="fa fa-map-marker"></i></a></li>
                <li><a class="" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"><i class="fa fa-camera"></i></a></li>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                        <label>Konum:</label>
                        <select name="konum">
                            <option value=" ">                          </option>
                            <option value="Tophane">Tophane</option>
                            <option value="Park">Park</option>
                            <option value="Okul Yemekhanesi">Okul Yemekhanesi</option>
                            <option value="Bursa Teknik Üniversitesi">Bursa Teknik Üniversitesi</option>
                        </select>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            <input type="file" name="image">
                        </div>
                        </div>
                    </div>
                </div>
            </ul><!-- /.nav nav-pills -->
        </div><!-- /.panel-footer -->
        </form>
    </div><!-- /.panel -->
    <div class="mt-2"></div>
<!-- Post With Picture
-->
<?php 
                
    $rev_post = array_reverse($postInfo1);
    foreach($rev_post as $row){
        $where = "(id= '".$userInfo['id']."' OR id = '".$row['id']."') AND (arkadas_id= '".$row['id']."' OR arkadas_id = '".$userInfo['id']."') AND (ark_durum='Evet')";
        $whereother = $friendsModel->where($where)->find();
        $check = false;
        foreach($whereother as $vv){$check= true;}
        if($check){?>
    <div class="panel panel-success rounded shadow">
        <div class="panel-heading no-border">
            <div class="pull-left half">
                <div class="media">
                    <div class="media-object pull-left">
                        <img src="<?php echo base_url($usersModel2->find($row['id'])['ppPath']);?>" alt="..." class="img-circle img-post">
                    </div>
                    <div class="media-body w-100">
                    <a href="<?= base_url("dashboard/profile/".$usersModel2->find($row['id'])['ogrno'])?>" class="media-heading block mb-0 h4 text-secondary"><?= $usersModel2->find($row['id'])['ad'].' '.$usersModel2->find($row['id'])['soyad'];?></a>
                    <span><div class="float-end h5 text-primary"><?= $row["date"]?></div></span>
                    </div>
                </div>
            </div><!-- /.pull-left -->
            <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div class="inner-all block">
                <?php if($row['photo']!=''): ?>
                    <div>
                        <img class="postPic" src="<?= "images/{$row['photo']}" ?>" alt="...">
                    </div>   
                <?php endif;?> 
                    <h4><?=$row["icerik"]?></h4>
                            
                    </div><!-- /.media -->
                        <div class="line no-margin"></div><!-- /.line -->
                        <a href=""><?= $row['konum']?></a>
                        <div class="line no-margin"></div><!-- /.line -->
                    </div><!-- /.panel-footer -->
                    
                </div><!-- /.panel -->
<?php }elseif($userInfo['id']==$row['id']){?>
    <div class="panel panel-success rounded shadow">
        <div class="panel-heading no-border">
            <div class="pull-left half">
                <div class="media">
                    <div class="media-object pull-left">
                        <img src="<?php echo base_url($usersModel2->find($row['id'])['ppPath']);?>" alt="..." class="img-circle img-post">
                    </div>
                    <div class="media-body w-100">
                    <a href="<?= base_url("dashboard/profile/".$usersModel2->find($row['id'])['ogrno'])?>" class="media-heading block mb-0 h4 text-secondary"><?= $usersModel2->find($row['id'])['ad'].' '.$usersModel2->find($row['id'])['soyad'];?></a>
                    <span><div class="float-end h5 text-primary"><?= $row["date"]?></div></span>
                    </div>
                </div>
            </div><!-- /.pull-left -->
            <div class="clearfix"></div>
            </div><!-- /.panel-heading -->
            <div class="panel-body no-padding">
                <div class="inner-all block">
                <?php if($row['photo']!=''): ?>
                    <div>
                        <img class="postPic" src="<?= "images/{$row['photo']}" ?>" alt="...">
                    </div>   
                <?php endif;?> 
                    <h4><?=$row["icerik"]?></h4>
                            
                    </div><!-- /.media -->
                        <div class="line no-margin"></div><!-- /.line -->
                        <a href=""><?= $row['konum']?></a>
                        <div class="line no-margin"></div><!-- /.line -->
                    </div><!-- /.panel-footer -->
                    
                </div><!-- /.panel -->
<?php   
}}
?>