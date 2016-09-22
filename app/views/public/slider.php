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
							<li data-target="#slider-carousel" data-slide-to="5"></li>
							<li data-target="#slider-carousel" data-slide-to="6"></li>
							<li data-target="#slider-carousel" data-slide-to="7"></li>
						</ol>
						 
						<div class="carousel-inner">
							<?php 
                               $c = new Maincategory();
                               $res = $c->selectAllCat();
                               while($row = mysqli_fetch_assoc($res))
                               {
                                   if($row['cat_id']==3){
                                     echo "<div class='item active'>
                                     <div class='col-sm-1'></div>
								     <div class='col-sm-5'> 
									<h1><span>Get</span> It</h1>
									<h2>{$row['cat_name']} </h2>";
                                    }
                                    else{
                                	    echo "<div class='item'>
                                	    <div class='col-sm-1'></div>
								       <div class='col-sm-5'> 
									   <h1><span>Get</span> It</h1>
									   <h2>{$row['cat_name']} </h2>";
                                    }
                                    
                                    echo "<a href='products?category={$row['cat_id']}'>
									<button type='button' class='btn btn-default get'>Visit category</button></a>
								</div>
								<div class='col-sm-4 slidersizing'><br><br><br>
									<img src='/eshopper/assets/images/categories/{$row['cat_image']}' class='girl img-responsive' alt='' />
				
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