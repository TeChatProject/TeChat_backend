<?= view("frontend/profile")?>
        <div class="mt-4">
            <?php 
                $rev_post = array_reverse($postInfo1);
                foreach($rev_post as $row) : 
                     if($row['id']==$findUserID['id']){ ?>
                   <div class="panel panel-success rounded shadow">
        <div class="panel-heading no-border">
            <div class="pull-left half">
                <div class="media">
                    <div class="media-object pull-left">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="..." class="img-circle img-post">
                    </div>
                    <div class="media-body w-100">
                    <a href="#" class="media-heading block mb-0 h4 text-secondary"><?= $findUserID["ad"]." ".$findUserID["soyad"];?></a>
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
                        <img class="postPic" src="<?=base_url("images/{$row['photo']}")?>" alt="...">
                    </div>   
                <?php endif;?> 
                    <h4><?=$row["icerik"]?></h4>
                            
                    </div><!-- /.media -->
                        <div class="line no-margin"></div><!-- /.line -->
                        <a href=""><?= $row['konum']?></a>
                        <div class="line no-margin"></div><!-- /.line -->
                    </div><!-- /.panel-footer -->
                    
                </div><!-- /.panel -->
                <?php }endforeach ?>
            
        </div>
    </div>
    </div>
    </div>
    
</div>
</body>
</html>