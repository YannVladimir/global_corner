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
                            Real Estates
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
                                            <th>Category</th>
                                            <th>Details</th>
                                            <th>Price</th>
                                            <th>location</th>
                                            <th>View Details</th>
                                            <th>Accept Post</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                           $query = "SELECT * FROM items where refcat_id = 5 order by post_id desc";
                                           $res = mysqli_query($con,$query);
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            if($row['is_accepted']== 0)
                                            {
                                              echo "<tr class='odd gradeX'><td>{$row['uploaded_date']}</td><td>{$row['name']}</td><td>{$row['subcat_name']}</td><td>{$row['details']}</td><td class='center'>{$row['price']}</td><td class='center'>{$row['place_name']}</td><td class='center'><form action='posts-view.php' method='GET'><input type='text' name='id' value='{$row['post_id']}' class='hidding'/><input type='submit' value='view'/></form></td><td><form action='posts-accept.php' method='GET'><input type='text' name='id' value='{$row['post_id']}' class='hidding'/><input type='submit' value='Accept'/></form></td></tr>";
                                            }
                                            else{
                                               echo "<tr class='odd gradeX'><td>{$row['uploaded_date']}</td><td>{$row['name']}</td><td>{$row['subcat_name']}</td><td>{$row['details']}</td><td class='center'>{$row['price']}</td><td class='center'>{$row['place_name']}</td><td class='center'><form action='posts-view.php' method='GET'><input type='text' name='id' value='{$row['post_id']}' class='hidding'/><input type='submit' value='view'/></form></td><td>seen</td></tr>";
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
