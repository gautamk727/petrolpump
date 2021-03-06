<!DOCTYPE html>
<!-- saved from url=(0041)http://pump.thesoftking.com/customer-show -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Sell All Invoice</title>
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
            <a href="add_customer.php">
                <img src="./img/logo.png" class="logo-default" alt="-" style="width:60px; height:  60px;">

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


                        <span class="username"> Welcome, xyz</span>
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
                        <li class="nav-item"><a href="setrate.php" class="nav-link"><i class="fa fa-plus"></i> Set Rate</a></li>
                        <li class="nav-item"><a href="sell_now.php" class="nav-link"><i class="fa fa-plus"></i> Sell Now</a></li>
                        <li class="nav-item"><a href="sell_invoice.php" class="nav-link"><i class="fa fa-desktop"></i> View Invoice</a></li>
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
            <h3 class="page-title">Sell All Invoice </h3>
            <hr>

            <!--  ==================================SESSION MESSAGES==================================  -->
                        <!--  ==================================SESSION MESSAGES==================================  -->


            <!--  ==================================VALIDATION ERRORS==================================  -->
                            <!--  ==================================SESSION MESSAGES==================================  -->

            

    
        <div class="row">
            <div class="col-md-12">


                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="dt-buttons">
                                        <a class="dt-button buttons-print btn dark btn-outline" tabindex="0" aria-controls="sample_1"><span>Print</span></a>
                                        <a class="dt-button buttons-copy buttons-html5 btn red btn-outline" tabindex="0" aria-controls="sample_1"><span>Copy</span></a>
                                        <a class="dt-button buttons-pdf buttons-html5 btn green btn-outline" tabindex="0" aria-controls="sample_1"><span>PDF</span></a>
                                        <a class="dt-button btn yellow btn-outline" tabindex="0" aria-controls="sample_1"><span></span></a>
                                        <a class="dt-button buttons-csv buttons-html5 btn purple btn-outline" tabindex="0" aria-controls="sample_1"><span>CSV</span></a>
                                        <a class="dt-button buttons-collection buttons-colvis btn dark btn-outline" tabindex="0" aria-controls="sample_1"><span>Columns</span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="dataTables_length" id="sample_1_length">
                                        <label>
                                            <select name="sample_1_length" aria-controls="sample_1" class="form-control input-sm input-xsmall input-inline">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="-1">All</option>
                                            </select> entries</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div id="sample_1_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_1"></label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="table-scrollable">
                                    <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="sample_1" role="grid" aria-describedby="sample_1_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID#: activate to sort column descending" style="width: 22px;">ID#</th>
                                <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 39px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 93px;">Mobile No</th>
                                <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 66px;">Payment mode</th>
                                <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Machine: activate to sort column ascending" style="width: 57px;">Machine</th>
                                <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Fuel: activate to sort column ascending" style="width: 29px;">Total Sale</th>
                                <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Rate / L: activate to sort column ascending" style="width: 51px;">Total Amount</th>
                                 <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Total Bill: activate to sort column ascending" style="width: 59px;">Start Reding</th>
                                <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 83px;">End Reading</th>
                                <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Quantity / L: activate to sort column ascending" style="width: 77px;">Date</th>
                               
                            </tr>
                            </thead>

                            <tbody>
                                <?php
                include ("dbconnection.php");
                //$i= 0;
                $get = "SELECT * FROM `diesel_petrol_sell`";
                $run_get =mysqli_query($con, $get);

                while($row=mysqli_fetch_array($run_get))
                {
                    $id =$row['id'];
                    $name =$row['staff_name'];
                    $machine =$row['machine_no'];
                    $payment =$row['payment_mode'];
                    $mobile =$row['staff_mobile_no'];
                    $totalsale =$row['total_fuel_sale'];
                    $totalprice =$row['total_fuel_price'];
                    
                    $start_reading =$row['start_reading'];
                    $end_reading =$row['end_reading'];
                    $date = $row['date_time'];
                    //$i++;
                
                ?>
                                    <tr role="row" class="odd">
                                    <td class="sorting_1"><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><span class="label label-default"><?php echo $mobile; ?></span></td>
                                    <td><span class="label label-default"><?php echo $payment; ?></span></td>
                                    <td><?php echo $machine; ?></td>
                                    <td><?php echo $totalsale; ?></td>
                                    <td><?php echo $totalprice; ?></td>
                                    
                                    <td><?php echo $start_reading; ?></td>
                                    <td><?php echo $end_reading; ?></td>
                                    <td><?php echo $date; ?></td>
                                   <!--  <td>7 Litter</td>
                                    <td>BDT - 525</td> -->
                                    <!-- <td><a href="edit_invoice.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> Edit invoice</a>
                                    <a href="edit_view_invoice.php" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Invoice</a>
                                    </td> -->
                                </tr>
                                <!-- <tr role="row" class="even">
                                    <td class="sorting_1">2</td>
                                    <td>Hosen Mahmud</td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td>Machine 1</td>
                                    <td>Octen</td>
                                    <td>BDT - 75</td>
                                    <td>2 Litter</td>
                                    <td>BDT - 150</td>
                                    <td><a href="edit_invoice.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> Edit invoice</a>
                                    <a href="edit_view_invoice.php" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Invoice</a>
                                    </td></tr><tr role="row" class="odd">
                                    <td class="sorting_1">3</td>
                                    <td>Tanzila Rahman</td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td>Machine 3</td>
                                    <td>Dizzel</td>
                                    <td>BDT - 80</td>
                                    <td>10 Litter</td>
                                    <td>BDT - 800</td>
                                    <td><a href="edit_invoice.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> Edit invoice</a>
                                    <a href="edit_view_invoice.php" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Invoice</a>
                                    </td>

                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">4</td>
                                    <td>Seller Rahman</td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td><span class="label label-default">Not Available</span>
                                </td>
                                    <td>Machine 3</td>
                                    <td>Dizzel</td>
                                    <td>BDT - 80</td>
                                    <td>3 Litter</td>
                                    <td>BDT - 240</td>
                                    <td><a href="edit_invoice.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> Edit invoice</a>
                                    <a href="edit_view_invoice.php" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Invoice</a>
                                    </td>

                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">5</td>
                                    <td>Hasan Rahman</td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td>Machine 3</td>
                                    <td>Dizzel</td>
                                    <td>BDT - 80</td>
                                    <td>150 Litter</td>
                                    <td>BDT - 12000</td>
                                    <td><a href="edit_invoice.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> Edit invoice</a>
                                    <a href="edit_view_invoice.php" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Invoice</a>
									</td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">6</td>
                                    <td>Habiba</td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td>Machine 1</td>
                                    <td>Octen</td>
                                    <td>BDT - 75</td>
                                    <td>2 Litter</td>
                                    <td>BDT - 150</td>
                                    <td><a href="edit_invoice.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> Edit invoice</a>
                                    <a href="edit_view_invoice.php" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Invoice</a>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">7</td>
                                    <td>Tanzila Rahman</td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td>Machine 1</td>
                                    <td>Octen</td>
                                    <td>BDT - 75</td>
                                    <td>10 Litter</td>
                                    <td>BDT - 750</td>
                                    <td><a href="edit_invoice.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> Edit invoice</a>
                                    <a href="edit_view_invoice.php" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Invoice</a>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">8</td>
                                    <td>Hosen Mahmud</td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td>Machine 1</td>
                                    <td>Octen</td>
                                    <td>BDT - 75</td>
                                    <td>50 Litter</td>
                                    <td>BDT - 3750</td>
                                    <td><a href="edit_invoice.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> Edit invoice</a>
                                    <a href="edit_view_invoice.php" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Invoice</a>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">9</td>
                                    <td>Hasan Rahman</td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td>Machine 3</td>
                                    <td>Dizzel</td>
                                    <td>BDT - 80</td>
                                    <td>5 Litter</td>
                                    <td>BDT - 400</td>
                                    <td><a href="edit_invoice.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> Edit invoice</a>
                                    <a href="edit_view_invoice.php" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Invoice</a>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">10</td>
                                    <td>Hasan Rahman</td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td><span class="label label-default">Not Available</span></td>
                                    <td>Machine 1</td>
                                    <td>Octen</td>
                                    <td>BDT - 75</td>
                                    <td>5 Litter</td>
                                    <td>BDT - 375</td>
                                    <td><a href="edit_invoice.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> Edit invoice</a>
                                    <a href="edit_view_invoice.php" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> View Invoice</a>
                                    </td>
                                </tr> -->
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="dataTables_info" id="sample_1_info" role="status" aria-live="polite">Showing 1 to 10 of 22 entries</div>
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div class="dataTables_paginate paging_bootstrap_number" id="sample_1_paginate">
                                <ul class="pagination" style="visibility: visible;">
                                    <li class="prev disabled">
                                        <a href="http://pump.thesoftking.com/customer-show#" title="Prev">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="http://pump.thesoftking.com/customer-show#">1</a></li>
                                    <li><a href="http://pump.thesoftking.com/customer-show#">2</a></li>
                                    <li><a href="http://pump.thesoftking.com/customer-show#">3</a></li>
                                    <li class="next"><a href="http://pump.thesoftking.com/customer-show#" title="Next"><i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
                    </div>
                </div>

            </div>
        </div><!-- ROW-->


        <div class="text-center">
            
        </div>
    


        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->


<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2018 © All Copyrights Reserved by Reflekt Visual Pvt. Ltd.</div>
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