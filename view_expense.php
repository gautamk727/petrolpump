<!DOCTYPE html>
<!-- saved from url=(0040)http://pump.thesoftking.com/expense-show -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>All Expense</title>
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
        <link rel="stylesheet" href="./csss/jquery-ui.min.css">

</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo">

<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">


        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="view_expense.php">
                <img src="./img/logo.png" class="logo-default" alt="-" style="height: 60px; width: 150px;">

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
            <h3 class="page-title">All Expense </h3>
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
                        <div class="row">
                            <div class="col-md-10">
                                <form method="POST" action="search_expense.php" accept-charset="UTF-8" class="form-inline margin-bottom-5"><input name="_token" type="hidden" value="encQ4wMYnstwFzZCGpXWPRoDf3JkTdS4ECvFHirU">

                                    <div class="form-group">
                                        <label for="exampleInputName2">Start Date</label>
                                        <input type="text" name="start_date" class="form-control hasDatepicker" id="start_date" placeholder="start Date" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">End Date</label>
                                        <input type="text" name="end_date" class="form-control hasDatepicker" id="end_date" placeholder="End Date" required="">
                                    </div>
                                    &nbsp;&nbsp;<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> View Expense</button>

                                </form>

                            </div>
                        </div>
                        <div id="sample_1_wrapper" class="dataTables_wrapper no-footer"><div class="row"><div class="col-md-12"><div class="dt-buttons"><a class="dt-button buttons-print btn dark btn-outline" tabindex="0" aria-controls="sample_1"><span>Print</span></a><a class="dt-button buttons-copy buttons-html5 btn red btn-outline" tabindex="0" aria-controls="sample_1"><span>Copy</span></a><a class="dt-button buttons-pdf buttons-html5 btn green btn-outline" tabindex="0" aria-controls="sample_1"><span>PDF</span></a><a class="dt-button btn yellow btn-outline" tabindex="0" aria-controls="sample_1"><span></span></a><a class="dt-button buttons-csv buttons-html5 btn purple btn-outline" tabindex="0" aria-controls="sample_1"><span>CSV</span></a><a class="dt-button buttons-collection buttons-colvis btn dark btn-outline" tabindex="0" aria-controls="sample_1"><span>Columns</span></a></div></div></div><div class="row"><div class="col-md-6 col-sm-12"><div class="dataTables_length" id="sample_1_length"><label><select name="sample_1_length" aria-controls="sample_1" class="form-control input-sm input-xsmall input-inline"><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select> entries</label></div></div><div class="col-md-6 col-sm-12"><div id="sample_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_1"></label></div></div></div><div class="table-scrollable"><table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="sample_1" role="grid" aria-describedby="sample_1_info">

                            <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID#: activate to sort column descending" style="width: 40px;">ID#</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Expense Date: activate to sort column ascending" style="width: 197px;">Expense Date</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Reason: activate to sort column ascending" style="width: 89px;">Reason</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Note: activate to sort column ascending" style="width: 110px;">Note</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 80px;">Amount</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Created By: activate to sort column ascending" style="width: 105px;">Created By</th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 67px;">Action</th></tr>
                            </thead>

                            <tbody>
                                                                                                                        
                                                                                            
                                                                                            
                                                                                            
                            
                            <tr role="row" class="odd">
                                    <td class="sorting_1">1</td>
                                    <td>14-January-17 : 06:16:15 AM</td>
                                    <td>test expense</td>
                                    <td>
                                                                                    <span class="label label-info">Not Available</span>
                                                                            </td>
                                    <td>BDT - 80 </td>
                                    <td>Seller Rahman </td>
                                    <td>
                                        <a href="edit_expense.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> EDIT</a>
                                    </td>

                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">2</td>
                                    <td>14-January-17 : 06:09:06 AM</td>
                                    <td>Tea Bill</td>
                                    <td>
                                                                                    <span class="label label-info">Not Available</span>
                                                                            </td>
                                    <td>BDT - 20 </td>
                                    <td> </td>
                                    <td>
                                        <a href="edit_expense.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> EDIT</a>
                                    </td>

                                </tr><tr role="row" class="odd">
                                    <td class="sorting_1">3</td>
                                    <td>13-January-17 : 02:40:26 AM</td>
                                    <td>extra expense</td>
                                    <td>
                                                                                    Mr. Delon Come.
                                                                            </td>
                                    <td>BDT - 50 </td>
                                    <td> </td>
                                    <td>
                                        <a href="edit_expense.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> EDIT</a>
                                    </td>

                                </tr><tr role="row" class="even">
                                    <td class="sorting_1">4</td>
                                    <td>13-January-17 : 02:25:08 AM</td>
                                    <td>Tea Bill</td>
                                    <td>
                                                                                    <span class="label label-info">Not Available</span>
                                                                            </td>
                                    <td>BDT - 20 </td>
                                    <td> </td>
                                    <td>
                                        <a href="edit_expense.php" class="btn purple btn-sm"><i class="fa fa-edit"></i> EDIT</a>
                                    </td>

                                </tr></tbody>
                        </table></div><div class="row"><div class="col-md-5 col-sm-12"><div class="dataTables_info" id="sample_1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-md-7 col-sm-12"><div class="dataTables_paginate paging_bootstrap_number" id="sample_1_paginate"><ul class="pagination" style="visibility: visible;"><li class="prev disabled"><a href="http://pump.thesoftking.com/expense-show#" title="Prev"><i class="fa fa-angle-left"></i></a></li><li class="active"><a href="http://pump.thesoftking.com/expense-show#">1</a></li><li class="next disabled"><a href="http://pump.thesoftking.com/expense-show#" title="Next"><i class="fa fa-angle-right"></i></a></li></ul></div></div></div></div>
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



    <script src="./csss/jquery-ui.min.js.download" type="text/javascript"></script>

    <script>

        $(function() {
            $('#start_date').datepicker({
                dateFormat: "yy-mm-dd",
            }).on('changeDate', function(e) {
                $(this).datepicker('hide');
            });

        });
        $(function() {
            $('#end_date').datepicker({
                dateFormat: "yy-mm-dd",
            }).on('changeDate', function(e) {
                $(this).datepicker('hide');
            });

        });
    </script>




<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>