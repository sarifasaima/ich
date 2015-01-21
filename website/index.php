<?php
    session_start();
    include_once('includes/core.php');
    /*include_once('includes/header.php');*/
?>

<body>
        
        <!-- Top menu -->
		<div class="container">
	  <div class="row">
		<div class="col-md-12">

		  <nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a href="index.php">
								<i class="fa fa-home"></i><br>Home <span></span>
							</a>

						</li>
						<li>
							<a href="about.php"><i class="fa fa-user"></i><br>About Me</a>
						</li>
						<li>
							<a href="portfolio.php"><i class="fa fa-camera"></i><br>Photo Gallery</a>
						</li>
						<!--drdwn-->
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" >
								<i class="fa fa-home"></i><br>Sign in <span class="caret"></span>
							</a>
							<ul class="dropdown-menu dropdown-menu-left" role="menu">
								<li><a href="login.php">Login</a></li>
								<li><a href="registration.php">Registration</a></li>
							</ul>
						</li>
						<!--drdwn-->
						<li>
							<a href="contact.php"><i class="fa fa-envelope"></i><br>Contact</a>
						</li>
					</ul>
				</div>
			</div>
		  </nav>
		</div><!---col -->
	  </div><!---row-->
     </div><!--container -->

		<!-- Slider -->
		<div class="slider-container">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 slider  wow fadeInUp">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="assets/img/slider/n2.jpg">
									<img src="assets/img/slider/n2.jpg">
									<div class="flex-caption">
									antttt
									</div>
								</li>
								<li data-thumb="assets/img/slider/fl1.jpg">
									<img src="assets/img/slider/fl1.jpg">
									<div class="flex-caption">
										wow
									</div>
								</li>
								<li data-thumb="assets/img/slider/n1.jpg">
									<img src="assets/img/slider/n1.jpg">
									<div class="flex-caption">
										nature is here
									</div>
								</li>
								<li data-thumb="assets/img/slider/f1.jpg">
									<img src="assets/img/slider/f1.jpg">
									<div class="flex-caption">
										food for mind
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- slider ends -->

				</div>
			</div>
		</div>





		<!-- Presentation -->
        <div class="presentation-container">
        	<div class="container">
        		<div class="row">
	        		<div class="col-md-12 wow fadeInLeftBig">
	            		<h1>Introducing  <span class="violet">Sai's photography</span>,<br> a super cool designer and photography</h1>
	            		<p> design your beautiful websites, logos and prints. Your project is safe with me.</p>
	            	</div>
            	</div>
        	</div>
        </div>

        <!-- Services -->
        <div class="services-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-md-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-eye"></i></div>
		                    <h3>Beautiful Websites</h3>
		                    <p>just check my site out.just check my site out isicing elit, sed do eiusmod tempor incididunt ut labore et.
							</p>
		                    <a class="big-link-1" href="#">Read more</a>
		                </div>
					</div>
					<div class="col-md-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-table"></i></div>
		                    <h3>Responsive Layout</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
		                    <a class="big-link-1" href="#">Read more</a>
		                </div>
	                </div>
	                <div class="col-md-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-magic"></i></div>
		                    <h3>Awesome Logos</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
		                    <a class="big-link-1" href="#">Read more</a>
		                </div>
	                </div>
	                <div class="col-md-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-print"></i></div>
		                    <h3>High Res Prints</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
		                    <a class="big-link-1" href="#">Read more</a>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>



        <!-- Testimonials -->
        <div class="testimonials-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-md-12 testimonials-title wow fadeIn">
		                <h2>My good works</h2>
		            </div>
	            </div>
	            <div class="row">
	                <div class="col-md-10 col-md-offset-1 testimonial-list">
	                	<div role="tabpanel">
	                		<!-- Tab panes -->
	                		<div class="tab-content">
	                			<div role="tabpanel" class="tab-pane fade in active" id="tab1">
	                				<div class="testimonial-image">
	                					<img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur..."<br>
		                                	<a href="#">Lorem Ipsum, dolor.co.uk</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab2">
	                				<div class="testimonial-image">
	                					<img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
		                                	ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
		                                	lobortis nisl ut aliquip ex ea commodo consequat..."<br>
		                                	<a href="#">Minim Veniam, nostrud.com</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab3">
	                				<div class="testimonial-image">
	                					<img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur..."<br>
		                                	<a href="#">Lorem Ipsum, dolor.co.uk</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab4">
	                				<div class="testimonial-image">
	                					<img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
		                                	ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
		                                	lobortis nisl ut aliquip ex ea commodo consequat..."<br>
		                                	<a href="#">Minim Veniam, nostrud.com</a>
		                                </p>
	                                </div>
	                			</div>
	                		</div>
	                		<!-- Nav tabs -->
	                		<ul class="nav nav-tabs" role="tablist">
	                			<li role="presentation" class="active">
	                				<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
	                			</li>
	                		</ul>
	                	</div>
	                </div>
	            </div>
	        </div>
        </div>


<!-- Footer -->
<?php
	include_once('includes/footer.php');
?>