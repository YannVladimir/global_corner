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
                                            <?php
                                               if(isset($_SESSION['priority']) == 1)
                                               {
                                                echo '<th>Delete</th>';
                                               }
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                           $query = "SELECT * FROM contactus ";
			                               $res = mysqli_query($con,$query);
                                           if(isset($_SESSION['priority']) == 1){
                                              while($row = mysqli_fetch_assoc($res))
                                              { 
                                                  if($row['seen'] == 0)
                                                   echo "<tr class='odd gradeX'><td>{$row['received_date']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['phone']}</td><td>{$row['subject']}</td><td>{$row['message']}</td><td class='center'><form action='new-contact.php' method='post'><input type='text' name='id' value='{$row['id']}' class='hidding'/><input type='submit' value='Mark as read'/></form></td><td class='center'><form action='message-delete.php' method='post'><input type='text' name='id' value='{$row['id']}' class='hidding'/><input type='submit' value='Delete'/></form></td></tr>";
                                                  else
                                                    echo "<tr class='odd gradeX'><td>{$row['received_date']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['phone']}</td><td>{$row['subject']}</td><td>{$row['message']}</td><td class='center'>Seen</td><td class='center'><form action='message-delete.php' method='post'><input type='text' name='id' value='{$row['id']}' class='hidding'/><input type='submit' value='Delete'/></form></td></tr>";
                                                  
                                              }
                                           }
                                           else
                                           {
                                              while($row = mysqli_fetch_assoc($res))
                                              {
                                                   if($row['seen'] == 0)
                                                    echo "<tr class='odd gradeX'><td>{$row['received_date']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['phone']}</td><td>{$row['subject']}</td><td>{$row['message']}</td><td class='center'><form action='new-contact.php' method='post'><input type='text' name='id' value='{$row['id']}' class='hidding'/><input type='submit' value='Mark as read'/></form></td></tr>";
                                                   else
                                                   echo "<tr class='odd gradeX'><td>{$row['received_date']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['phone']}</td><td>{$row['subject']}</td><td>{$row['message']}</td><td class='center'>Seen</td></tr>";
                                                    
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
        $("#reply").click(function()
              {
                  $("#replyback").slideToggle();
              });
    });
    </script>

</body>

</html>
