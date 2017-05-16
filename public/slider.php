<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
                  <div class="right-sidebar">
						<h2 class="title text-center">Service categories</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        <?php 
          $c = 11;
          $query = "SELECT * FROM service_categories ";
          $res = mysqli_query($con,$query);
          while($row = mysqli_fetch_assoc($res))
          {
            if($row['id']==$c)
            {
              echo "<div class='panel panel-default'>
                        <div class='panel-heading'>
                          <h4 class='panel-title'>
                           <a data-toggle='collapse' data-parent='#accordian' href='#{$row['id']}'>
                            <span class='badge pull-right'><i class='fa fa-angle-down'></i></span>
                            {$row['category']}
                           </a>
                          </h4>
                        </div>
                        <div id='$c' class='panel-collapse collapse'>
                          <div class='panel-body'>
                            <ul>";
                              $queryy = "SELECT * FROM service_subcategories ";
                              $re = mysqli_query($con,$queryy);
                              while($ro = mysqli_fetch_assoc($re))
                              {
                                if($ro['ref1']==$c|| $ro['ref2']==$c || $ro['ref3']==$c || $ro['ref4']==$c)
                                {
                                  echo "<li><a href='service-sub-category.php?id={$ro['id']}'>*   {$ro['sub_category']} </a></li>";
                                }
                              }
            }
                     echo"</div>
                        </div>
                    </div>";
                   $c = $c+1;
                                            
          } 
      ?>
        </div><!--/category-productsr-->
      </div>
    </div>
				<div class="col-sm-7"><br><br><br>
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
									            <a href="category.php?id=1"> <img src='assets/images/slider/comp.jpg' style='width:100%;' class='girl img-responsive' alt='' />
				                                </a>
				                               </div> 
				             </div>
				             
							<div class='item'>
								  <div class='col-sm-12'> 
						              <a href="category.php?id=2"><img src='assets/images/slider/phone.jpg' style='width:100%;' class='girl img-responsive' alt='' />
				                      </a>
				                  </div>
							</div>
						    
							<div class='item'>
								  <div class='col-sm-12'> 
						             <a href="category.php?id=6" ><img src='assets/images/slider/sport.jpg' style='width:100%;' class='girl img-responsive' alt='' /></a>
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
				<div class="col-sm-2">
					<img src="assets/images/home/advertise.png">
				</div>
				<!--<div class="col-sm-3">
				<h2 class="title text-center">Job vacancies</h2>
                    <div class="col-sm-12 well" style="background:#f4f9f7">
                      <a href="job_vacancy.php">
                        <b>Business Support Advisor, Kigali, Rwanda</b><br>
                        Organization: FHI 360<br>

                      </a>
                    </div>
					<div class="col-sm-12 well" style="background:#f4f9f7">
                      <a href="job_vacancyy.php">
                        <b>Research Development Officer</b><br>
                        University of Global Health Equity (UGHE) <br>

                      </a>
                    </div>

				</div>-->

			</div>
		</div>
	</section><!--/slider-->
