<!DOCTYPE html>
<html <?php language_attributes();?>> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name');?></title>
	<meta name="description" content="<?php bloginfo('description');?>">
	<meta name="author" content="Monir Hossain"><?php echo get_template_directory_uri();?>/
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/menu.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	
	<!-- Custom Fonts -->
	<link href="<?php echo get_template_directory_uri();?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="<?php echo get_template_directory_uri();?>/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/owl-carousel/owl.theme.css" rel="stylesheet">
	
	<script src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.1.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<!--Top-->
<div id="top">
	<div class="zerogrid">
		<div class="row">
			<div class="col-2-3">
				<ul class="list-inline top-link link">
					<li><i class="fa fa-map-marker"></i> 9876 Diamond hwy, California, Bangladesh</li>
					<li><a href="contact.html"><i class="fa fa-phone"></i> 123 456 7890</a></li>
					<li><i class="fa fa-clock-o"></i> Mo-Fr 11:00-00:00, Sa-Sa 15:00-00:00</li>
				</ul>
			</div>
			<div class="col-1-3">
				<ul class="list-inline top-social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<header>
	
		<nav class="wrap-menu">
			<div class="zerogrid">
				<div id="menu-trigger">Menu</div> 
				<?php wp_nav_menu(array(
					'theme_location' => 'primary',
					'container'=> '',
					'container_class'=> '',
				)); ?>   
				<ul id="menu" style="display: none;">
					<li><a href="index.html">Home</a></li>
					<li>
						<a href="#">Categories <i class="fa fa-chevron-down"></i></a>
						<ul>
							<li>
								<a href="#">Item 01</a>
							</li>
							<li>
								<a href="#">Item 02</a>
							</li>
							<li>
								<a href="#">Item 03 <i class="fa fa-chevron-right" style="margin: 2px 3px 2px;"></i></a>
								<ul>
									<li><a href="#">Item 31</a></li>
									<li><a href="#">Item 32</a></li>
								</ul>				
							</li>
							<li>
								<a href="#">Item 04 <i class="fa fa-chevron-right" style="margin: 2px 3px 2px;"></i></a>				
								<ul>
									<li><a href="#">Item 41</a></li>
									<li><a href="#">Item 42</a></li>
									<li><a href="#">Item 43</a></li>
									<li><a href="#">Item 44</a></li>
								</ul>	
							</li>
						</ul>
					</li>
					<li><a href="single.html">About</a></li>
					<li><a href="archive.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li style="float:right !important">
						<form method="get" action="/search" id="search" class="f-right">
							<input name="q" type="text" size="40" placeholder="Search..." />
						</form>
					</li>
				</ul>
			</div>
		</nav>
	
	<div class="wrap-header">
		<div class="main-header">
			<div class="zerogrid">
				<!-- Static Header -->
				<div class="header-text hidden-xs">
					<div class="t-center">
						<span>Bringing People Together  with a Tasty Coffee</span>
						<h1>Welcome to the Cafe Nir !</h1>
						<p>Thanks for voting us #1 Coffee Shop in The World.<br>Call (+880)1948283811</p>
						<a href="#" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
					</div>
				</div><!-- /header-text -->
			</div>
		</div>
	</div>
</header>



