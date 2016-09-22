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
                            Type message
                        </h1>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            
                            
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                        </div>
                    </div>
                </div>
                <!-- /.row-->

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
