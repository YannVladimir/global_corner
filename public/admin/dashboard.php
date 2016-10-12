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
                            <a href="newposts.php">
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
                                        <div class="huge">0</div>
                                        <div>Feedbacks</div>
                                    </div>
                                </div>
                            </div>
                            <a href="feedback">
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
                            <a href="new_messages.php">
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
