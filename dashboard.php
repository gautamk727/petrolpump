<?php
include ("dbconnection.php");
@session_start();
if(!isset($_SESSION['login']))
{
  echo "<script>window.open('login.php','_self')</script>";

}
else
{

?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Hamara Petrol-Pump</title>
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

    <!-- <link rel="shortcut icon" href="#"> -->


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
            <a href="#">
                <img src="./img/logo.png" class="logo-default" alt="-" style="width: 50px; height:50px;">
			</a>
			<p style="color:white; font-size:15px;">HAMARA PETROL PUMP</p>
            <div class="menu-toggler sidebar-toggler"></div>
        </div>
        <!-- END LOGO -->


        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>

        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">


                        <span class="username"><?php echo "<b style='color:white;'>Welcome:-" .$_SESSION['login'] ."</b>"; ?></span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">

                        <li><a href="change_password.php"><i class="fa fa-cogs"></i> Change Password </a>
                        </li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out </a></li>

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
                        <li class="nav-item"><a href="setrate.php" class="nav-link"><i class="fa fa-plus"></i> Set Rate</a></li>
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
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link nav-toggle"><i class="fa fa-server"></i>
                        <span class="title"> Expense Info</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
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
        <div class="page-content" style="min-height:509px">
            <h3 class="page-title">Dashboard </h3>
            <hr>

            <!--  ==================================SESSION MESSAGES==================================  -->
                        <!--  ==================================SESSION MESSAGES==================================  -->


            <!--  ==================================VALIDATION ERRORS==================================  -->
                            <!--  ==================================SESSION MESSAGES==================================  -->


                            <!-- START -->
            <?php



                    $sum='0';
                    $query ="select * from expense_info";
                    $run=mysqli_query($con, $query);
                    while ($row1=mysqli_fetch_array($run))
                    {
                        $sum +=$row1['qantity'];
                    }
                
                ?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="dashboard-stat yellow">
        <div class="visual">
            <i class="fa fa-list"></i>
        </div>
        <div class="details">
            <div class="number"><?php echo $sum; ?></div>
            <div class="desc"><b>Total Fuel Quantity:</b></div>
        </div>
    </div>
</div>
<!-- END -->

            
<!-- START -->
            <?php



                    $sum='0';
                    $query ="select * from expense_info";
                    $run=mysqli_query($con, $query);
                    while ($row1=mysqli_fetch_array($run))
                    {
                        $sum +=$row1['rate'];
                    }
                
                ?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="dashboard-stat yellow">
        <div class="visual">
            <i class="fa fa-list"></i>
        </div>
        <div class="details">
            <div class="number"><?php echo $sum; ?></div>
            <div class="desc">Total Fuel Price Expences:</div>
        </div>
    </div>
</div>
<!-- END -->




<!-- START -->
            <?php

                    $sum='0';
                    $query ="select * from expense_info";
                    $run=mysqli_query($con, $query);
                    while ($row1=mysqli_fetch_array($run))
                    {
                        $sum +=$row1['rate'];
                    }                
                ?>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="dashboard-stat yellow">
        <div class="visual">
            <i class="fa fa-list"></i>
        </div>
        <div class="details">
            <div class="number"><b style="color: blue;">Benefit/Lose:-  </b><?php 

            $sum1='0';
            $query1="select * from diesel_petrol_sell";
            $run1=mysqli_query($con,$query1);
            while ($row1=mysqli_fetch_array($run1))
            {
                $sum1 +=$row1['total_fuel_price'];
            }

            echo $sum-$sum1;


             ?></div>
            <!-- <div class="desc">Benefit/Lose:</div> -->
        </div>
    </div>
</div>
<!-- END -->





<!-- START -->
           
<!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="dashboard-stat yellow">
        <div class="visual">
            <i class="fa fa-list"></i>
        </div>
        <div class="details">
            <div class="number"></div>
            <div class="desc">Total Fuel Price Expences:</div>
        </div>
    </div>
</div> -->
<!-- END -->

<!--................End Expences Calculation..........-->

<!-- START -->
            <?php



                    $sum='0';
                    $query ="select * from diesel_petrol_sell";
                    $run=mysqli_query($con, $query);
                    while ($row1=mysqli_fetch_array($run))
                    {
                        $sum +=$row1['total_fuel_sale'];
                    }
                
                ?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="dashboard-stat green">
        <div class="visual">
            <i class="fa fa-list"></i>
        </div>
        <div class="details">
            <div class="number"><?php echo $sum; ?></div>
            <div class="desc">Total Fuel Sale:</div>
        </div>
    </div>
</div>
<!-- END -->


<!-- START -->
<?php
$sum='0';
$query="select * from diesel_petrol_sell";
$run=mysqli_query($con,$query);
while ($row1=mysqli_fetch_array($run))
{
    $sum +=$row1['total_fuel_price'];
}


?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="dashboard-stat green">
        <div class="visual">
            <i class="fa fa-list"></i>
        </div>
        <div class="details">
            <div class="number"><?php echo $sum; ?></div>
            <div class="desc">Total Fuel Price</div>
        </div>
    </div>
</div>
<!-- END -->


<!-- START -->

<?php
date_default_timezone_set("Asia/calcutta");
    $date=date("Y-m-d");
$sum='0';
$query="select * from diesel_petrol_sell WHERE date_time='$date'";
$run=mysqli_query($con,$query);
while ($row1=mysqli_fetch_array($run))
{
    $sum +=$row1['total_fuel_sale'];
}


?>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="dashboard-stat green">
        <div class="visual">
            <i class="fa fa-list"></i>
        </div>
        <div class="details">
            <div class="number"><?php echo $sum; ?></div>
            <div class="desc">Today Fuel Sale</div>
        </div>
    </div>
</div>
<!-- END -->

<!-- START -->
<?php 
date_default_timezone_set("Asia/calcutta");
$date=date("Y-m-d");
$sum='0';
$query="select * from diesel_petrol_sell WHERE date_time='$date'";
$run=mysqli_query($con,$query);
while ($row1=mysqli_fetch_array($run))
{
    $sum +=$row1['total_fuel_price'];
}
?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="dashboard-stat green">
        <div class="visual">
            <i class="fa fa-list"></i>
        </div>
        <div class="details">
            <div class="number"><?php echo $sum; ?></div>
            <div class="desc">Today Fuel Price</div>
        </div>
    </div>
</div>
<!-- END -->


<?php
    include ("dbconnection.php");            
    $get = "select * from diesel_petrol_rate";
    $run =mysqli_query($con, $get);
    while($row=mysqli_fetch_array($run))
        {
        $price=$row['price'];
        $name=$row['name'];
    ?>
<!-- START -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="dashboard-stat blue">
        <div class="visual">
            <i class="fa fa-list"></i>
        </div>
        <div class="details">
            <div class="number"><?php echo $price; ?></div>
            <div class="desc"><?php echo $name; ?></div>
        </div>
    </div>
</div>
<?php } ?>
<?php
    include ("dbconnection.php");            
    $get = "select * from diesel_petrol_rate";
    $run =mysqli_query($con, $get);
    while($row=mysqli_fetch_array($run))
        {
        $price=$row['quantity'];
        $name=$row['name'];
    ?>
<!-- START -->
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="dashboard-stat blue">
        <div class="visual">
            <i class="fa fa-list"></i>
        </div>
        <div class="details">
            <div class="number"><?php echo $price; ?></div>
            <div class="desc"><?php echo $name; ?></div>
        </div>
    </div>
</div>
<?php } ?>
<!-- END -->




        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->


<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2018 © Rights reserved by Reflekt Visual Pvt. Ltd.</div>
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
<?php } ?>