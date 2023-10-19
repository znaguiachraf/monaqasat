<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors.css">



</head>

<body>
<div id="wrapper">


<!-- Header
================================================== -->
 @include('FrontEnd.header')
<div class="clearfix"></div>



<!-- Slider
================================================== -->
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<ul>

			<!-- Slide 1 -->
			<li data-fstransition="fade" data-transition="fade" data-slotamount="10" data-masterspeed="300">
				<img src="images/banner-02.jpg" alt="">

				<div class="caption title sfb" data-x="center" data-y="195" data-speed="400" data-start="800"  data-easing="easeOutExpo">
					<h2>Hire great hourly employees</h2>
				</div>

				<div class="caption text align-center sfb" data-x="center" data-y="270" data-speed="400" data-start="1200" data-easing="easeOutExpo">
					<p>Work Scout is most trusted job board, connecting the world's <br> brightest minds with resume database loaded with talents.</p>
				</div>

				<div class="caption sfb" data-x="center" data-y="400" data-speed="400" data-start="1600" data-easing="easeOutExpo">
					<a href="dashboard-add-job.html" class="slider-button">Hire</a>
					<a href="browse-jobs.html" class="slider-button">Work</a>
				</div>
			</li>

		</ul>
	</div>
</div>



<!-- Content
================================================== -->

<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">Recent Jobs</h3>
		<div class="listings-container">
			
			<!-- Listing -->
			<a href="job-page-alt.html" class="listing full-time">
				<div class="listing-logo">
					<img src="images/job-list-logo-01.png" alt="">
				</div>
				<div class="listing-title">
					<h4>Marketing Coordinator - SEO / SEM Experience <span class="listing-type">Full-Time</span></h4>
					<ul class="listing-icons">
						<li><i class="ln ln-icon-Management"></i> King</li>
						<li><i class="ln ln-icon-Map2"></i> Sydney</li>
						<li><i class="ln ln-icon-Money-2"></i> $5000 - $7000</li>
						<li><div class="listing-date new">new</div></li>
					</ul>
				</div>
			</a>
			
			<!-- Listing -->
			<a href="job-page.html" class="listing part-time">
				<div class="listing-logo">
					<img src="images/job-list-logo-02.png" alt="">
				</div>
				<div class="listing-title">
					<h4>Core PHP Developer for Site Maintenance  <span class="listing-type">Part-Time</span></h4>
					<ul class="listing-icons">
						<li><i class="ln ln-icon-Management"></i> Cubico</li>
						<li><i class="ln ln-icon-Map2"></i> Sydney</li>
						<li><i class="ln ln-icon-Money-2"></i> $125 / hour</li>
						<li><div class="listing-date">3d ago</div></li>
					</ul>
				</div>
			</a>

			<!-- Listing -->
			<a href="job-page-alt.html" class="listing full-time">
				<div class="listing-logo">
					<img src="images/job-list-logo-01.png" alt="">
				</div>
				<div class="listing-title">
					<h4>Restaurant Team Member - Crew  <span class="listing-type">Full-Time</span></h4>
					<ul class="listing-icons">
						<li><i class="ln ln-icon-Management"></i> King</li>
						<li><i class="ln ln-icon-Map2"></i> Sydney</li>
						<li><div class="listing-date">3d ago</div></li>
					</ul>
				</div>
			</a>

			<!-- Listing -->
			<a href="job-page.html" class="listing internship">
				<div class="listing-logo">
					<img src="images/job-list-logo-04.png" alt="">
				</div>
				<div class="listing-title">
					<h4>Power Systems User Experience Designer <span class="listing-type">Internship</span></h4>
					<ul class="listing-icons">
						<li><i class="ln ln-icon-Management"></i> Hexagon</li>
						<li><i class="ln ln-icon-Map2"></i> London</li>
						<li><i class="ln ln-icon-Money-2"></i> $55 / hour</li>
						<li><div class="listing-date">4d ago</div></li>
					</ul>
				</div>
			</a>

			<!-- Listing -->
			<a href="job-page.html" class="listing freelance">
				<div class="listing-logo">
					<img src="images/job-list-logo-05.png" alt="">
				</div>
				<div class="listing-title">
					<h4>iPhone / Android Music App Development  <span class="listing-type">Freelance</span></h4>
					<ul class="listing-icons">
						<li><i class="ln ln-icon-Management"></i> Hexagon</li>
						<li><i class="ln ln-icon-Map2"></i> London</li>
						<li><i class="ln ln-icon-Money-2"></i> $85 / hour</li>
						<li><div class="listing-date">4d ago</div></li>
					</ul>
				</div>
			</a>
		</div>

		<a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">Job Spotlight</h3>

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>
		
		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">

					<ul>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Social Media: Advertising Coordinator <span class="part-time">Part-Time</span></h4></a>
								<span><i class="fa fa-briefcase"></i> Mates</span>
								<span><i class="fa fa-map-marker"></i> New York</span>
								<span><i class="fa fa-money"></i> $20 / hour</span>
								<p>As advertising & content coordinator, you will support our social media team in producing high quality social content for a range of media channels.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Prestashop / WooCommerce Product Listing <span class="freelance">Freelance</span></h4></a>
								<span><i class="fa fa-briefcase"></i> King</span>
								<span><i class="fa fa-map-marker"></i> London</span>
								<span><i class="fa fa-money"></i> $25 / hour</span>
								<p>Etiam suscipit tellus ante, sit amet hendrerit magna varius in. Pellentesque lorem quis enim venenatis pellentesque.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Logo Design <span class="freelance">Freelance</span></h4></a>
								<span><i class="fa fa-briefcase"></i> Hexagon</span>
								<span><i class="fa fa-map-marker"></i> Sydney</span>
								<span><i class="fa fa-money"></i> $10 / hour</span>
								<p>Proin ligula neque, pretium et ipsum eget, mattis commodo dolor. Etiam tincidunt libero quis commodo.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>


					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
</div>


<!-- Info Banner -->
<div class="container">
	<div class="sixteen columns">

		<div class="info-banner">
			<div class="info-content">
				<h3>Perfect Theme for Your Own Job Board</h3>
				<p>Work Scout is a premium theme that is perfect for recruiters and job offices</p>
			</div>
			<a href="#" class="button">Get This Theme</a>
			<div class="clearfix"></div>
		</div>

	</div>
</div>




<!-- Footer
================================================== -->
<div class="margin-top-55"></div>

 @include('FrontEnd.footer')

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="scripts/jquery-3.6.0.min.js"></script>
<script src="scripts/jquery-migrate-3.3.2.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>
<script src="scripts/slick.min.js"></script>
<script src="scripts/headroom.min.js"></script>






</body>
</html>