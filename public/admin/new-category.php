<?php 

  require('header.php');
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
                            <a href="new-category.php">
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
                            <a href="edit-category.php">
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
                            <a href="delete-category.php">
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
                            <a href="new-subcategory.php">
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
                            <a href="edit-subcategory.php">
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
                            <a href="delete-subcategory.php">
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
                            Create New Category
                        </h1>
                       <form action="createcategory.php" method="post" enctype="multipart/form-data">
                             <label>Category Name: </label><input type="text" name="name" placeholder="Enter category name"/><br><br>
                             <label>Category Image: </label><input type="file" id="input" name="img"/><br>
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