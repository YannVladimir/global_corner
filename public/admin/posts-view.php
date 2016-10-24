
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
                            Post details
                        </h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Seller</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Details</th>
                                            <th>Price</th>
                                            <th>location</th>
                                            <th>Uploaded date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                           $id = $_GET['id'];
                                           $query = "SELECT * FROM items where post_id = '{$id}'";
                                           $res = mysqli_query($con,$query);
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                             echo "<tr class='odd gradeX'><td>{$row['user']}</td><td>{$row['seller']}</td><td>{$row['name']}</td><td>{$row['subcat_name']}</td><td>{$row['details']}</td><td class='center'>{$row['price']}</td><td class='center'>{$row['place_name']}</td><td class='center'>{$row['uploaded_date']}</td></tr>";
                                            
                                 echo "</tbody>
                                </table>
                            </div>
                            <div class='dataTable_wrapper'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Main Photo</th>
                                            <th>Photo 1</th>
                                            <th>Photo 2</th>
                                            <th>Photo 3</th>
                                            <th>Photo 4</th>
                                            <th>Photo 5</th>
                                        </tr>
                                    </thead>
                                    <tbody>";
                                     echo "<tr class='odd gradeX'><td><img src='../assets/images/posts/{$row['main']}'/></td><td><img src='../assets/images/posts/{$row['photo1']}'/></td><td><img src='../assets/images/posts/{$row['photo2']}'/></td><td><img src='../assets/images/posts/{$row['photo3']}'/></td><td class='center'><img src='../assets/images/posts/{$row['photo4']}'/></td><td class='center'><img src='../assets/images/posts/{$row['photo5']}'/></td></tr>";
                                      echo "</tbody>
                                </table>";

                                           }

                                            ?> 
                                    
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
