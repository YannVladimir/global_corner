
<?php

  require('header.php');
?>    
        <div id="page-wrapper"> 

            <div class="container-fluid">

                <!-- Page Heading -->
                
                        
                <div class="row">
                
                  <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="page-header">
                            Order
                        </h1>
                        <div class='col-lg-3'></div>
                        <div class='col-lg-6'>
                <div class='panel panel-default text-center'>
                    <div class='panel-heading'>
                        <h1 class='panel-title'><strong>Details </strong></h1>
                    </div>
                    <ul class='list-group'>
                      <?php 
                           $id = $_GET['id'];
                           $query = "SELECT * FROM vieworders where id = '{$id}'";
                           $res = mysqli_query($con,$query);
                           $row = mysqli_fetch_assoc($res);
                           if($row['is_product']==1)
                           {
                             $sql = "SELECT * FROM subcategories where subcat_id = '{$row['category']}'";
                             $r = mysqli_query($con,$sql);
                             $rowa = mysqli_fetch_assoc($r);
                             $category = $rowa['subcat_name'];
                           }
                           else
                           {
                            $sql = "SELECT * FROM service_subcategories where id = '{$row['category']}'";
                            $r = mysqli_query($con,$sql);
                            $rowa = mysqli_fetch_assoc($r);
                            $category = $rowa['sub_category'];
                           }
                           echo"<li class='list-group-item'><strong>Order Id: </strong> {$row['id']}</li>
                           <li class='list-group-item'><strong>Title: </strong> {$row['name']}</li>
                           <li class='list-group-item'><strong>Type: </strong> {$row['is_product']}</li>
                           <li class='list-group-item'><strong>Category: </strong> $category</li>
                           <li class='list-group-item'><strong>Details: </strong> {$row['details']}</li>
                           <li class='list-group-item'><strong> Locaton: </strong> {$row['place']}</li>
                           <li class='list-group-item'><strong>User: </strong> {$row['user']}</li>
                           <li class='list-group-item'><strong> Name: </strong> {$row['firstname']} {$row['lastname']}</li>
                           <li class='list-group-item'><strong>Emai: </strong> {$row['email']}</li>
                           <li class='list-group-item'><strong>Contact no: </strong> {$row['phone']}</li>
                           <li class='list-group-item'><strong>Uploaded date: </strong> {$row['up_date']}</li>";
                         if($row['is_product']==1)
                         {
                           $sql = "SELECT * FROM subcategories where subcat_id = '{$row['category']}'";
                         }
                         else
                         {
                          $sql = "SELECT * FROM service_subcategories where id = '{$row['category']}'";
                         }
                         $r = mysqli_query($con,$sql);
                         $rowa = mysqli_fetch_assoc($r);
                         
                        if($row['is_accepted']==0)
                        {
                            echo "<li class='list-group-item'>
                          <form action='order-accept.php' method='GET'>
                            <input type='text' class='hidden' name='id' value='{$row['id']}'>
                             <button type='submit' class='btn btn-default bton'>Accept Order</button>
                          </form>
                        </li>";
                        } 
                        echo"<li class='list-group-item'>
                          <form action='order-delete.php' method='GET'>
                            <input type='text' class='hidden' name='id' value='{$row['id']}'>
                             <button type='submit' class='btn btn-default bton'>Delete Order</button>
                          </form>
                        </li></ul>";
                        
                echo"</div>
                       
            </div>";
                         
                    ?>  
                    </div>
                    </div>
                        <!-- /.panel-heading -->
                        
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    
                    
                    
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php

  require('datatables.html');
?>
    
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
