<?php
session_start();
include ("dbconnection.php");

?>



<!DOCTYPE html>
<!-- saved from url=(0042)http://pump.thesoftking.com/machine-create -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Add Machine</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">

    <!-- ASSETS -->
    <link href="./csss/css" rel="stylesheet" type="text/css">
    <link href="./csss/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/uniform.default.css" rel="stylesheet" type="text/css">
    <link href="./csss/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css">
    <link href="./csss/plugins.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/layout.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color">
    <link href="./csss/custom.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/datatables.min.css" rel="stylesheet" type="text/css">
    <link href="./csss/datatables.bootstrap.css" rel="stylesheet" type="text/css">
    <!-- END ASSETS -->

    <link rel="shortcut icon" href="#">


    <style>
        @media (min-width: 768px) {
            .abir {
                margin-left: 66px !important;
                margin-top: -44px !important;
            }

            .abir2 {
                margin-left: 166px !important;
                margin-top: -44px !important;
            }

            .abir3 {
                margin-top: -20px !important;
            }
        }
    </style>
    
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo">

<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">


        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="add_machine.php">
                <img src="./Petrol Pump - Machine Create_files/logo.png" class="logo-default" alt="-" style="width: 60px; height:60px;">

            </a>

            <div class="menu-toggler sidebar-toggler"></div>
        </div>
        <!-- END LOGO -->


        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">


                        <span class="username"> Welcome, Nikhil Khatri </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">

                        <li><a href="change_password.php"><i class="fa fa-cogs"></i> Change Password </a>
                        </li>
                        <li><a href="login.php"><i class="fa fa-sign-out"></i> Log Out </a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END HEADER -->


<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"></div>
<div class="page-container">
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">


            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler"></div>
                </li>


                <li class="nav-item start">
                    <a href="dashboard.php" class="nav-link ">
                        <i class="icon-home"></i><span class="title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-shopping-cart"></i>
                        <span class="title"> Sell Fuel</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li class="nav-item"><a href="sell_now.php" class="nav-link"><i class="fa fa-plus"></i> Sell Now</a></li>
                        <li class="nav-item"><a href="sell_invoice.php" class="nav-link"><i class="fa fa-desktop"></i> View Invoice</a></li>
                    </ul>
                </li>
               <li class="nav-item">
                    <a href="managestaff.php" class="nav-link nav-toggle"><i class="fa fa-sort-amount-asc"></i>
                        <span class="title"> Manage Staff</span><span class="arrow"></span></a>
                        <ul class="sub-menu">
                        <li class="nav-item"><a href="managestaff.php" class="nav-link"><i class="fa fa-sort-asc"></i> Staff Attendence</a></li>
                        <li class="nav-item"><a href="staff_dues.php" class="nav-link"><i class="fa fa-sort-desc"></i> Staff Dues</a></li>
                        <li class="nav-item"><a href="view_reading.php" class="nav-link"><i class="fa fa-desktop"></i> C</a></li>
                    </ul>
                 </li>


                
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-sort-amount-asc"></i>
                        <span class="title"> Machine Reading</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li class="nav-item"><a href="start_reading.php" class="nav-link"><i class="fa fa-sort-asc"></i> Start Reading</a></li>
                        <li class="nav-item"><a href="end_reading.php" class="nav-link"><i class="fa fa-sort-desc"></i> End Reading</a></li>
                        <li class="nav-item"><a href="view_reading.php" class="nav-link"><i class="fa fa-desktop"></i> View Reading</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="income_report.php" class="nav-link ">
                        <i class="icon-calendar"></i><span class="title">Income Report</span>
                    </a>
                </li>
                <li class="nav-item open">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-server"></i>
                        <span class="title"> Expense Info</span><span class="arrow open"></span></a>

                    <ul class="sub-menu" style="display: block;">
                        <li class="nav-item"><a href="add_expense.php" class="nav-link"><i class="fa fa-plus"></i> ADD Expense</a></li>
                        <li class="nav-item"><a href="view_expense.php" class="nav-link"><i class="fa fa-desktop"></i> View Expense</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-clipboard"></i>
                        <span class="title"> Machine Info</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li class="nav-item"><a href="add_machine.php" class="nav-link"><i class="fa fa-plus"></i> ADD Machine</a></li>
                        <li class="nav-item"><a href="view_machine.php" class="nav-link"><i class="fa fa-desktop"></i> View Machine</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-hourglass"></i>
                        <span class="title"> Fuel Info</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li class="nav-item"><a href="add_fuel.php" class="nav-link"><i class="fa fa-plus"></i> ADD Fuel</a></li>
                        <li class="nav-item"><a href="view_fuel.php" class="nav-link"><i class="fa fa-desktop"></i> View Fuel</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-users"></i>
                        <span class="title"> Seller Info</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li class="nav-item"><a href="add_seller.php" class="nav-link"><i class="fa fa-plus"></i> ADD Seller</a></li>
                        <li class="nav-item"><a href="view_seller.php" class="nav-link"><i class="fa fa-desktop"></i> View Seller</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-credit-card"></i>
                        <span class="title"> Currency Setting</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li class="nav-item"><a href="add_currency.php" class="nav-link"><i class="fa fa-plus"></i> ADD Currency</a></li>
                        <li class="nav-item"><a href="view_currency.php" class="nav-link"><i class="fa fa-desktop"></i> View Currency</a></li>
                    </ul>
                </li>

                
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-cogs"></i>
                        <span class="title">Website Setting</span><span class="arrow"></span></a>
                    <ul class="sub-menu">

                        <li class="nav-item">
                            <a href="general_setting.php" class="nav-link"><i class="fa fa-cogs"></i>
                                General Setting </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-cogs"></i>
                                <span class="title"> Partner Setting</span><span class="arrow"></span></a>

                            <ul class="sub-menu">
                                <li class="nav-item"><a href="add_partner.php" class="nav-link"><i class="fa fa-plus"></i> ADD Partner</a></li>
                                <li class="nav-item"><a href="view_partner.php" class="nav-link"><i class="fa fa-desktop"></i> View Partner</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="home_page_setting.php" class="nav-link"><i class="fa fa-cogs"></i>
                                Home Page Setting </a>
                        </li>
                        <li class="nav-item">
                            <a href="about_page_setting.php" class="nav-link"><i class="fa fa-cogs"></i>
                                About Page Setting </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-cogs"></i>
                                <span class="title"> Menu Setting</span><span class="arrow"></span></a>

                            <ul class="sub-menu">
                                <li class="nav-item"><a href="add_menu.php" class="nav-link"><i class="fa fa-plus"></i> ADD Menu</a></li>
                                <li class="nav-item"><a href="view_menu.php" class="nav-link"><i class="fa fa-desktop"></i> View View</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>


            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->


    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content" style="min-height:520px">
            <h3 class="page-title">Create Machine </h3>
            <hr>

            <!--  ==================================SESSION MESSAGES==================================  -->
                        <!--  ==================================SESSION MESSAGES==================================  -->


            <!--  ==================================VALIDATION ERRORS==================================  -->
                            <!--  ==================================SESSION MESSAGES==================================  -->

            
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-body form">
                    <form method="POST" action="#" accept-charset="UTF-8" class="form-horizontal">
                        <input name="_token" type="hidden" value="#">
                    <div class="form-body">


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Staff Name: </label>

                            <div class="col-sm-6">
                                <input name="name" value="" class="form-control input-lg" type="text" required="" placeholder="Staff Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mobile Number: </label>

                            <div class="col-sm-6">
                                <input name="mobile" value="" class="form-control input-lg" type="text" required="" placeholder="Mobile Number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Money</label>

                            <div class="col-sm-6">
                                <input name="money" value="" class="form-control input-lg" type="text" required="" placeholder="Money Left">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Attendance</label>

                            <div class="col-sm-6">
                                <select name="attendance" id="" class="form-control input-lg" required="">
                                    <option value="">Select One</option>
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                    <option value="Half Day">Half Day</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="row">
                                <div class="col-md-offset-3 col-md-6">
                                    <button type="submit"  name="submit"class="btn blue btn-block margin-top-10"><i class="fa fa-paper-plane"></i>Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div><!---ROW-->




        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->


