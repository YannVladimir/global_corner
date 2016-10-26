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
                            People in touch
                        </h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Email</th>
                                            <th>Checked</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                           $query = "SELECT * FROM saved_emails order by id desc";
                                           $res = mysqli_query($con,$query);
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                            if($row['seen']== 0)
                                            {
                                              echo "<tr class='odd gradeX'><td>{$row['up_date']}</td><td>{$row['email']}</td><td><form action='email-accept.php' method='GET'><input type='text' name='id' value='{$row['id']}' class='hidding'/><input type='submit' value='Accept'/></form></td></tr>";
                                            }
                                            else{
                                               echo "<tr class='odd gradeX'><td>{$row['up_date']}</td><td>{$row['email']}</td><td>Checked</td></tr>";
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
