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
                        <div class="panel panel-red">
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
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            if($row['accepted']== 0)
                                              {
                                                $count++;
                                               }
                                               $a++;   
                                            }
                                            echo " $count

                                             
                                        </div>
                                        <div>$a Total</div>";?>
                                    </div>
                                </div>
                            </div>
                            <a href="new-users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Users </span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-eye fa-5x"></i>
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
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Emails in touch</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
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
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                           $query = "SELECT * FROM orders";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;
                                            if($row['is_accepted']==0){
                                            $a++;}     
                                           }
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="orders.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Orders</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
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
                                        <i class="fa fa-envelope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                           $query = "SELECT * FROM contactus";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;
                                            if($row['seen']==0){
                                            $a++;}     
                                           }
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="new-messages.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Messages</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
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
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                           $query = "SELECT * FROM items where refcat_id = 3";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;
                                            if($row['is_accepted']==0){
                                            $a++;}     
                                           }
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="electronics.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Electronics</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                           $query = "SELECT * FROM items where refcat_id = 4";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;
                                            if($row['is_accepted']==0){
                                            $a++;}     
                                           }
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="mobiles.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Mobiles</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
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
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                           $query = "SELECT * FROM items where refcat_id = 5";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;
                                            if($row['is_accepted']==0){
                                            $a++;}     
                                           }
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="furnitures.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Furnitures</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
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
                                           $query = "SELECT * FROM items where refcat_id = 6";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;
                                            if($row['is_accepted']==0){
                                            $a++;}     
                                           }
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="fashion.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Fashion</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
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
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                           $query = "SELECT * FROM items where refcat_id = 7";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;
                                            if($row['is_accepted']==0){
                                            $a++;}     
                                           }
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="sports.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Sports & Hobbies</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                           $query = "SELECT * FROM items where refcat_id = 8";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;
                                            if($row['is_accepted']==0){
                                            $a++;}     
                                           }
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="cars.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Cars & Bikes</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
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
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                           $query = "SELECT * FROM items where refcat_id = 9";
                                           $res = mysqli_query($con,$query);
                                           $count = 0;
                                           $a = 0;
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            $count++;
                                            if($row['is_accepted']==0){
                                            $a++;}     
                                           }
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="estate.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Real Estates</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
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
                                           echo " $a";
                                           echo "</div>";
                                           echo "<div>";
                                           echo "$count ";
                                           echo " Total</div>"
                                          ?>
                                        
                                       
                                    </div>
                                </div>
                            </div>
                            <a href="jobs.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Jobs</span>
                                    <span class="pull-right">View Details <i class="fa fa-arrow-circle-right"></i></span>
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