<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">2018 © All Copyrights Reserved by Reflekt Visual Pvt. Ltd.</div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->


<!-- BEGIN SCRIPTS -->
<script src="./csss/jquery.min.js.download" type="text/javascript"></script>
<script src="./csss/bootstrap.min.js.download" type="text/javascript"></script>
<script src="./csss/js.cookie.min.js.download" type="text/javascript"></script>
<script src="./csss/bootstrap-hover-dropdown.min.js.download" type="text/javascript"></script>
<script src="./csss/jquery.slimscroll.min.js.download" type="text/javascript"></script>
<script src="./csss/jquery.blockui.min.js.download" type="text/javascript"></script>
<script src="./csss/jquery.uniform.min.js.download" type="text/javascript"></script>
<script src="./csss/bootstrap-switch.min.js.download" type="text/javascript"></script>
<script src="./csss/app.min.js.download" type="text/javascript"></script>
<script src="./csss/layout.min.js.download" type="text/javascript"></script>
<script src="./csss/demo.min.js.download" type="text/javascript"></script>
<script src="./csss/quick-sidebar.min.js.download" type="text/javascript"></script>
<script src="./csss/datatable.js.download" type="text/javascript"></script>
<script src="./csss/datatables.min.js.download" type="text/javascript"></script>
<script src="./csss/datatables.bootstrap.js.download" type="text/javascript"></script>
<script src="./csss/table-datatables-buttons.min.js.download" type="text/javascript"></script>





</body></html>


<?php
if(isset($_POST['submit']))
{
  
  $name= $_POST['name'];
  $mobile= $_POST['mobile'];
  $money = $_POST['money'];
    $attendance = $_POST['attendance'];
  date_default_timezone_set("Asia/calcutta");
  $date=date("Y-m-d h:l:s a");

  $query="INSERT INTO attendance VALUES ('','$name','$mobile','$money','$attendance','$date')";
 $run =mysqli_query($con, $query);
 //var_dump($run);
 $get = mysqli_num_rows($run);

 if($get=1)

    {
     
      echo "<script>alert('Successfully Set Your Data')</script>";

    }
    else
    {
     echo "<script>alert('Your Date is not Set!!!!!!')</script>";
    }

  }


  ?>