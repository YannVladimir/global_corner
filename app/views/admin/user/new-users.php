<?php

  require(BASEPATH.'app/views/admin/includes/header.php');
?>    
        <div id="page-wrapper">
 
            <div class="container-fluid">

                <!-- Page Heading -->
                 
                        <div class="row">
                
                            <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="page-header">
                            New Users
                        </h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th><form action='welcome/all' method='post'><input type='submit' value='Welcome All'/></form></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                           $user = new User();
                                           $a = date("Y-m-d");
                                           $res = $user->selectAlluser();
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            if($row['accepted']== 0){
                                                echo "<tr class='odd gradeX'><td>{$row['user_id']}</td><td>{$row['firstname']}</td><td>{$row['lastname']}</td><td class='center'>{$row['email']}</td><td class='center'>{$row['phone']}</td><td class='center'><form action='welcome/individual' method='post'><input type='text' value='{$row['user_id']}' name='id' class='hidding'/><input type='submit' value='Welcome'/></form></td>";
                                           } 
                                       }?>
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

  require(BASEPATH.'app/views/admin/includes/datatables.html');
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