<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container">
		<!-----------------content-box-1-------------------->
		<section class="content-box boxstyle-1 box-1">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="col-1-2">
						<div class="wrap-col">
							<h1>Welcome To<br><span>Cafe Nir</span></h1>
							<p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
							<blockquote><p style="color: #111">At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p></blockquote>
							<a class="button bt1" href="single.html">More Info</a>
						</div>
					</div>
					<div class="col-1-2">
						<div class="row">
							<div class="col-1-2">
								<div class="wrap-col">
									<img src="<?php echo get_template_directory_uri();?>/images/home-2.jpg">
									<img src="<?php echo get_template_directory_uri();?>/images/home-4.jpg">
								</div>
							</div>
							<div class="col-1-2">
								<div class="wrap-col">
									<img src="<?php echo get_template_directory_uri();?>/images/home-3.jpg">
									<img src="<?php echo get_template_directory_uri();?>/images/home-5.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-----------------content-box-2-------------------->
		<section class="content-box boxstyle-2 box-2">
			<div class="zerogrid" style="width: 100%;">
				<div class="row wrap-box"><!--Start Box-->
						<?php 
							$products = new WP_Query(array('post_type'=>'wporg_product'));
							while($products->have_posts()):$products->the_post();

						 ?>
					<div class="col-1-4">
						<a class="portfolio-box zoom-effect" href="single.html">
							<?php the_post_thumbnail('product_img'); ?>
							<!-- <img src="<?php //echo get_template_directory_uri();?>/images/1.jpg" class="img-responsive" alt=""> -->
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-name">
										<?php the_title(); ?>
									</div>
									<div class="project-category">
										<?php the_category(); ?>
									</div>i
									<div class="project-detail">
										<span> <?php the_content(); ?></span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<?php endwhile; ?>
					<div class="col-1-4">
						<a class="portfolio-box zoom-effect" href="single.html">
							<img src="<?php echo get_template_directory_uri();?>/images/2.jpg" class="img-responsive" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-name">
										Pizza Name
									</div>
									<div class="project-category">
										#Category
									</div>
									<div class="project-detail">
										<span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo....</span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-1-4">
						<a class="portfolio-box zoom-effect" href="single.html">
							<img src="<?php echo get_template_directory_uri();?>/images/3.jpg" class="img-responsive" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-name">
										Pizza Name
									</div>
									<div class="project-category">
										#Category
									</div>
									<div class="project-detail">
										<span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo....</span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-1-4">
						<a class="portfolio-box zoom-effect" href="single.html">
							<img src="<?php echo get_template_directory_uri();?>/images/1.jpg" class="img-responsive" alt="">
							<div class="portfolio-box-caption">
								<div class="portfolio-box-caption-content">
									<div class="project-name">
										Pizza Name
									</div>
									<div class="project-category">
										#Category
									</div>
									<div class="project-detail">
										<span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo....</span>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		
		<!-----------------content-box-3-------------------->
		<section class="content-box box-3">
			<div class="zerogrid">
				<div class="wrap-box"><!--Start Box-->
					<div class="heading">
						<div class="row">
							<h2>Chef Recommends</h2>
							<div class="intro">Lorem ipsum dolor sit amet</div>
						</div>
					</div>
					<div class="row">

					<?php $testimonial= new WP_Query(array('post_type'=>'testimonial'));
					while ($testimonial->have_posts()):$testimonial->the_post(); ?>
						<div class="col-1-2">
							<div class="wrap-col">
								<p><?php the_content(); ?><br><small style="float: right;">-<?php the_title(); ?></small></p>
							</div>
						</div>
					<?php endwhile; ?>
						<div class="col-1-2">
							<div class="wrap-col">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista et iusto odio dignissim qui.</p></blockquote>
					</div>
				</div>
			</div>
		</section>
		
		<!-----------------content-box-4-------------------->
		<section class="content-box boxstyle-1 box-4">
			<div class="zerogrid">
				<div class="wrap-box"><!--Start Box-->
					<div class="row"><!--Start Box-->
						<div class="col-1-4">
							<div class="wrap-col item">
								<div class="portfolio-box">
									<img src="<?php echo get_template_directory_uri();?>/images/ava-4.jpg"alt="">
								</div>
								<div class="item-content">
									<h3><a href="#">Nina Santos</a></h3>
									<span>Cooker</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col item">
								<div class="portfolio-box">
									<img src="<?php echo get_template_directory_uri();?>/images/ava-5.jpg"alt="">
								</div>
								<div class="item-content">
									<h3><a href="#">Vin Diesel</a></h3>
									<span>Cooker</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col item">
								<div class="portfolio-box">
									<img src="<?php echo get_template_directory_uri();?>/images/ava-6.jpg"alt="">
								</div>
								<div class="item-content">
									<h3><a href="#">Tom Cruise</a></h3>
									<span>Cooker</span>
								</div>
							</div>
						</div>
						<div class="col-1-4">
							<div class="wrap-col item">
								<div class="portfolio-box">
									<img src="<?php echo get_template_directory_uri();?>/images/ava-7.jpg"alt="">
								</div>
								<div class="item-content">
									<h3><a href="#">Will Smith</a></h3>
									<span>Cooker</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-----------------content-box-5-------------------->
		<section class="content-box boxstyle-3 box-5">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="row"><!--Testimonials Box-->
						<div id="owl-testimonials" class="owl-carousel t-center">
							<div class="item testimonials-item">
								<img src="<?php echo get_template_directory_uri();?>/images/partner3.png" />
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
								<h5>Catherine Grace - America</h5>
							</div>
							<div class="item testimonials-item">
								<img src="<?php echo get_template_directory_uri();?>//partner1.png" />
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
								<h5>Catherine Grace - America</h5>
							</div>
							<div class="item testimonials-item">
								<img src="<?php echo get_template_directory_uri();?>/images/partner2.png" />
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
								<h5>Catherine Grace - America</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-----------------content-box-6-------------------->
		<section class="content-box box-6">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="col-1-3">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="col-2-3 t-left">
									<h3>Address</h3>
									<p>123, New Lenox Chicago, IL 89898989 DCTHK</p>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="col-1-3">
									<i class="fa fa-phone"></i>
								</div>
								<div class="col-2-3 t-left">
									<h3>Phone</h3>
									<p>Carteret NJ 0708 (999) 123-4567, (999) 806-01 04</p>
								</div>
							</div>
						</div>
						<div class="col-1-3">
							<div class="wrap-col">
								<div class="col-1-3">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="col-2-3 t-left">
									<h3>Email</h3>
									<p><span>Email One :</span> info@yoursite.com </p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</section>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer>
	<div class="top-footer">
		<div id="map" style="height: 270px;"></div>
	</div>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-3 col-footer-1">
					<div class="wrap-col">
						<h3 class="widget-title">About Us</h3>
						<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum gravida, metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
					</div>
				</div>
				<div class="col-1-3 col-footer-2">
					<div class="wrap-col">
						<h3 class="widget-title">Recent Post</h3>
						<ul>
							<li><a href="#">MOST VISITED COUNTRIES</a></li>
							<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
							<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
							<li><a href="#">STARTUP COMPANY???S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
						</ul>
					</div>
				</div>
				<div class="col-1-3 col-footer-3">
					<div class="wrap-col">
						<h3 class="widget-title">Subcribe</h3>
						<p>Never missed any post published in our site. Subscribe to our daly newsletter now.</p>
						<p>Email address:</p>
						<form action="#" method="post">
							<input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
							<input type="submit" value="SUBSCRIBE" class="button button-subcribe" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="zerogrid">
			<div class="wrapper">
				Copyright @ zDominos - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
				<ul class="quick-link">
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms of Use</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

	<!-- Js Menu -->
	<script src="js/jquery183.min.js"></script>
	<script type="text/javascript">
		$(function() {
			if ($.browser.msie && $.browser.version.substr(0,1)<7)
			{
			$('li').has('ul').mouseover(function(){
				$(this).children('ul').css('visibility','visible');
				}).mouseout(function(){
				$(this).children('ul').css('visibility','hidden');
				})
			}

			/* Mobile */
			$("#menu-trigger").on("click", function(){
				$("#menu").slideToggle();
			});

			// iPad
			var isiPad = navigator.userAgent.match(/iPad/i) != null;
			if (isiPad) $('#menu ul').addClass('no-transition');      
		});          
	</script>
	
	<!-- Google Map -->
	<script>
	  var marker;
	  var image = '<?php echo get_template_directory_uri();?>/images/map-marker.png';
      function initMap() {
        var myLatLng = {lat: 39.79, lng: -86.14};

		// Specify features and elements to define styles.
        var styleArray = [
          {
            featureType: "all",
            stylers: [
             { saturation: -80 }
            ]
          },{
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              { hue: "#000000" },
              { saturation: 50 }
            ]
          },{
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ];
		
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
		   // Apply the map style array to the map.
          styles: styleArray,
          zoom: 7
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
          map: map
        });

		// Create a marker and set its position.
        marker = new google.maps.Marker({
          map: map,
		  icon: image,
		  draggable: true,
          animation: google.maps.Animation.DROP,
          position: myLatLng
        });
		marker.addListener('click', toggleBounce);
      }
	  
	  function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-testimonials").owlCarousel({
        autoPlay: 3000,
        items : 1,
		itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,2],
		navigation: false,
      });
    });
    </script>
	
</div>
<?php wp_footer(); ?>
</body></html>