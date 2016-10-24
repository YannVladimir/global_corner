
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
                            Post
                        </h1>
                        <div class='col-lg-2'></div>
                        <div class='col-lg-8'>
                <div class='panel panel-default text-center'>
                    <div class='panel-heading'>
                        <h2 class='panel-title'><strong> Details </strong></h2>
                    </div>
                    <ul class='list-group'>
                      <?php 
                           $id = $_GET['id'];
                           $query = "SELECT * FROM items where post_id = '{$id}'";
                           $res = mysqli_query($con,$query);
                           $row = mysqli_fetch_assoc($res);

                           echo"
                           <li class='list-group-item'><strong>Id: </strong>{$row['post_id']}</li>
                           <li class='list-group-item'><strong>User: </strong>{$row['user']}</li>
                        <li class='list-group-item'><strong>Ad title: </strong>{$row['name']}</li>
                        <li class='list-group-item'><strong>Details: </strong>{$row['details']}</li>
                        <li class='list-group-item'><strong>Price: </strong>{$row['price']}</li>
                        <li class='list-group-item'><strong>Category: </strong>{$row['subcat_name']}</li>";
                        
                       echo " 
                        <li class='list-group-item'><strong>District: </strong>{$row['place_name']}</li>
                        <li class='list-group-item'><strong>Seller: </strong>{$row['seller']}</li>
                        <li class='list-group-item'><strong>Contacts: </strong>{$row['contacts']}</li>

                        
                        <li class='list-group-item'><strong>Uploaded date: </strong>{$row['uploaded_date']}</li>

                        
                        </ul>";
                        
                echo"</div>
                <img src='../assets/images/posts/{$row['main']}'/>";
                        if ($row['photo1'])
                        {
                            echo "<img src='../assets/images/posts/{$row['photo1']}'/>";
                        }
                        if ($row['photo2'])
                        {
                            echo "<img src='../assets/images/posts/{$row['photo2']}'/>";
                        }
                        if ($row['photo3'])
                        {
                            echo "<img src='../assets/images/posts/{$row['photo3']}'/>";
                        }
                        if ($row['photo4'])
                        {
                            echo "<img src='../assets/images/posts/{$row['photo4']}'/>";
                        }
                        if ($row['photo5'])
                        {
                            echo "<img src='../assets/images/posts/{$row['photo5']}'/>";
                        }
            echo"</div>";
                         
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
