<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{margin-top:20px;
    background:#eee;
    }

    .divider {
    height: 20px;
    display: block;
    }

    /* ========================================================================
    * FORM MISC
    * ======================================================================== */
    .input-group-addon {
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
    min-width: 39px;
    }
    .input-group-addon .ckbox, .input-group-addon .rdio {
    position: absolute;
    top: 4px;
    left: 10px;
    }

    .input-group-lg > .form-control, .input-group-lg > .input-group-addon, .input-group-lg > .input-group-btn > .btn, .input-group-sm > .form-control, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .btn, .input-group-xs > .form-control, .input-group-xs > .input-group-addon, .input-group-xs > .input-group-btn > .btn {
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
    }

    .input-sm, .form-group-sm .form-control {
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
    }

    .form-control {
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    border-radius: 0px;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    }

    @media (max-width: 640px) {
    .form-inner-all [class*="col-"]:last-child .form-control {
        margin-top: 15px;
    }
    }


    /* ========================================================================
    * PROFILE
    * ======================================================================== */
    .profile-cover {
    width: 100%;
    }
    .profile-cover .cover {
    position: relative;
    border: 10px solid #FFF;
    }
    .profile-cover .cover .inner-cover {
    overflow: hidden;
    height: auto;
    }
    .profile-cover .cover .inner-cover img {
    border: 1px solid transparent;
    text-align: center;
    width: 100%;
    }
    .profile-cover .cover .inner-cover .cover-menu-mobile {
    position: absolute;
    top: 10px;
    right: 10px;
    }
    .profile-cover .cover .inner-cover .cover-menu-mobile button i {
    font-size: 17px;
    }
    .profile-cover .cover ul.cover-menu {
    padding-left: 150px;
    position: absolute;
    overflow: hidden;
    left: 1px;
    float: left;
    bottom: 0px;
    width: 100%;
    margin: 0px;
    background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.24);
    }
    .profile-cover .cover ul.cover-menu li {
    display: block;
    float: left;
    margin-right: 0px;
    padding: 0px 10px;
    line-height: 40px;
    height: 40px;
    -moz-transition: all 0.3s;
    -o-transition: all 0.3s;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    }
    .profile-cover .cover ul.cover-menu li:hover {
    background-color: rgba(0, 0, 0, 0.44);
    }
    .profile-cover .cover ul.cover-menu li.active {
    background-color: rgba(0, 0, 0, 0.64);
    }
    .profile-cover .cover ul.cover-menu li a {
    color: #FFF;
    font-weight: bold;
    display: block;
    height: 40px;
    line-height: 40px;
    text-decoration: none;
    }
    .profile-cover .cover ul.cover-menu li a i {
    font-size: 18px;
    }
    .profile-cover .profile-body {
    margin: 0px auto 10px;
    position: relative;
    }
    .profile-cover .profile-timeline {
    padding: 15px;
    }
    .img-post{
        width:30px;
        height:30px;
    }
    .img-post2{
        width:50px;
        height:50px;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag -->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdeys">
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-4">
        <div class="panel rounded shadow">
            <div class="panel-body">
                <div class="inner-all">
                    <ul class="list-unstyled">
                        <li class="text-center">
                            <img data-no-retina="" class="img-circle img-responsive img-bordered-primary" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="John Doe">
                        </li>
                        <li class="text-center">
                            <h4 class="text-capitalize"><?= $findUserID['ad']." ".$findUserID['soyad'];?></h4><br>
                        </li>
                        <li>
                            <a class="btn btn-success text-center btn-block"><?= $findUserID['bolum']." ".$findUserID['sinif'].". Sınıf"; ?></a>
                        </li>
                        <li><br></li>
                        <li>
                            <div class="btn-group-vertical btn-block">
                                <a href="" class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class="fa fa-cog pull-right"></i>Edit Account</a>
                                <a href="<?= site_url('auth/logout');?>" class="btn btn-default"><i class="fa fa-sign-out pull-right"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- /.panel -->

        
    </div>
    <div class="col-lg-9 col-md-9 col-sm-8">

    <div class="profile-cover">
        <div class="cover rounded shadow no-overflow">
            <div class="inner-cover">
                <!-- Start offcanvas btn group menu: This menu will take position at the top of profile cover (mobile only). -->
                <div class="btn-group cover-menu-mobile hidden-lg hidden-md">
                    <button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="dropdown-menu pull-right no-border" role="menu">
                    <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
                    <li class="active"><a href=""><i class="fa fa-fw fa-user"></i> <span>Profile</span></a></li>
                    <li ><a href="<?= base_url('dashboard/friends'); ?>"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(<?php $wheres = "(id = {$findUserID['id']} OR arkadas_id = {$findUserID['id']}) AND ark_durum = 'Evet'";
                    echo count($friendsModel->where($wheres)->findAll())?>)</small></a></li>
                    <li><a href="<?= base_url('dashboard/activities'); ?>"><i class="fa fa-fw fa-calendar"></i> <span>Activities</span> <small>(98)</small></a></li>
                    </ul>
                </div>
                <img  src="https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg" class="img-responsive full-width" alt="cover" style="max-height:200px;">
            </div>
            <ul class="list-unstyled no-padding hidden-sm hidden-xs cover-menu">
                <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
                <li class="active"><a href=""><i class="fa fa-fw fa-user"></i> <span>Profile</span></a></li>
                <li ><a href="<?= base_url('dashboard/friends'); ?>"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(<?php $wheres = "(id = {$findUserID['id']} OR arkadas_id = {$findUserID['id']}) AND ark_durum = 'Evet'";
                    echo count($friendsModel->where($wheres)->findAll())?>)</small></a></li>
                <li><a href="<?= base_url('dashboard/activities'); ?>"><i class="fa fa-fw fa-calendar"></i> <span>Activities</span> <small>(98)</small></a></li>
                
            </ul>
        </div><!-- /.cover -->
    </div><!-- /.profile-cover -->
    <!-- <div class="row mt-5 w-100 ">
        <div class="col-md-8">
            <div class="panel panel-success rounded shadow">
                <div class="panel-heading no-border">
                    <div class="pull-left half">
                        <div class="media">
                            <div class="media-object pull-left">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="..." class="img-circle img-post">
                            </div>
                            <div class="media-body">
                                <a href="#" class="media-heading block mb-0 h4 text-white"><?= $userInfo['ad']." ".$userInfo['soyad'];?></a>
                                
                                <span class="text-white h6">tarih yazılacak</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading --
                <div class="panel-body no-padding">
                    <img  src="https://via.placeholder.com/340x210/" alt="..." class="img-responsive full-width">
                    <div class="inner-all block">
                        view all <a href="#">7 comments</a> 
                    </div><!-- /.inner-all --
                    <div class="line no-margin"></div><!-- /.line --
                    <div class="media inner-all no-margin">
                        <div class="pull-left">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="..." class="img-post2">
                        </div><!-- /.pull-left --
                        <div class="media-body">
                            <a href="#" class="h4">John Doe</a>
                            <small class="block text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </small>
                            <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                        </div><!-- /.media-body --
                    </div><!-- /.media --
                    <div class="line no-margin"></div><!-- /.line --
                    <div class="media inner-all no-margin">
                        <div class="pull-left">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="..." class="img-post2">
                        </div><!-- /.pull-left --
                        <div class="media-body">
                            <a href="#" class="h4">John Doe</a>
                            <small class="block text-muted">Quaerat, impedit minus non commodi facere doloribus nemo ea voluptate nesciunt deleniti.</small>
                            <em class="text-xs text-muted">Posted on <span class="text-danger">Dec 08, 2014</span></em>
                        </div><!-- /.media-body --
                    </div><!-- /.media --
                </div><!-- /.panel-body --
                <div class="panel-footer">
                    <form action="#" class="form-horizontal">
                        <div class="form-group has-feedback no-margin">
                            <input class="form-control" type="text" placeholder="Your comment here...">
                            <button type="submit" class="btn btn-theme fa fa-search form-control-feedback"></button>
                        </div>
                    </form>
                </div><!-- /.panel-footer --
            </div><!-- /.panel --
        </div> -->
        <div class="mt-5 col-md-8">
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
                            <h4><?=$row["icerik"]?></h4>
                            
                        </div><!-- /.media -->
                        <div class="line no-margin"></div><!-- /.line -->
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