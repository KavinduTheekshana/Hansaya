<!doctype html>


<html lang="en" class="no-js">

<head>
	<title>Sinhala Hansaya</title>

	<meta charset="utf-8">

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/logo-fold.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/studiare-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/font-awesome/font-awesome.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/fonts/elegant-icons/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/fonts/iconfont/material-icons.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style.css">





	<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<link href="css/animtrap.css" rel="stylesheet">











</head>

<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">

			<!-- <div class="top-line">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<p><i class="material-icons">phone</i> <span>+01 2334 853</span></p>
							<p><i class="material-icons">email</i> <span>email@mycourse.com</span></p>
						</div>
						<div class="col-lg-6">
							<div class="right-top-line">
								<ul class="top-menu">
									<li><a href="#">Purchase Now</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="blog.html">News</a></li>
								</ul>
								<button class="search-icon">
									<i class="material-icons open-search">search</i> 
									<i class="material-icons close-search">close</i>
								</button>
								<button class="shop-icon">
									<i class="material-icons">shopping_cart</i>
									<span class="studiare-cart-number">0</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div> -->

			<!-- <form class="search_bar">
				<div class="container">
					<input type="search" class="search-input" placeholder="What are you looking for...">
					<button type="submit" class="submit">
						<i class="material-icons">search</i>
					</button>
				</div>
			</form> -->

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">

					<a class="navbar-brand" href="/">
						<img src="images/logo.png" height="50px" alt="">
					</a>

					<a href="#" class="mobile-nav-toggle">
						<span></span>
					</a>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="drop-link">
								<a class="{{$activehome}}" href="/">මුල් පිටුව</a>
							</li>







							<li><a class="{{$activecourse}}" href="courses">අපගේ පඨමාලා</a></li>
							<!-- <li><a href="events.html">තොරතුරු</a></li>
							<li><a href="events.html">ලිපි</a></li> -->
							<li><a class="{{$activeabout}}" href="about">අප ගැන</a></li>
							<li><a class="{{$activecontact}}" href="contact">සම්බන්ද වන්න</a></li>
						</ul>
						<a href="login" class="register-modal-opener login-button"><i class="material-icons">perm_identity</i> ඇතුලු වන්න</a>
					</div>
				</div>
			</nav>

			<div class="mobile-menu">


				<nav class="mobile-nav">
					<ul class="mobile-menu-list">
						<li>
							<a href="/">මුල් පිටුව</a>
						</li>


						<li>
							<a href="courses">අපගේ පඨමාලා</a>
						</li>
						<li>
							<a href="about">අප ගැන</a>
						</li>
						<li>
							<a href="contact">සම්බන්ද වන්න</a>
						</li>

						<li>
							<a href="login">ඇතුලු වන්න</a>
						</li>
					</ul>
				</nav>
			</div>

		</header>
		<!-- End Header -->


		@yield('content')



		<!-- footer 
			================================================== -->
		<footer>
			<div class="container" data-animscroll="fade-up">

				<div class="up-footer">
					<div class="row">

						<div class="col-lg-4 col-md-6" data-animscroll="fade-up">
							<div class="footer-widget text-widget">
								<a href="index.html" class="footer-logo"><img src="images/logo.png" height="50px" alt=""></a>
								<p>අපි අපගේ තේමාවට සිංහල හන්සයා යන නම තැබුවේ.</p>
								<ul>
									<li>
										<div class="contact-info-icon">
											<i class="fa fa-envelope-o"></i>
										</div>
										<div class="contact-info-value">contact@sinhalahansaya.lk</div>
									</li>
									<li>
										<div class="contact-info-icon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="contact-info-value">+94 71 711 8982</div>
									</li>
									<li>
										<div class="contact-info-icon">
											<i class="fa fa-whatsapp"></i>
										</div>
										<div class="contact-info-value">+94 77 690 2811</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6" data-animscroll="fade-up">
							<div class="footer-widget quick-widget">
								<h2>මෙනුව</h2>
								<ul class="quick-list">
									<li><a href="/">මුල් පිටුව</a></li>
									<li><a href="courses">අපගේ පඨමාලා</a></li>
									<li><a href="about">අප ගැන</a></li>
									<li><a href="contact">සම්බන්ද වන්න</a></li>

								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-6" data-animscroll="fade-up">
							<div class="footer-widget subscribe-widget">
								<h2>අපගේ සිසුන් හා එක්වන්න</h2>
								<p>ජීවිතයේ සොඳුරු සිත්තම් මවනා දෙහෝරාවක ආත්ම සමාධිය
									හා
									සතතාභ්‍යාසය වීමට දොරගුළු විවර කරමු.</p>
								<div class="newsletter-form">
									<input class="form-control" type="email" name="EMAIL" placeholder="ඔබේ විද්යුත් තැපැල් ලිපිනය" required="">
									<input type="submit" value="Subscribe">
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>

			<div class="footer-copyright copyrights-layout-default">
				<div class="container">
					<div class="copyright-inner">
						<div class="copyright-cell"> &copy; 2020 <span class="highlight">CreatX Software</span>. Created by Kavindu Theekshana. 071 542 14 23</div>
						<div class="copyright-cell">
							<ul class="studiare-social-links">
								<li><a href="https://www.facebook.com/kavindu.theekshana.9" class="facebook"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="https://twitter.com/KavinduTheeksha" class="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/in/kavindutheekshana" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->


	<script src="js/studiare-plugins.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!-- <script src="js/gmap3.min.js"></script> -->
	<script src="js/script.js"></script>

	<script>
		var tpj = jQuery;
		var revapi202;
		tpj(document).ready(function() {
			if (tpj("#rev_slider_202_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_202_1");
			} else {
				revapi202 = tpj("#rev_slider_202_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "js/",
					dottedOverlay: "none",
					delay: 5000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						onHoverStop: "off",
						arrows: {
							enable: true,
							style: 'gyges',
							left: {
								container: 'slider',
								h_align: 'left',
								v_align: 'center',
								h_offset: 20,
								v_offset: -60
							},

							right: {
								container: 'slider',
								h_align: 'right',
								v_align: 'center',
								h_offset: 20,
								v_offset: -60
							}
						},
						touch: {
							touchenabled: "on",
							swipe_threshold: 75,
							swipe_min_touches: 50,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						bullets: {

							enable: false,
							style: 'persephone',
							tmp: '',
							direction: 'horizontal',
							rtl: false,

							container: 'slider',
							h_align: 'center',
							v_align: 'bottom',
							h_offset: 0,
							v_offset: 55,
							space: 7,

							hide_onleave: false,
							hide_onmobile: false,
							hide_under: 0,
							hide_over: 9999,
							hide_delay: 200,
							hide_delay_mobile: 1200
						}
					},
					responsiveLevels: [1210, 1024, 778, 480],
					visibilityLevels: [1210, 1024, 778, 480],
					gridwidth: [1210, 1024, 778, 480],
					gridheight: [700, 700, 600, 600],
					lazyType: "none",
					parallax: {
						type: "scroll",
						origo: "slidercenter",
						speed: 1000,
						levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
						type: "scroll",
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					fullScreenAutoWidth: "off",
					fullScreenAlignForce: "off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "0px",
					disableProgressBar: "on",
					hideThumbsOnMobile: "off",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: false,
					}
				});
			}
		}); /*ready*/
	</script>

	<script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="js/studiare-plugins.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="js/anim-trap.js"></script>
	<script src="js/anim-scroll.js"></script>


	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcuvYDk04jY_H-o_EIcdr8vQi3Mz0eWnc&callback=initMap&libraries=&v=weekly" defer></script>

	<script>
		// Initialize and add the map
		function initMap() {
			// The location of Uluru
			const uluru = {
				lat: 6.1476,
				lng: 80.7634
			};
			// The map, centered at Uluru
			const map = new google.maps.Map(document.getElementById("map"), {
				zoom: 15,
				center: uluru,
			});
			// The marker, positioned at Uluru
			const marker = new google.maps.Marker({
				position: uluru,
				map: map,
			});
		}
	</script>

	<script>
		ANIMSCROLL.init({
			easing: 'ease-in-out-sine'
		});

		$(document).ready(function() {
			$('.rain').makeitsRain()
		});
	</script>

</body>

</html>