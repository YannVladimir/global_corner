
<?php 

  require(BASEPATH.'app/views/admin/includes/header.php');
?>       
 
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-2 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <div class="huge"></div>
                                        <div>New Category</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo BASEURL; ?>newcategory">
                                <div class="panel-footer">
                                    <span class="pull-left">Create</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="huge"></div>
                                        <div>Category</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo BASEURL; ?>editcategory">
                                <div class="panel-footer">
                                    <span class="pull-left">Edit</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 text-center">
                                        <div class="huge"></div>
                                        <div>Category</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo BASEURL; ?>deletecategory">
                                <div class="panel-footer">
                                    <span class="pull-left">Delete</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 text-center">
                                        <div class="huge"></div>
                                        <div>Sub-Category</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo BASEURL; ?>newsubcategory">
                                <div class="panel-footer">
                                    <span class="pull-left">Create</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 text-center">
                                        <div class="huge"></div>
                                        <div>Sub-Category</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo BASEURL; ?>editsubcategory">
                                <div class="panel-footer">
                                    <span class="pull-left">Edit </span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    
                                    <div class="col-xs-12 text-center">
                                        <div class="huge"></div>
                                        <div>Sub-Category</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo BASEURL; ?>deletesubcategory">
                                <div class="panel-footer">
                                    <span class="pull-left">Delete</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        
                    </div>
                    <div class="col-lg-5">
                        <h1 class="page-header">
                            Delete Category
                        </h1>
                        <form action="deletecategory/delete" method="post">
                           <label>Select category : </label>
                           <select name="id">
                             <option>Select category</option>
                             <?php 
                                $cat = new Maincategory();

                                $res = $cat->selectAllCat();
                                while($row = mysqli_fetch_assoc($res))
                                {
                                 
                                   echo "<option value='{$row['cat_id']}'>{$row['cat_name']}</option>";
                                } 
                              ?>
                           </select><br>
                           <input type="submit" value="Delete"/>
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