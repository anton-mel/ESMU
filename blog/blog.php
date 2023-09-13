<?php require 'config.php'; ?>
<?php require "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>ESMU - Блог</title>
	
	<!-- styles -->
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" integrity="sha512-fxF1t7b0mpb/ytjBeSu/OpgXxCVcX5/O8AJGYvHaWmNfi/lYLtttitFK17K4iKBva4iU9dcZ+BIV7dyD/nDdSw==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="Gilroy/stylesheet.css">
</head>
<body class="bgcolor">
	<div class="works-page">
		UPPS... IN DEVELOPING
	</div>
	<!-- LOADER
	<div class="screen-load" id="loader-wrapper" style="z-index: 9999999999999999999999999 !important;">
		<div class="banter-loader" id="loader" style="z-index: 9999999999999999999999999 !important;">
		  <div class="banter-loader__box"></div>
		  <div class="banter-loader__box"></div>
		  <div class="banter-loader__box"></div>
		  <div class="banter-loader__box"></div>
		  <div class="banter-loader__box"></div>
		  <div class="banter-loader__box"></div>
		  <div class="banter-loader__box"></div>
		  <div class="banter-loader__box"></div>
		  <div class="banter-loader__box"></div>
		</div>
	</div>
	LOADER END -->
	
	<?php require 'plugins.php'; ?>

	<span class="decor-but">
		<div class="button-main-slide"></div>
		<div class="button-main-slide"></div>
	</span>

	<div class="menu-fixed">
		<div class="menu-fixed-main-cont2">
			<?php require 'header.php'; ?>
			<div class="right-side-menu-fixed">
				<!-- <form><select id="select-lang"><option><li><b>UK</b> Ukrainian</li></option><li><option><b>ENG</b> English</li></option></select><label for="select-lang"></label></form> -->
				<div class="menu-phone">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class="hide-bg-breadcrumbs"></div>
		<div class="menu-header-main">
			<div class="bread-cr-link">
				<p> <a href="/index.php"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span>home </a></p>
			</div>
			<span class="main-page-support">
				<div class="lang">languages</div>
				<div>розсилка</div>
			</span>
			<div class="scrollBar2"></div>
		</div>
	</div>

	<div class="container">
		<div class="container-center">
			<div class="top-container"></div>
			<div class="block-content-container-center">
				<div class="right-around-scroll">
					<svg viewBox="-39 -39 578 578"><path d="
			        M 250, 250
			        m -250, 0
			        a 250,250 0 1,0 500,0
			        a 250,250 0 1,0 -500,0
			      " fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • about us • about us • about us • about us • about us • about us </textPath></text>)</svg>
				</div>
				<div class="scroll-block-content-container-center">
				
					<div class="title-scroll-block-content-container-center">
						<p>
							наший
						</p>
						<h1>блог</h1>
					</div>
					<form method="POST" action="/blog.php" class="filterblog">
						<label>фільтрувати за: </label>
						<select>
							<option>всі категорії</option>
							<option>креатив</option>
							<option>боти</option>
							<option>фективалі</option>
							<option>інтерв'ю</option>
						</select>
					</form>
					<section class="blocks-blog-container">
						
						<a href="/blogpage.php" class="block-blog-container">
							<div class="photo-block-blog-container">
							</div>
							<div class="desc-block-blog-container">
								<div class="data-time-desc-blog-container">
									15/12/2020
								</div>
								<div class="data-text-desc-blog-container">
									<h4>category</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div>
							</div>
						</a>
						<a href="/blogpage.php" class="block-blog-container">
							<div class="photo-block-blog-container">
							</div>
							<div class="desc-block-blog-container">
								<div class="data-time-desc-blog-container">
									15/12/2020
								</div>
								<div class="data-text-desc-blog-container">
									<h4>category</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div>
							</div>
						</a>
						<a href="/blogpage.php" class="block-blog-container">
							<div class="photo-block-blog-container">
							</div>
							<div class="desc-block-blog-container">
								<div class="data-time-desc-blog-container">
									15/12/2020
								</div>
								<div class="data-text-desc-blog-container">
									<h4>category</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div>
							</div>
						</a>
						<a href="/blogpage.php" class="block-blog-container">
							<div class="photo-block-blog-container">
							</div>
							<div class="desc-block-blog-container">
								<div class="data-time-desc-blog-container">
									15/12/2020
								</div>
								<div class="data-text-desc-blog-container">
									<h4>category</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div>
							</div>
						</a>
						<a href="/blogpage.php" class="block-blog-container">
							<div class="photo-block-blog-container">
							</div>
							<div class="desc-block-blog-container">
								<div class="data-time-desc-blog-container">
									15/12/2020
								</div>
								<div class="data-text-desc-blog-container">
									<h4>category</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div>
							</div>
						</a>
						<a href="/blogpage.php" class="block-blog-container">
							<div class="photo-block-blog-container">
							</div>
							<div class="desc-block-blog-container">
								<div class="data-time-desc-blog-container">
									15/12/2020
								</div>
								<div class="data-text-desc-blog-container">
									<h4>category</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div>
							</div>
						</a>

					</section>
					
				</div>
			</div>
		</div>
	</div>

	<?php require "footer.php"; ?>




	<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="/paginathing-master/paginathing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.blocks-projects-container').paginathing({
    		  perPage: 4,
    		  firstText: 'ПЕРШЕ',
    		  lastText: 'ОСТАННЄ',
    		  disabledClass: 'pag-disabled',
    		  liClass: 'pag-li',
    		  activeClass: 'pag-active',
    		  containerClass: 'pag-container', // extend default container class
			  ulClass: 'pag-ul',
			  limitPagination: false,
			  prevText: '<i class="fa fa-caret-left" aria-hidden="true"></i>', // Previous button text
			  nextText: '<i class="fa fa-caret-right" aria-hidden="true"></i>', // Next button text
			  prevNext: true, // enable previous and next button
			  firstLast: false, // enable first and last button
	});
});
</script>

</body>
</html>