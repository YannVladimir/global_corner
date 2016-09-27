
	<?php
	   require('admin_header.php');
	?>
	
	<section>
		<div class="container">
			<div class="row">
				<?php  
                   require('admin_menu.php');    
                ?>
				<div class="col-sm-9 pull-right">
					<div class="blog-post-area">
						<h2 class="title text-center">Dashboard</h2>
						<div class="row">
                           <div class="col-lg-3 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                         <div class="row">
                                             <div class="col-xs-3">
                                             <i class="fa fa-user fa-4x"></i>
                                             </div>
                                             <div class="col-xs-9 text-right">
                                                <div class="huge">26</div>
                                                <div class="big">New Users!</div>
                                             </div>
                                          </div>
                                    </div>
                                    <a href="#">
                                      <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                      </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                         <div class="row">
                                             <div class="col-xs-3">
                                             <i class="fa fa-shopping-cart  fa-4x"></i>
                                             </div>
                                             <div class="col-xs-9 text-right">
                                                <div class="huge">26</div>
                                                <div class="big">New Posts!</div>
                                             </div>
                                          </div>
                                    </div>
                                    <a href="#">
                                      <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                      </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                         <div class="row">
                                             <div class="col-xs-3">
                                             <i class="fa fa-comments fa-4x"></i>
                                             </div>
                                             <div class="col-xs-9 text-right">
                                                <div class="huge">26</div>
                                                <div class="big">New feedbacks!</div>
                                             </div>
                                          </div>
                                    </div>
                                    <a href="#">
                                      <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                      </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                         <div class="row">
                                             <div class="col-xs-3">
                                             <i class="fa fa-envelope fa-4x"></i>
                                             </div>
                                             <div class="col-xs-9 text-right">
                                                <div class="huge">26</div>
                                                <div class="big">New messages!</div>
                                             </div>
                                          </div>
                                    </div>
                                    <a href="#">
                                      <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                      </div>
                                    </a>
                                </div>
                            </div>
                        </div>
				    </div>	
			    </div>
			</div>
		</div>
	</section>
    <?php 
       require('scripts.php');
    ?>
</body>
</html>