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










/* ===== Career ===== */
.career-form {
  background-color: #4e63d7;
  border-radius: 5px;
  padding: 0 16px;
}

.career-form .form-control {
  background-color: rgba(255, 255, 255, 0.2);
  border: 0;
  padding: 12px 15px;
  color: #fff;
}

.career-form .form-control::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #fff;
}

.career-form .form-control::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

.career-form .form-control:-ms-input-placeholder {
  /* IE 10+ */
  color: #fff;
}

.career-form .form-control:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

.career-form .custom-select {
  background-color: rgba(255, 255, 255, 0.2);
  border: 0;
  padding: 12px 15px;
  color: #fff;
  width: 100%;
  border-radius: 5px;
  text-align: left;
  height: auto;
  background-image: none;
}

.career-form .custom-select:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.career-form .select-container {
  position: relative;
}

.career-form .select-container:before {
  position: absolute;
  right: 15px;
  top: calc(50% - 14px);
  font-size: 18px;
  color: #ffffff;
  content: '\F2F9';
  font-family: "Material-Design-Iconic-Font";
}

.filter-result .job-box {
  -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
          box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
  border-radius: 10px;
  padding: 10px 35px;
}

ul {
  list-style: none; 
}

.list-disk li {
  list-style: none;
  margin-bottom: 12px;
}

.list-disk li:last-child {
  margin-bottom: 0;
}

.job-box .img-holder {
  height: 65px;
  width: 65px;
  background-color: #4e63d7;
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
  background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
  font-family: "Open Sans", sans-serif;
  color: #fff;
  font-size: 22px;
  font-weight: 700;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 65px;
}

.career-title {
  background-color: #4e63d7;
  color: #fff;
  padding: 15px;
  text-align: center;
  border-radius: 10px 10px 0 0;
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
  background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
}

.job-overview {
  -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
          box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
  border-radius: 10px;
}

@media (min-width: 992px) {
  .job-overview {
    position: -webkit-sticky;
    position: sticky;
    top: 70px;
  }
}

.job-overview .job-detail ul {
  margin-bottom: 28px;
}

.job-overview .job-detail ul li {
  opacity: 0.75;
  font-weight: 600;
  margin-bottom: 15px;
}

.job-overview .job-detail ul li i {
  font-size: 20px;
  position: relative;
  top: 1px;
}

.job-overview .overview-bottom,
.job-overview .overview-top {
  padding: 35px;
}

.job-content ul li {
  font-weight: 600;
  opacity: 0.75;
  border-bottom: 1px solid #ccc;
  padding: 10px 5px;
}

@media (min-width: 768px) {
  .job-content ul li {
    border-bottom: 0;
    padding: 0;
  }
}

.job-content ul li i {
  font-size: 20px;
  position: relative;
  top: 1px;
}
.mb-30 {
    margin-bottom: 30px;
}


.form-control2 {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #4d5154;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #eef0f3;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
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
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
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
                            <h4 class="text-capitalize"><?= $userInfo['ad']." ".$userInfo['soyad'];?></h4><br>
                        </li>
                        <li>
                            <a href="" class="btn btn-success text-center btn-block"><?= $userInfo['bolum']." ".$userInfo['sinif'].". Sınıf"; ?></a>
                        </li>
                        <li><br></li>
                        <li>
                            <div class="btn-group-vertical btn-block">
                                <a href="" class="btn btn-default"><i class="fa fa-cog pull-right"></i>Edit Account</a>
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
                    <li><a href="<?= base_url('dashboard/about'); ?>"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
                    <li><a href="<?= base_url('dashboard/friends'); ?>"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li>
                    <li class="active"><a href=""><i class="fa fa-fw fa-calendar"></i> <span>Activities</span> <small>(98)</small></a></li>
                    </ul>
                </div>
                <img  src="https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg" class="img-responsive full-width" alt="cover" style="max-height:200px;">
            </div>
            <ul class="list-unstyled no-padding hidden-sm hidden-xs cover-menu">
            <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
                    <li><a href="<?= base_url('dashboard/about'); ?>"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
                    <li><a href="<?= base_url('dashboard/friends'); ?>"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li>
                    <li class="active"><a href=""><i class="fa fa-fw fa-calendar"></i> <span>Activities</span> <small>(98)</small></a></li>
                
            </ul>
        </div><!-- /.cover -->
    </div><!-- /.profile-cover -->