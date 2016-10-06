<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
							<li data-target="#slider-carousel" data-slide-to="3"></li>
							<li data-target="#slider-carousel" data-slide-to="4"></li>
						</ol> 
						 
						<div class="carousel-inner">
							<?php 
                               $v = 1;
                               $query = "SELECT * FROM items where is_accepted = 1 order by post_id desc limit 5";
                               $res = mysqli_query($con,$query);
                               while($row = mysqli_fetch_assoc($res))
                               {
                                   if($v==1){
                                     echo "<div class='item active'>
                                     <div class='col-sm-2'></div>
								     <div class='col-sm-4'> 
									<h1><span>Get</span> It</h1>
									<h2>{$row['name']} </h2>";
									$v = 2;
                                    }
                                    else{
                                	    echo "<div class='item'>
                                	    <div class='col-sm-2'></div>
								       <div class='col-sm-4'> 
									   <h1><span>Get</span> It</h1>
									   <h2>{$row['name']} </h2>";
                                    }
                                    
                                    echo "<a href='product?id={$row['post_id']}'>
									<button type='button' class='btn btn-default get'>View Details</button></a>
								</div>
								<div class='col-sm-4 slidersizing'><br>
									<img src='assets/images/posts/{$row['main']}' class='girl img-responsive' alt='' />
				
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