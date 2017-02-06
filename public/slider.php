<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
                  <div class="right-sidebar">
						<h2 class="title text-center">Product Categories</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php 
                                        $c = 1;
                                        $query = "SELECT * FROM categories";
                                        $res = mysqli_query($con,$query);
                                        while($row = mysqli_fetch_assoc($res))
                                        {
                                            if($row['cat_id']==$c && $row['cat_id']!=7 )
                                            {
                                                echo "<div class='panel panel-default' style='background:#f6f6f6'>
                                                         <div class='panel-heading'>
                                                             <h4 class='panel-title'>
                                                                <a data-toggle='collapse' data-parent='#accordian' href='#{$row['cat_id']}'>
                                                                  <span class='badge pull-right'><i class='fa fa-angle-down'></i></span>
                                                                     {$row['cat_name']}
                                                                </a>
                                                             </h4>
                                                        </div>
                                                        <div id='$c' class='panel-collapse collapse'>
                                                            <div class='panel-body'>
                                                                <ul>";$a = $row['cat_name'];
                                                                    $queryy = "SELECT * FROM amacategories ";
                                                                    $re = mysqli_query($con,$queryy);
                                                                    while($ro = mysqli_fetch_assoc($re))
                                                                    {
                                                                        if($ro['refcat_id']==$c)
                                                                        {
                                                                             echo "<li><a href='sub-category.php?id={$ro['subcat_id']}'>*   {$ro['subcat_name']} </a></li>";
                                                   
                                                                         }
                                                                    }
                                              
                                            }
                                            if($row['cat_id']!=7){
                                            echo "<li><a href='category.php?id={$c}'>*   All in {$a} </a></li></ul>
                                                             </div>
                                                        </div>
                                                    </div>";
                                            $c = $c+1;
                                            }
                                            else
                                            {
                                            	$c = $c+1;
                                            }
                                        } 
                                    ?>
							
						</div><!--/category-productsr-->
						
					</div>
				</div>
				<div class="col-sm-7">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<!--<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
							<li data-target="#slider-carousel" data-slide-to="4"></li>
						    <li data-target="#slider-carousel" data-slide-to="5"></li>
							<li data-target="#slider-carousel" data-slide-to="6"></li>
							 
						</ol>  --> 
						 
						<div class="carousel-inner">
							<div class='item active'>
								               <div class='col-sm-12'> 
									            <a href="win.php"> <img src='assets/images/slider/pub1.jpg' style='width:100%;' class='girl img-responsive' alt='' /></a>
				                               </div> 
				             </div>
				             <div class='item'>
								  <div class='col-sm-12'> 
						             <img src='assets/images/slider/cats.jpg' style='width:100%;' class='girl img-responsive' alt='' />
				                  </div>
							</div>
							<div class='item'>
								  <div class='col-sm-12'> 
						             <img src='assets/images/slider/phone.jpg' style='width:100%;' class='girl img-responsive' alt='' />
				                  </div>
							</div>
						    <div class='item'>
								  <div class='col-sm-12'> 
						             <a href="win.php"><img src='assets/images/slider/pub1.jpg' style='width:100%;' class='girl img-responsive' alt='' /></a>
				                  </div>
							</div>
							<div class='item'>
								  <div class='col-sm-12'> 
						             <img src='assets/images/slider/sport.jpg' style='width:100%;' class='girl img-responsive' alt='' />
				                  </div>
							</div>
						</div>
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
						
					</div>
					
				</div>

			</div>
		</div>
	</section><!--/slider-->