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
                            Orders
                        </h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Uploaded date</th>
                                            <th>Title</th>
                                            <th>Is_Product</th>
                                            <th>Details</th>
                                            <th>User</th>
                                            <th>View Details</th>
                                            <th>Accept Post</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                           $query = "SELECT * FROM vieworders order by id desc";
                                           $res = mysqli_query($con,$query);
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            if($row['is_accepted']== 0)
                                            {
                                              echo "<tr class='odd gradeX'><td>{$row['up_date']}</td><td>{$row['name']}</td><td>{$row['is_product']}</td><td>{$row['details']}</td><td class='center'>{$row['user']}</td><td class='center'><form action='order-view.php' method='GET'><input type='text' name='id' value='{$row['id']}' class='hidding'/><input type='submit' value='view'/></form></td><td><form action='order-accept.php' method='GET'><input type='text' name='id' value='{$row['id']}' class='hidding'/><input type='submit' value='Accept'/></form></td></tr>";
                                            }
                                            else{
                                               echo "<tr class='odd gradeX'><td>{$row['up_date']}</td><td>{$row['name']}</td><td>{$row['is_product']}</td><td>{$row['details']}</td><td class='center'>{$row['user']}</td><td class='center'><form action='order-view.php' method='GET'><input type='text' name='id' value='{$row['id']}' class='hidding'/><input type='submit' value='view'/></form></td><td>Done</td></tr>";
                                              }   
                                           }

                                            ?> 
                                    </tbody>
                                </table>
                            </div>
                            
                           
                        </div>
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
