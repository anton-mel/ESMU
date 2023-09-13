<?php require "db.php"; ?>
<?php require 'config.php'; ?>
<?php 
	
	$array_lang2 = array('?lang=ua','?lang=en');
	$id_project = str_replace($array_lang2, '', $_GET['id']);
	$sql_get_project = "SELECT * FROM `projects` WHERE `id` = $id_project";
	$result_get_project = mysqli_fetch_array(mysqli_query($db, $sql_get_project));

	require 'views_set.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>ESMU - <?php echo $result_get_project['title']; ?></title>
	
	<!-- styles -->
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" integrity="sha512-fxF1t7b0mpb/ytjBeSu/OpgXxCVcX5/O8AJGYvHaWmNfi/lYLtttitFK17K4iKBva4iU9dcZ+BIV7dyD/nDdSw==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="Gilroy/stylesheet.css">
</head>
<body class="bgcolor">
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
	</div>-->

	<?php require 'plugins.php'; ?>

	<div class="menu-fixed2">
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
				<div class="lang"><?php echo $lang['lang']; ?></div>
				<span class="lang-list">
					<?php require 'chlang.php'; ?>	  
			    </span>
				<div><?php echo $lang['index']['body_menu']['mail_send']; ?></div>
			</span>
			<div class="scrollBar2"></div>
		</div>
	</div>

	<div class="container">
		<div class="container-center">
			<div class="top-container"></div>
			<div class="block-content-container-center">
				<div class="right-around-scroll4">
					<svg viewBox="-39 -39 578 578"><path d="
			        M 250, 250
			        m -250, 0
			        a 250,250 0 1,0 500,0
			        a 250,250 0 1,0 -500,0
			      " fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • project • project • project • project • project • project </textPath></text>)</svg>
				</div>
				<div class="scroll-block-content-container-center">
				
					<div class="title-scroll-block-content-container-center">
						<p>
							перегляньте проєкт
						</p>
						<h1><?php echo $result_get_project['title']; ?></h1>
					</div>
					<section class="project-scroll-block-content-container-center">
						<p class="project-text-container-g"><?php echo $result_get_project['descr']; ?></p>
						<div class="slider-about">
							<div class="photo-slider-about2">
								<span class="galery_but_sl"><?php echo $lang['about']['slider']['button_gallery']; ?></span>
								<div class="p-photo-slider-about1 p-photo-slider-about" style="background: url(img/slider1.jpg); background-size: cover; background-position: center;"></div>
								<div class="p-photo-slider-about2 p-photo-slider-about" style="background: url(img/slider2.jpg); background-size: cover; background-position: center;"></div>
								<div class="p-photo-slider-about3 p-photo-slider-about" style="background: url(img/slider3.jpg); background-size: cover; background-position: center;"></div>
								<p>○ ○ ○</p>
							</div>
						</div>
									
						<!-- section 1
						<div class="block-text-project1">
							<div class="left-block-text-project1">
								Lorem ipsum dolor<br> sit amet, consectetur<br> sed do eiusmod
									tempor<br> incididunt ut.
							</div>
							<div class="right-block-text-project1">
								<div class="top-right-block-text-project1">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut 
								</div>
								<div class="bottom-right-block-text-project1">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.<br><br>Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem 
									ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore 
								</div>
							</div>
						</div>

						
						<div class="block-text-project2">
							<div class="left-block-text-project2">
								<div class="title-left-block-text-project2">
									Nature as technology
								</div>
								<div class="top-left-block-text-project2">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut.lorem
								</div>
								<div class="bottom-left-block-text-project2">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,
									quis nostrud exercitation ullamco<br><br> laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem 
									ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
							<div class="right-block-text-project2">
								<div class="photo-right-block-text-project2">
									
								</div>
							</div>
						</div>


						
						<div class="block-text-project3">
							<div class="left-block-text-project3">
								<div class="photo-right-block-text-project3">
									
								</div>
							</div>
							<div class="right-block-text-project3">
								<div class="title-left-block-text-project3">
									Nature as technology
								</div>
								<div class="top-left-block-text-project3">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut.
								</div>
								<div class="bottom-left-block-text-project3">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,
									quis nostrud exercitation ullamco. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>

						
						<div class="block-text-project4">
							<h1>Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit, sed do eiusmod<br>
							tempor incididunt ut labore et<br> dolore magna aliqua.</h1>
						 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
						 	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>

						
						<div class="block-text-project5">
						 	
						</div>

						
						<div class="block-text-project6">
						 	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
						 	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>-->

						<!-- section 7 -->
						<div class="block-text-project7">
						 	<?php echo $result_get_project['writer']; ?>
						</div>

						<div class="end-line-butns-project">
							<div class="amountclickproject">
								<?php echo $views[0]; ?> переглядів
							</div>
							<div class="right-end-line-butns-project">
								<div class="backtoprojects">
									ВСІ ПРОЄКТИ
								</div>
								<div class="donatetoproject">
									ПІДТРИМАТИ
								</div>
							</div>
						</div>

					</section>
					
				</div>
			</div>
		</div>
	</div>

	
	<!-- footer ------------------------------------------------------------- footer -->
	<?php require "footer.php"; ?>


	<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
  $times=0;
  setInterval(function(){
 	init_scroller_about();
  },10000);

function init_scroller_about(){
    if($times==0){
	    $(".p-photo-slider-about3").css({
		  "transform":"translateX(100%)",
		  "z-index":"0"
		});
		$(".p-photo-slider-about1").css({
		  "transform":"translateX(-100%)",
		  "z-index":"2"
		});
		$(".p-photo-slider-about2").css({
		  "z-index":"5",
		  "transform":"translateX(0%)"
		});	
		$times++;
	}else if($times==1){
		$(".p-photo-slider-about3").css({
		  "transform":"translateX(0%)",
		  "z-index":"5"
		});
		$(".p-photo-slider-about1").css({
		  "transform":"translateX(100%)",
		  "z-index":"0"
		});
		$(".p-photo-slider-about2").css({
		  "z-index":"2",
		  "transform":"translateX(-100%)"
		});
		$times++;
	}else if($times==2){
		$(".p-photo-slider-about3").css({
		  "transform":"translateX(-100%)",
		  "z-index":"2"
		});
		$(".p-photo-slider-about1").css({
		  "transform":"translateX(0%)",
		  "z-index":"5"
		});
		$(".p-photo-slider-about2").css({
		  "z-index":"0",
		  "transform":"translateX(100%)"
		});
		$times=0;
	}
}
</script>
</body>
</html>