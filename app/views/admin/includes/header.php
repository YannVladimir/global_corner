
<!DOCTYPE html> 
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Global Conner | Admin panel</title> 
    
    
   <link href="<?php echo BASEURL."../assets/css/bootstrap.min.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/bootstrap.min.css"; ?>" rel="stylesheet">

    <link href="<?php echo BASEURL."../assets/css/sb-admin.css"; ?>" rel="stylesheet">

    <link href="<?php echo BASEURL."../assets/css/plugins/morris.css"; ?>" rel="stylesheet">

    <link href="<?php echo BASEURL."../assets/font-awesome/css/font-awesome.min.css"; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASEURL."../assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"; ?>" rel="stylesheet" type="text/css">

    <script src="<?php echo BASEURL."../assets/js/jquery.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo BASEURL."../assets/js/jquery.validate.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo BASEURL."../assets/js/validating.js"; ?>"></script>
    <script src="<?php echo BASEURL."../assets/js/bootstrap.min.js"; ?>"></script>
    <script src="<?php echo BASEURL."../assets/js/plugins/morris/raphael.min.js"; ?>"></script>
    <script src="<?php echo BASEURL."../assets/js/plugins/morris/morris.min.js"; ?>"></script>
    <script src="<?php echo BASEURL."../assets/js/plugins/morris/morris-data.js"; ?>"></script>
    
    <style type="text/css">
     .hidding{
        display:none;
     }
     #replyclose{
        background-color: red;
        width:30px;
        height: 25px;
        float: right;
        text-align: center;
        cursor: pointer;
        color: white;
     } 
     .sizing{
    height:80px;
    width: 200px;
}
    </style>
   
   

    
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo BASEURL; ?>dashboard">Global Corner Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
        
                <li class="dropdown">   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo BASEURL; ?>message"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo BASEURL; ?>logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo BASEURL; ?>dashboard"><i class="fa fa-fw fa-desktop"></i> Dashboard</a>
                    </li>
                    <?php 
                        if($_SESSION['priority']=='1')
                        {
                            echo "<li>
                        <a href='/global/public/newadmin'><i class='fa fa-fw fa-wrench'></i> New Admin</a>
                    </li>";
                        }
                    ?>
                    
                    <li>
                        <a href="<?php echo BASEURL; ?>users"><i class="fa fa-fw fa-user"></i> Users</a>
                    </li>
                   <li>
                        <a href="<?php echo BASEURL; ?>viewcategory"><i class="fa fa-fw fa-tasks"></i> Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL; ?>all_posts"><i class="fa fa-fw fa-tasks"></i> Posts</a>
                    </li>
                    
                    <li>
                        <a href="<?php echo BASEURL; ?>messages"><i class="fa fa-fw fa-envelope"></i> Messages</a>
                    </li>
                    <li>
                        <a href="<?php echo BASEURL; ?>feedback"><i class="fa fa-fw fa-comments"></i> Feedbacks</a> 
                    </li>
                    <li>
                        <a href="<?php echo BASEURL; ?>terms"><i class="fa fa-fw fa-desktop"></i> Terms of use</a>
                    </li>

                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>