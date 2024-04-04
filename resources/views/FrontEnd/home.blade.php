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
<!-- <link rel="stylesheet" href="css/styleRTL.css"> -->
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
				<!-- <img src="{{ asset('images/banner-02.jpg') }}"  alt=""> -->
                <div class="video-banner">
                <video autoplay muted loop controls >
                     <source src="{{ asset('videos/videobanner1.mp4') }}" type="video/mp4">
                </video>
                </div>

				<div class="caption title sfb" data-x="center" data-y="195" data-speed="400" data-start="800"  data-easing="easeOutExpo">
					<h2>عطاءات لتصميم الديكور الداخلي </h2>
				</div>

				<div class="caption text align-center sfb" data-x="center" data-y="270" data-speed="400" data-start="1200" data-easing="easeOutExpo">
					<p>مرحبًا بك في مستقبل تصميم الديكور الداخلي، منصة مبتكرة تحول الصناعة في قطر <br>نحن نقدم بكل فخر منصة
المناقصات لتصميم الديكور الداخلي</p>
				</div>

				<div class="caption sfb" data-x="center" data-y="400" data-speed="400" data-start="1600" data-easing="easeOutExpo">
					<a href="dashboard-add-job.html" class="slider-button">عميل</a>
					<a href="browse-jobs.html" class="slider-button">شركة</a>
				</div>
			</li>

		</ul>
	</div>
</div>



<!-- Content
================================================== -->

<div class="container" id="target">
	<!-- tabs  عن عطءات
================================================== -->
<!-- Info Banner -->
<div class="section-background top-0" >
<div class="container">
	<div class="sixteen columns" id="section1">

		<div class="info-banner">
			<div class="info-content" >
				<h3 style="  text-align: center;">عن عطءات</h3>
				<p>موقع وتطبيق خاص في مجال عطاءات تصميم الديكور الداخلي في دولة قطر، ملتزمة بتقديم حلول للتواصل مع شركات تصميم الديكور الداخلي التجارية والسكنية</p>

			</div>
			<a href="#" class="button fa fa-plus-circle"> إقرأ المزيد عنا</a>
			<div class="clearfix"></div>
		</div>

	</div>

</div>
</div>

<!-- Icon Boxes -->
<div class="section-background top-0" id="target1">
	<div class="container" >
		<h1 style="text-align: center;" > مجال عملنا </h1>
		<p style="text-align: center;"> فريق متعدد التخصصات مع مهارات ومؤهلات عالية </p>
		<div class="one-third column">
			<div class="icon-box rounded alt">
				<i class="ln ln-icon-University"></i>
				<h4>شركات التصاميم</h4>
				<p>مناقصات هي أكثر حلول المناقصات فعالية في السوق. انضم إلى منصة المناقصات بدون رسوم الآن</p>
			</div>
		</div>

		<div class="one-third column">
			<div class="icon-box rounded alt">
				<i class="ln ln-icon-Search-onCloud"></i>
				<h4>مكتب من التصاميم</h4>
				<p>حلول للتواصل مع شركات تصميم الديكور الداخلي التجارية والسكنية و إجاد أفضل التصاميم</p>
			</div>
		</div>

		<div class="one-third column">
			<div class="icon-box rounded alt">
				<i class="ln ln-icon-Business-ManWoman"></i>
				<h4>مالك المشروع</h4>
				<p>الإستفادة من قاعدة البيانات الكبيرة الخاصة بنا لشركات التصميم الذين يقدمون عطاءات على مشروعك وأكثر</p>
			</div>
		</div>

	</div>
</div>
<!-- Icon Boxes / End -->
<!-- Counters -->
<div class="section-background top-0" id="target2">
<div id="counters">

	<div class="container">
		<div class="four columns">
			<div class="counter-box">
				<span class="counter">15</span><i>k</i>
				<p>قيمة المشروعات</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">4982</span>
				<p>عدد التصميمات</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">768</span>
				<p>عدد المشاريع</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">90</span><i>%</i>
				<p>نسبة الرضا</p>
			</div>
		</div>

	</div>
</div>
</div>



</div>
<!-- Slider
================================================== -->
<h1 style="text-align: center;" > تصاميمنا</h1>
		<p style="text-align: center;"> تصميم مميز حسب متطلبات و ذوق كل عميل </p>
<div class="fullwidthbanner-container">
	<div class="fullwidthbanner">
		<ul>

			<!-- Slide 1 -->
			<li data-fstransition="fade" data-transition="fade" data-slotamount="10" data-masterspeed="300">

				<img src="{{ asset('images/view1.jpg') }}" alt="" >

			</li>

			<!-- Slide 2 -->
			<li data-transition="slideup" data-slotamount="10" data-masterspeed="800">
				<img src="{{ asset('images/view2.jpg') }}" alt="">
			</li>

			<!-- Slide 3 -->
			<li data-transition="slideup" data-slotamount="10" data-masterspeed="800">
				<img src="{{ asset('images/view3.jpg') }}" alt="">
			</li>

			<!-- Slide 4 -->
			<li data-transition="slideup" data-slotamount="10" data-masterspeed="800">
				<img src="{{ asset('images/view4.jpg') }}" alt="">
			</li>
		</ul>
	</div>
</div>

<section class="fullwidth-testimonial margin-top-15">

	<!-- Info Section -->
	<div class="container">
		<div class="sixteen columns">
			<h3 class="headline centered">
			شهادة العملاء 😍
				<span class="margin-top-25">سماع ما يزيد عن 44 لرضاء العملاء عنا</span>
			</h3>
		</div>
	</div>
	<!-- Info Section / End -->

	<!-- Testimonials Carousel -->
	<div class="fullwidth-carousel-container margin-top-20">
		<div class="testimonial-carousel testimonials">

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">عطاءات شركة ممتازة من حيث ضمان حقوق الجميع وحسن اختيار المقاولين وسرعة في الانجاز</div>
				</div>
				<div class="testimonial-author">
					<img src="images/resumes-list-avatar-03.png" alt="">
					<h4>يونس <span>صاحب مشروع</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">يعطيكم العافيه بدايه قويه ومجهود واضح ونتمنى استمراركم لحماية المواطن ونجاح مشروعه</div>
				</div>
				<div class="testimonial-author">
					<img src="images/resumes-list-avatar-02.png" alt="">
					<h4>محمد الباكر <span>صاحب مشروع</span></h4>
				</div>
			</div>

			<!-- Item -->
			<div class="fw-carousel-review">
				<div class="testimonial-box">
					<div class="testimonial">اللسان يعجز عن الشكر ،، من حسن التعامل والاهتمام خدماتكم</div>
				</div>
				<div class="testimonial-author">
					<img src="images/resumes-list-avatar-01.png" alt="">
					<h4>د.هناء سعيد <span>صاحب مشروع</span></h4>
				</div>
			</div>

		</div>
	</div>
	<!-- Testimonials Carousel / End -->

</section>




<!-- Footer
================================================== -->
<div class="margin-top-55" id="target4"></div>

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

