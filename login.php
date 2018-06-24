<?php
session_start();
include ("dbconnection.php");

?>
<!DOCTYPE html>

<!-- saved from url=(0033)http://pump.thesoftking.com/admin -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Log In</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <!-- BEGIN STYLES -->
    <link href="./csss/css" rel="stylesheet" type="text/css">
    <link href="./csss/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/uniform.default.css" rel="stylesheet" type="text/css">
    <link href="./csss/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css">
    <link href="./csss/plugins.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/login.min.css" rel="stylesheet" type="text/css">
    <!-- END STYLES -->

    <link rel="shortcut icon" href="#">

</head>

<body class=" login">
<div class="menu-toggler sidebar-toggler"></div>
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="#"><img src="./img/logo.png" alt="-" style="width: 60px; height: 60px;"> </a>
</div>
<!-- END LOGO -->

<div class="content">
    <form method="POST" action="#" accept-charset="UTF-8" class="login-form" novalidate="novalidate"><input name="_token" type="hidden" value="encQ4wMYnstwFzZCGpXWPRoDf3JkTdS4ECvFHirU">
    <h3 class="form-title font-green">Sign-In</h3>

    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> Enter your username and password. </span>
    </div>


            <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Just Logged Out!
        </div>
    

    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <input class="form-control form-control-solid placeholder-no-fix valid" type="text" autocomplete="off" placeholder="Username" name="name" aria-required="true" aria-invalid="false" aria-describedby="username-error"> </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <input class="form-control form-control-solid placeholder-no-fix valid" type="password" autocomplete="off" placeholder="Password" name="password" aria-required="true" aria-invalid="false" aria-describedby="password-error"> </div>
    <div class="form-actions">
        <input type="hidden" name="_token" value="encQ4wMYnstwFzZCGpXWPRoDf3JkTdS4ECvFHirU">
        <button type="submit"  name="login" class="btn green uppercase btn-block">Login</button>
    </div>


    </form>
            <!-- END LOGIN FORM -->

</div>
<div class="copyright">2018 © All Copyrights Reserved by Reflekt Visual Pvt. Ltd.</div>

<!-- BEGIN SCRIPTS -->
<script src="./csss/jquery.min.js.download" type="text/javascript"></script>
<script src="./csss/bootstrap.min.js.download" type="text/javascript"></script>
<script src="./csss/js.cookie.min.js.download" type="text/javascript"></script>
<script src="./csss/bootstrap-hover-dropdown.min.js.download" type="text/javascript"></script>
<script src="./csss/jquery.slimscroll.min.js.download" type="text/javascript"></script>
<script src="./csss/jquery.blockui.min.js.download" type="text/javascript"></script>
<script src="./csss/jquery.uniform.min.js.download" type="text/javascript"></script>
<script src="./csss/bootstrap-switch.min.js.download" type="text/javascript"></script>
<script src="./csss/jquery.validate.min.js.download" type="text/javascript"></script>
<script src="./csss/additional-methods.min.js.download" type="text/javascript"></script>
<script src="./csss/app.min.js.download" type="text/javascript"></script>
<script src="./csss/login.min.js.download" type="text/javascript"></script>
<!-- END SCRIPTS -->


</body></html>

<?php
if(isset($_POST['login']))
{
 
  $name = $_POST['name'];
  $password = $_POST['password'];

  
    $query = "select *from login_admin where name='$name' AND password='$password'";
    
    $run = mysqli_query($con, $query);
    $get = mysqli_num_rows($run); 
    //$_SESSION['hr_session']=$uname;

    if($get == 1)

    {
      $_SESSION['login']=$name;
      echo "<script>window.open('dashboard.php','_self')</script>";

    }
    else{
     echo "<script>alert('Userid and password does not exist')</script>";
    }

  
}
  ?>