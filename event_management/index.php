<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Events Planning  a Wedding Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Planning Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<!-- header -->
			<div class="w3_agile_menu">
				<div class="agileits_w3layouts_nav">
					<div id="toggle_m_nav">
						<div id="m_nav_menu" class="m_nav">
							<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
							<div class="m_nav_ham" id="m_ham_2"></div>
							<div class="m_nav_ham" id="m_ham_3"></div>
						</div>
					</div>
					<div id="m_nav_container" class="m_nav wthree_bg">
						<nav class="menu menu--sebastian">
							<ul id="m_nav_list" class="m_nav menu__list">
								<li class="m_nav_item active" id="m_nav_item_1"> <a href="index.php" class="link link--kumya"><i class="fa fa-home" aria-hidden="true"></i><span data-letters="Home">Home</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_2"> <a href="services.php" class="link link--kumya"><i class="fa fa-cog" aria-hidden="true"></i><span data-letters="Services">Services</span></a></li>
								
								<li class="dropdown m_nav_item"  id="moble_nav_item_7"><a href="#" class="dropdown-toggle link link--kumya" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #333;">Events <span class="caret"></span></a>
						          <ul class="dropdown-menu">
						            <li><a href="wedding/index.php">Wedding</a></li>
						            <li><a href="birthday/index.php">Birthday</a></li>
						            <li><a href="corporate/index.php">Corporate</a></li>
						            <li><a href="reception/index.php">Reception</a></li>
						            <li><a href="termenic/index.php">Termenic Ceremony</a></li>
						          </ul>
						        </li>
								<li class="m_nav_item" id="moble_nav_item_3"> <a href="about.php" class="link link--kumya"><i class="fa fa-info-circle" aria-hidden="true"></i><span data-letters="About Us">About Us</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_4"> <a href="work.php" class="link link--kumya"><i class="fa fa-building-o" aria-hidden="true"></i><span data-letters="Our Work">Our Work</span></a></li>
								<li class="m_nav_item" id="moble_nav_item_6"> <a href="contact.php" class="link link--kumya"><i class="fa fa-envelope-o" aria-hidden="true"></i><span data-letters="Contact Us">Contact Us</span></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="agileits_w3layouts_logo">
					<h1><a href="index.php">Events Planning</a></h1>
				</div>
				<div class="agileinfo_social_icons">
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>	
			<!-- //header -->
			<div class="w3ls_banner_info">
				<section class="slider">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="agileits_w3layouts_banner_info">
						<h3>Let professionals run your event!</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
					</div>
				</li>
				<li>
					<div class="agileits_w3layouts_banner_info">
						<h3>Let professionals run your event!</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
					</div>
				</li>
				<li>
					<div class="agileits_w3layouts_banner_info">
						<h3>Let professionals run your event!</h3>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi </p>
					</div>
				</li>
			</ul>
		</div>
	</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->
			</div>
		</div>
	</div>
<!-- //banner -->


	

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<h3 class="w3layouts_head">Welcome to our <span>Events</span></h3>
			<p class="w3_para">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas 
assumenda est, omnis dolor repellendus.</p>
			<div class="w3ls_banner_bottom_grids">
				
				<?php $sql="SELECT * FROM event WHERE 1";
				$result=mysqli_query($con, $sql);
				if ($result->num_rows) {
					while ($row=mysqli_fetch_assoc($result)) { ?>
					<div class="col-md-4 agileits_banner_bottom_grid_left">
						<div class="agileinfo_banner_bottom_grid_l_grid">
							
							<i <?php if($row['name']=='Wedding'){ ?> class="fa fa-heart-o" aria-hidden="true" <?php }
									elseif($row['name']=='Birthday'){?> class="fa fa-birthday-cake" aria-hidden="true" <?php }
										elseif($row['name']=='Reception'){?> class="fa fa-handshake-o" aria-hidden="true" <?php }
											elseif($row['name']=='Corporate'){?> class="fa fa-snowflake-o" aria-hidden="true" <?php }
												elseif($row['name']=='Termenic Ceremony'){?> class="fa fa-street-view" aria-hidden="true" <?php }


							?> ></i>

						</div>
						<h4><a href="<?php if($row['name']=='Wedding'){ echo 'wedding/index.php'; }
						elseif($row['name']=='Birthday'){ echo 'birthday/index.php'; }
						elseif($row['name']=='Reception'){ echo 'reception/index.php'; }
						elseif($row['name']=='Corporate'){ echo 'corporate/index.php'; }
						elseif($row['name']=='Termenic Ceremony'){ echo 'termenic/index.php'; }
						 ?>"><?php echo $row['name']; ?></a></h4>
						<p><?php echo $row['description']; ?></p>
					</div>
					<?php }
				 } ?>
				
				
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- services -->
	<div class="agile-ser">
		<div class="container">
			<h3 class="w3layouts_head">Our <span>Services</span></h3>
			<p class="w3_para">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas 
assumenda est, omnis dolor repellendus.</p>
				<div class="agile-ser-tp">
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/23.jpg" class="img-responsive" alt="">
						</div>
						<h4>Venue Selection</h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/20.jpg" class="img-responsive" alt="">
						</div>
						<h4>Photography</h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/25.jpg" class="img-responsive" alt="">
						</div>
						<h4>Catering & Food</h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/22.jpg" class="img-responsive" alt="">
						</div>
						<h4>Security Service</h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/26.jpg" class="img-responsive" alt="">
						</div>
						<h4>Decor & Decorations</h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
				
					<div class="col-md-4 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/21.jpg" class="img-responsive" alt="">
						</div>
						<h4>Entertainment & Led Show</h4>
						<p>Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //services -->
<!-- quicklinks -->
	<div class="quicklinks-agile-info">
		<div class="container">
			<h3 class="w3layouts_head">Quick <span>Links</span></h3>
			<p class="w3_para">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
				<div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/1.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6 agile-info-top-right">
						<h4>Birthdays Specials</h4>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Locations</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Catering & Food</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Rentals & Sales</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Supplies & Favors</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Entertainment & Entertainers</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Photographers & Videographers</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Balloons & Flowers</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Decor & Decorations</a></li>

					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-right ece">
							<h4>Wedding Parties</h4>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Wedding & Engagement Rings</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Bridal Gowns</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Wedding Cakes</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Photo & Video</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Wedding Officiants</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Ceremony Locations</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Balloons & Flowers</a></li>
								<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Limos & Transportation</a></li>																
					</div>
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/2.jpg" class="img-responsive" alt="">
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<div class="quicklinks-agile-info-top">
					<div class="col-md-6 agile-info-top-left">
						<div class="w3agile_special_deals_grid_left_grid">
							<img src="images/10.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6 agile-info-top-right">
						<h4>Corporate Events</h4>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Services</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Locations & Venues</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Catering & Food</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Party Rentals & Sales</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Entertainment & Entertainers</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Photographers & Videographers</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Music</a></li>
							<li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Decorations & Centerpieces</a></li>
					</div>																																			
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
<!-- //quicklinks -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<h2><a href="index.php">Events Planning</a></h2>
			<h3>(+000) 123 456 789</h3>
			<form action="#" method="post">
				<input type="email" name="email" placeholder="Your email..." required="">
				<input type="submit" value=" ">
			</form>
			<div class="agileits_w3three_nav">
				<div class="agileits_w3three_nav_left">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="work.php">Our Work</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
				<div class="agileits_w3three_nav_right">
					<ul class="agileits_social_list">
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<p>© 2017 Events Planning. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
<!-- //footer -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- menu -->
	<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>