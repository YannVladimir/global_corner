
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
                        <div class='col-md-6'>
                <div class='panel panel-default text-center'>
                    <div class='panel-heading'>
                        <h2 class='panel-title'><strong>Personal details </strong></h2>
                    </div>
                    <ul class='list-group'>
                      <?php 
                           $id = $_GET['id'];
                           $query = "SELECT * FROM items where post_id = '{$id}'";
                           $res = mysqli_query($con,$query);
                           $row = mysqli_fetch_assoc($res);
                           echo"<li class='list-group-item'><strong>User: </strong>{$row['user']}</li>
                        <li class='list-group-item'><strong>Company name: </strong>{$row['company_name']}</li>
                        <li class='list-group-item'><strong>Contacts: </strong>{$row['contacts']}'</li>
                        <li class='list-group-item'><strong>Job Position: </strong>{$row['job_position']}'</li>
                        <li class='list-group-item'><strong>Category: </strong>{$row['subcat_name']}'</li>
                        <li class='list-group-item'><strong>Required field: </strong>{$row['required_field']}'</li>
                        <li class='list-group-item'><strong>District: </strong>{$row['place_name']}'</li>
                        <li class='list-group-item'><strong>City: </strong>{$row['sector']}'</li>
                        <li class='list-group-item'><strong>Uploaded date: </strong>{$row['uploaded_date']}'</li>
                        <li class='list-group-item'><strong>Deadline: </strong>{$row['deadline']}'</li>
                        <li class='list-group-item'><strong> </strong><img src='../assets/images/posts/{$row['logo']}'></li>"; 
                        if($row['is_accepted']==0)
                        {
                            echo "<li class='list-group-item'>
                          <form action='posts-accept.php' method='GET'>
                            <input type='text' class='hidden' name='id' value='{$row['post_id']}'>
                             <button type='submit' class='btn btn-default bton'>Edit Acount</button>
                          </form>
                        </li>";
                        } 
                        echo"<li class='list-group-item'>
                          <form action='post-delete.php' method='GET'>
                            <input type='text' class='hidden' name='id' value='{$row['post_id']}'>
                             <button type='submit' class='btn btn-default bton'>Edit Acount</button>
                          </form>
                        </li>";      
                           
                    ?>  

                        
                    </ul>
                </div>
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
