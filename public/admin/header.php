<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
?>
<!DOCTYPE html> 
<html lang="en">
<head> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Global Conner | Admin panel</title> 
    
    
   <link href="../assets/css/yann.min.css" rel="stylesheet">

    <link href="../assets/css/sb-admin.css" rel="stylesheet">

    <link href="../assets/css/plugins/morris.css" rel="stylesheet">

    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css">

    <script src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.validate.js"></script>
    <script type="text/javascript" src="../assets/js/validating.js"></script>
    <script src="../assets/js/yann.min.js"></script>
    <script src="../assets/js/plugins/morris/raphael.min.js"></script>
    <script src="../assets/js/plugins/morris/morris.min.js"></script>
    <script src="../assets/js/plugins/morris/morris-data.js"></script>
    
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
                <a class="navbar-brand" href="dashboard.php">Sell It</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
        
                <li class="dropdown">   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>My Account  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="messages.php"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-desktop"></i> Dashboard</a>
                    </li>
                   <li>
                        <a href='new-admin.php'><i class='fa fa-fw fa-wrench'></i> New Admin</a>
                    </li>
                    <li>
                        <a href="users.php"><i class="fa fa-fw fa-user"></i> Users</a>
                    </li>
                   <li>
                        <a href="viewcategory.php"><i class="fa fa-fw fa-tasks"></i> Categories</a>
                    </li>
                    <li>
                        <a href="posts.php"><i class="fa fa-fw fa-tasks"></i> Posts</a>
                    </li>
                    
                    <li>
                        <a href="messages.php"><i class="fa fa-fw fa-envelope"></i> Messages</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>