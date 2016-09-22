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
                            Inbox
                        </h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Contacts</th>
                                            <th>Subject</th>
                                            <th>Contents</th>
                                            <th>Seen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                           $message = new Contacts();
   
                                           $res = $message->selectAllMessages();
                                           while($row = mysqli_fetch_assoc($res))
                                           {
                                                   echo "<tr class='odd gradeX'><td>{$row['received_date']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['phone']}</td><td>{$row['subject']}</td><td>{$row['message']}</td><td class='center'><form action='users/remove' method='post'><input type='text' name='id' value='{$row['id']}' class='hidding'/><input type='submit' value='Mark as read'/></form></td></tr>";
                                           } ?> 
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
        $("#reply").click(function()
              {
                  $("#replyback").slideToggle();
              });
    });
    </script>

</body>

</html>
