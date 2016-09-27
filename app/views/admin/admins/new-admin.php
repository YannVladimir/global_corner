<?php 

  require(BASEPATH.'app/views/admin/includes/header.php');
?>
           
 
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Create New Admin
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
               
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-5">
                       <form action="newadmin/create" method="post"  id="validation" novalidate="novalidate">
                        <label>Firstname: </label><input type="text" name="firstname" placeholder="Enter firstname"/><br><br>
                        <label>Lastname: </label><input type="text" name="lastname" placeholder="Enter lastname"/><br><br>
                        <label>Email: </label><input type="text" name="email" placeholder="Enter email"/><br><br>
                        <label>Contact No: </label><input type="text" name="contact" placeholder="Enter contact number"/><br><br>
                        
                        <input type="submit" value= "Create"/>
                       </form>
                       
                       
                    </div>
                    <div class="col-lg-3"></div>

                    
                    
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
       
</body>

</html>