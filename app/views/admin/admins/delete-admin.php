<?php

  require(BASEPATH.'app/views/admin/includes/header.php');
?>
           

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Delete Admin
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-5">
                       <form action="<?php echo BASEURL; ?>admindelete" target="frame">
                        <label class="select">Select Admin: </label>
                        <select name="">
                            <option value="">Select admin</option>
                            <?php 
                                $admin = new Admin();

                                $res = $admin->selectAllAdmin();
                                while($row = mysqli_fetch_assoc($res))
                                {
                                 
                                   echo "<option value='{$row['admin_id']}'>{$row['first_name']}  {$row['last_name']}</option>";
                             } ?>
                        </select>
                        <input type="submit" value="Find admin">
                       </form>
                       <iframe name="frame" frameborder="0" scrolling="no" onload="resizeIframe(this)"></iframe>
                       
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
    <script language="javascript" type="text/javascript">
       function resizeIframe(obj) {
          obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
       }
    </script>
</body>

</html>