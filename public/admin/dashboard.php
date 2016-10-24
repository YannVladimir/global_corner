<?php 
 
  require('header.php');
?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Statistics Overview
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                        <?php 
                                           $query="SELECT * from users";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            if($row['accepted']== 0)
                                              {
                                                $count++;
                                               }    
                                            }
                                            echo " $count";

                                            ?> 
                                        </div>
                                        <div>New Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="new-users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">   
                                          <?php 
                                           $query = "SELECT * FROM posts";
                                        $res = mysqli_query($con,$query);
                                           $count = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            if($row['is_accepted']== 0)
                                              {
                                                $count++;
                                               }    
                                            }
                                            echo " $count";

                                            ?>
                                        </div>
                                        <div>New Posts</div>
                                    </div>
                                </div>
                            </div>
                            <a href="new-posts.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                           $query = "SELECT * FROM items where refcat_id = 10";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;
                                            if($row['is_accepted']==0){
                                            $a++;}     
                                           }
                                           echo " $count";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$a";
                                           echo "new posts </div>";
                                          ?>
                                        
                                        <div>New</div>
                                    </div>
                                </div>
                            </div>
                            <a href="jobs.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                           $query = "SELECT * FROM items where refcat_id = 9 and is_accepted= 0";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;     
                                           }
                                           echo " $count";

                                          ?>
                                        </div>
                                        <div>New Estates</div>
                                    </div>
                                </div>
                            </div>
                            <a href="jobs.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                           <?php 
                                           $query = "SELECT * FROM contactus ";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            if($row['seen']== 0)
                                              {
                                                $count++;
                                               }    
                                            }
                                            echo " $count";

                                            ?>
                                        </div>
                                        <div>Messages</div>
                                    </div>
                                </div>
                            </div>
                            <a href="new-messages.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                           <?php 
                                           $query = "SELECT * FROM orders ";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            if($row['is_accepted']== 0)
                                              {
                                                $count++;
                                               }    
                                            }
                                            echo " $count";

                                            ?>
                                        </div>
                                        <div>New Orders</div>
                                    </div>
                                </div>
                            </div>
                            <a href="new-messages.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
</body> 

</html>
