<?php

  require(BASEPATH.'app/views/admin/includes/header.php');
?>        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                
                <!-- /.row -->

                <div class="row">
                 <div class="col-lg-1"></div>
                  <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="page-header">
                            Sub Categories
                        </h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category name</th>
                                            <th>Sub-category name</th>
                                            <th>Remove sub-category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                           $cat = new Categories();
   
                                           $res = $cat->selectAllSubCategories();
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                 
                                              echo "<tr class='odd gradeX'><td class='center'>{$row['category_id']}</td><td>{$row['category_name']}</td><td>{$row['sub_category']}<td class='center'><form action='dashboard' method='post'><input type='text' value='{$row['category_id']}' class='hidding'/><input type='submit' value='delete sub-category'/></form></td>";
                                           } ?> 
                                    </tbody>
                                </table>
                            </div>
                            
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                      
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