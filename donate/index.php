<?php require "../db.php"; ?>
<?php require '../config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>ESMU - Донати</title>
	
	<!-- styles -->
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../animate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" integrity="sha512-fxF1t7b0mpb/ytjBeSu/OpgXxCVcX5/O8AJGYvHaWmNfi/lYLtttitFK17K4iKBva4iU9dcZ+BIV7dyD/nDdSw==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="../Gilroy/stylesheet.css">
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
	</div>
	LOADER END -->
	
	<?php require '../plugins.php'; ?>

	<div class="menu-fixed2">
	<div class="menu-fixed-main-cont2">
			<?php require '../header/header.php'; ?>
		</div>

		<div class="hide-bg-breadcrumbs"></div>
		<div class="menu-header-main">
			<div class="bread-cr-link">
				<p> <a href="/index.php"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span><?php echo $lang['back']; ?> </a></p>
			</div>
			<span class="main-page-support">
				<div class="lang"><?php echo $lang['lang']; ?>
					<span class="lang-list">
				        <?php require '../chlang.php'; ?>	
				    </span>
			    </div>
			    <form class="main_web_search">
			    	<?php echo '<input type="" name="" placeholder="'; echo $lang['search_key']; echo '" required="required">'; ?>
			    	<button type="submit"><i class="fa fa-search" aria-hidden="true" style="font-size: 12px; margin-right: 4px;"></i><?php echo $lang['search']; ?></button>
			    </form>
			</span>
			<div class="scrollBar2"></div>
		</div>
	</div>

	<div class="container">
		<div class="container-center">
			<div class="top-container"></div>
			<div class="block-content-container-center">
				<div class="right-around-scroll">
					<svg viewBox="-39 -39 578 578" data-aos="fade-down-left" data-aos-duration="3000">
						<path d="
							M 250, 250
							m -250, 0
							a 250,250 0 1,0 500,0
							a 250,250 0 1,0 -500,0
						" fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • <?php echo $lang['ctitle']; ?> • <?php echo $lang['ctitle']; ?> • <?php echo $lang['ctitle']; ?> • <?php echo $lang['ctitle']; ?> • <?php echo $lang['ctitle']; ?> • <?php echo $lang['ctitle']; ?></textPath></text>)</svg>
				</div>
				<div class="donate-form">
					<div class='title-donate'>
						<label><?php echo $lang['donate']['title']['label']; ?></label>
						<h1><?php echo $lang['donate']['title']['h1']; ?></h1>
					</div>
			
					<!--<div class="line-donate">
						<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe frameborder="0" height="93px" name="donorbox" scrolling="no" seamless="seamless" src="https://donorbox.org/embed/esmu?donation_meter_color=%2341a2d8&amp;only_donation_meter=true" style="max-width:500px; min-width:250px; max-height:none!important" width="100%"></iframe>
					</div>-->

					<div class="main-donate-form-block">
						<div class="donbl">
							<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe allowpaymentrequest="" frameborder="0" height="900px" name="donorbox" scrolling="no" seamless="seamless" src="https://donorbox.org/embed/esmu?default_interval=m&hide_donation_meter=true" style="max-width: 500px; min-width: 250px; max-height:none!important" width="100%"></iframe>
							<div class="list-donateform">
								<label><b>усі донати будуть використані на</b></label>
								<ul>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus</li>
									<li>sequi sit dolor aut debitis incidunt eveniet vero cum repellendus esse, officiis at modi magni</li>
									<li>ratione nesciunt voluptates perspiciatis? Quaerat, dolorum.</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus</li>
									<li>sequi sit dolor aut debitis incidunt eveniet vero cum repellendus esse, officiis at modi magni</li>
									<li>ratione nesciunt voluptates perspiciatis? Quaerat, dolorum.</li>
									<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus</li>
									<li>sequi sit dolor aut debitis incidunt eveniet vero cum repellendus esse, officiis at modi magni</li>
									<li>ratione nesciunt voluptates perspiciatis? Quaerat, dolorum.</li>
								</ul>
							</div>
						</div>
						<div class="descrdonbl">
							<svg width="402" class="svg-descrdonbl" height="465" viewBox="0 0 402 465" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M312.588 99.4567C280.939 76.8015 267.307 47.2821 262.5 23.2545V-3H260.421C260.562 -5.58375 260.815 -7.93077 261.148 -10L234.123 -3H-4V58.6779L-41 68.2616L-4 91.2637V362.404L-52 389.616L-4 400.953V466H262.5V463.9L267.159 465C263.466 444.089 269.163 393.728 321.495 359.567C322.484 358.922 323.432 358.259 324.342 357.578C370.361 334.782 402 287.336 402 232.5C402 175.57 367.897 126.604 319.005 104.918C317.102 102.985 314.968 101.16 312.588 99.4567Z" fill="red"/>
							</svg>
							<div class="photodescrdon"><div class="decphotodescrdon"><div class="cdecphotodescrdon">

								<div class="ccdecphotodescrdon"></div>
								<svg viewBox="-39 -39 578 578" data-aos="fade-down-left" data-aos-duration="3000">
									<path d="
										M 250, 250
										m -250, 0
										a 250,250 0 1,0 500,0
										a 250,250 0 1,0 -500,0
									" fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • <?php echo $lang['logo']['logo']; ?> • <?php echo $lang['logo']['logo']; ?> • <?php echo $lang['logo']['logo']; ?></textPath></text>)</svg>
							</div></div></div>
							<p><b>ЕСМУ — це неприбуткова організація,</b> це означає, що ми не отримуємо ніяких фінансових інтересів від наших проектів. Ось чому ми завжди шукаємо організації та компанії, з якими ми могли співпрацювати. Якщо ви зацікавлені у <b>співпраці з ЕСМУ</b> та вдосконаленні інформаційної доступності в маленьких містах, напишіть нам електронною поштою</p>
							<div class="linksdescrdonbl"><a href="mail"><span>зв'язатися</span></a></div>
							<div>
								<script src="https://donorbox.org/widget.js" paypalExpress="false"></script><iframe frameborder="0" name="donorbox" scrolling="no" seamless="seamless" src="https://donorbox.org/embed/esmu?only_donor_wall=true" style="width: 100%; max-width:500px; min-width:310px; max-height: none !important"></iframe>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

	<?php require "../footer.php"; ?>


<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
<script>
  AOS.init();
</script>

</body>
</html>