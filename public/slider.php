<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
							<li data-target="#slider-carousel" data-slide-to="4"></li>
						    <li data-target="#slider-carousel" data-slide-to="5"></li>
							<li data-target="#slider-carousel" data-slide-to="6"></li>
							 
						</ol>   
						 
						<div class="carousel-inner">
							<?php 
                               $v = 1;
                               $query = "SELECT * FROM categories where cat_id!=8";
                               $res = mysqli_query($con,$query);
                               while($row = mysqli_fetch_assoc($res))
                               {

                                   if($v==1){
                                     echo "<div class='item active'>
								     <div class='col-sm-6'> 
									<h1><span>250</span> Trade</h1>
									<h2>{$row['cat_name']} category </h2>";
									$v = 2;
                                    }
                                    else{
                                	    echo "<div class='item'>
								       <div class='col-sm-6'> 
									   <h1><span>250</span> Trade</h1>
									   <h2>{$row['cat_name']} category</h2>";
                                    }
                                    
                                    echo "<a href='category.php?id={$row['cat_id']}'>
									<button type='button' class='btn btn-default get'>Visit Category</button></a>
								</div>
								<div class='col-sm-4 slidersizing'><br>
								<a href='category.php?id={$row['cat_id']}'>
									<img src='assets/images/categories/{$row['cat_image']}' class='girl img-responsive' alt='' />
				                </a>
								</div>
							</div>";

                                }
                            ?>
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