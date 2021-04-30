<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTU Techat</title>
</head>
<body>
    <style>
    div.main{
    background: #2e91b8; /* Old browsers */
    background: -moz-radial-gradient(center, ellipse cover,  #2e91b8 1%, #1d3079 100%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(1%,#2e91b8), color-stop(100%,#1d3079)); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  #2e91b8 1%,#1d3079 100%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  #2e91b8 1%,#1d3079 100%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  #2e91b8 1%,#1d3079 100%); /* IE10+ */
    background: radial-gradient(ellipse at center,  #2e91b8 1%,#1d3079 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2e911b8', endColorstr='#1d3079',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
    height:calc(100vh);
    width:100%;
    }

    [class*="fontawesome-"]:before {
    font-family: 'FontAwesome', sans-serif;
    }

    /* ---------- GENERAL ---------- */

    * {
    box-sizing: border-box;
        margin:0px auto;

    &:before,
    &:after {
        box-sizing: border-box;
    }

    }

    body {
    
        color: #606468;
    font: 87.5%/1.5em 'Open Sans', sans-serif;
    margin: 0;
    }

    a {
        color: #eee;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    input {
        border: none;
        font-family: 'Open Sans', Arial, sans-serif;
        font-size: 14px;
        line-height: 1.5em;
        padding: 0;
        -webkit-appearance: none;
    }

    p {
        line-height: 1.5em;
    }

    .clearfix {
    *zoom: 1;

    &:before,
    &:after {
        content: ' ';
        display: table;
    }

    &:after {
        clear: both;
    }

    }

    .container {
    left: 50%;
    position: fixed;
    top: 50%;
    transform: translate(-50%, -50%);
    }

    /* ---------- LOGIN ---------- */

    #login form{
        width: 250px;
    }
    #login, .logo{
        display:inline-block;
        width:40%;
    }
    #login{
    border-right:1px solid #fff;
    padding: 0px 22px;
    width: 59%;
    }
    .logo{
    color:#fff;
    font-size:50px;
    line-height: 125px;
    }

    #login form i.fa {
        background-color: #fff;
        border-radius: 3px 0px 0px 3px;
        color: #000;
        display: block;
        float: left;
        height: 50px;
        font-size:24px;
        line-height: 50px;
        text-align: center;
        width: 50px;
    }

    #login form input {
        height: 50px;
    }
    fieldset{
        padding:0;
        border:0;
        margin: 0;

    }
    #login form input[type="text"], input[type="password"] {
        background-color: #fff;
        border-radius: 0px 3px 3px 0px;
        color: #000;
        margin-bottom: 1em;
        padding: 0 16px;
        width: 200px;
    }

    #login form input[type="submit"] {
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    background-color: #000000;
    color: #eee;
    font-weight: bold;
    /* margin-bottom: 2em; */
    text-transform: uppercase;
    padding: 5px 10px;
    height: 30px;
    }

    #login form input[type="submit"]:hover {
        background-color: #d44179;
    }

    #login > p {
        text-align: center;
    }

    #login > p span {
        padding-left: 5px;
    }
    .middle {
    display: flex;
    width: 600px;
    }
    </style>
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
    <div class="main">
        <div class="container">
            <center>
            <div class="middle">
      <div id="login">

        <form action="<?= base_url('auth/check'); ?>" method="post">
            <?= csrf_field(); ?>
            <?php   if(!empty(session()->getFlashdata('fail'))) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail');?></div>
            <?php endif ?>
          <fieldset class="clearfix">

            <p ><i class="fa fa-user" aria-hidden="true"></i><input type="text" name="email" Placeholder="E-posta" value="<?= set_value('email');?>" required></p>
            <span class="text-danger"><?= isset($validation) ? display_error($validation,'email') : ' ' ?></span> 
            <p><i class="fa fa-lock" aria-hidden="true"></i><input type="password" name="password" Placeholder="Şifre" value="<?= set_value('password');?>"required></p> 
            <span class="text-danger"><?= isset($validation) ? display_error($validation,'password') : ' ' ?></span>
             <div>
                                <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="">Şifremi unuttum?
                                </a></span>
                                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Giriş Yap"></span>
                            </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <!-- <div class="logo"><img src="" height="70%" width="50%"> -->
          
          <div class="clearfix"></div>
      </div>
      
      </div>
</center>
    </div>

</div>
</body>
</html>