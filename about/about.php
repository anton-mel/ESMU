<?php require "../db.php"; ?>
<?php require '../config.php'; $ll = $_SESSION['lang']; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>ESMU - <?php echo $lang['menu']['menu_a2']; ?></title>
	
	<!-- styles -->
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="main.css">
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
				<p> <a href="/index.php"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span>на головну </a></p>
			</div>
			<span class="main-page-support">
				<div class="lang"><?php echo $lang['lang']; ?>
					<span class="lang-list">
				        <?php require '../chlang.php'; ?>	
				    </span>
			    </div>
			    <form class="main_web_search">
			    	<input type="" name="" placeholder="Введіть ключове слово..." required="required">
			    	<button type="submit"><i class="fa fa-search" aria-hidden="true" style="font-size: 12px; margin-right: 4px;"></i>ПОШУК</button>
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
					<svg viewBox="-39 -39 578 578"><path d="
			        M 250, 250
			        m -250, 0
			        a 250,250 0 1,0 500,0
			        a 250,250 0 1,0 -500,0
			      " fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • <?php echo $lang['menu']['menu_a2']; ?> • <?php echo $lang['menu']['menu_a2']; ?> • <?php echo $lang['menu']['menu_a2']; ?> • <?php echo $lang['menu']['menu_a2']; ?> • <?php echo $lang['menu']['menu_a2']; ?> • <?php echo $lang['menu']['menu_a2']; ?> </textPath></text>)</svg>
				</div>
				<div class="scroll-block-content-container-center">
				
					<!-- <div class="title-scroll-block-content-container-center">
						<p>
							<?php echo $lang['about']['container_title']['label']; ?>
						</p>
						<h1><?php echo $lang['about']['container_title']['title']; ?></h1>
					</div> -->

					<!--<div class="esmu-values">
						<h1 class="title-esmu-values"><?php echo $lang['about']['container_values']['title']; ?></h1>
						<ul>
							<li><?php echo $lang['about']['container_values']['list'][0]; ?></li>
							<li><?php echo $lang['about']['container_values']['list'][1]; ?></li>
							<li><?php echo $lang['about']['container_values']['list'][2]; ?></li>
							<li><?php echo $lang['about']['container_values']['list'][3]; ?></li>
							<li><?php echo $lang['about']['container_values']['list'][4]; ?></li>
							<li><?php echo $lang['about']['container_values']['list'][5]; ?></li>
							<li><?php echo $lang['about']['container_values']['list'][6]; ?></li>
							<li><?php echo $lang['about']['container_values']['list'][7]; ?></li>
							<li><?php echo $lang['about']['container_values']['list'][8]; ?></li>
							<li><?php echo $lang['about']['container_values']['list'][9]; ?></li>
						</ul>
					</div>-->

					<!--<div class="video-esmu-about">
						<span class="text-bg-abot-anim">#ECO</span>
						<div>
							<h1><?php echo $lang['about']['esmu_org_text']['title']; ?></h1>
							<p><?php echo $lang['about']['esmu_org_text']['text']; ?></p>
						</div>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/ztWHqUFJRTs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						
					</div>

					<div class="slider-about">
						<div class="photo-slider-about">
							<span class="galery_but_sl"><?php echo $lang['about']['slider']['button_gallery']; ?></span>
							<div class="p-photo-slider-about1 p-photo-slider-about" style="background: url(img/slider1.jpg); background-size: cover; background-position: center;"></div>
							<div class="p-photo-slider-about2 p-photo-slider-about" style="background: url(img/slider2.jpg); background-size: cover; background-position: center;"></div>
							<div class="p-photo-slider-about3 p-photo-slider-about" style="background: url(img/slider3.jpg); background-size: cover; background-position: center;"></div>
							<p>○ ○ ○</p>
						</div>
					</div>-->

					<!-- section 1
					<div class="pad-block-text-project1">
						<div class="block-text-project1" style="margin-bottom: 40px !important;">
							<div class="left-block-text-project1" data-aos="fade-up" data-aos-duration="3000">
								ЕСМУ, як екологічна<br> організація заснована<br> 2018 року
									в Україні
							</div>
							<div class="right-block-text-project1">
								<div class="top-right-block-text-project1" data-aos="fade-up" data-aos-duration="3000">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut 
								</div>
								<div class="bottom-right-block-text-project1" data-aos="fade-up" data-aos-duration="3000">
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
					</div>-->

					<div class="title-scroll-block-content-container-center">
						<p>
							<?php echo $lang['about']['team_blocks']['label']; ?>
						</p>
						<h1><?php echo $lang['about']['team_blocks']['title']; ?></h1>
						<span><?php echo $lang['about']['team_blocks']['descr']; ?></span>
					</div>
					<div class="selbl">
						<select id="sel">
							<option>all</option>
							<?php 
								$sql_get_catt = "SELECT `catt` FROM `heroes`";
								$sql_result = mysqli_query($db, $sql_get_catt);
								
								$uniq = array();
								while ($row = json_decode(mysqli_fetch_array($sql_result)['catt'])->$ll) {
									array_push($uniq, $row);
								}
								$newarr = array_unique($uniq);

								foreach ($newarr as $value) {
									echo "<option>".$value."</option>";
								}
							?>

						</select>					
					</div>

					<div class="heros">
						<?php

							$sql_get_heroes = "SELECT * FROM `heroes`";
							$result_heroes_array = mysqli_query($db, $sql_get_heroes);

							if(isset($result_heroes_array)){

								while ($row = mysqli_fetch_array($result_heroes_array)) {
									
									echo '

										<div class="hero">
											<div class="photo-hero" style="background: url(img/heroes/'.$row['photo'].'); transition: 1s !important; background-size: cover; background-position: top;"><div class="hero-sphere">'.(json_decode($row['catt'])->$ll).'</div></div>
											<p class="name-hero">
												'.(json_decode($row['name'])->$ll).'
											</p>
											<label class="text-hero-block">
												'.(json_decode($row['title'])->$ll).'
											</label>
										</div>

									';

								}

							}

						?>
					</div>
					<div class="addbb"></div>

					<div class="qanda">
						<p class="label-qanda">
							<?php echo $lang['about']['qanda']['label']; ?>
						</p>
						<h1 class="title-qanda"><?php echo $lang['about']['qanda']['title']; ?></h1>
						<ul>
							<li>
								<h3><?php echo $lang['about']['qanda']['par_tit1']; ?></h3>
								<p><?php echo $lang['about']['qanda']['par1']; ?></p>
							</li>
							<li>
								<h3><?php echo $lang['about']['qanda']['par_tit2']; ?></h3>
								<p><?php echo $lang['about']['qanda']['par2']; ?></p>
							</li>
							<li>
								<h3><?php echo $lang['about']['qanda']['par_tit3']; ?></h3>
								<p><?php echo $lang['about']['qanda']['par3']; ?></p>
							</li>
							<li>
								<h3><?php echo $lang['about']['qanda']['par_tit4']; ?></h3>
								<p><?php echo $lang['about']['qanda']['par4']; ?></p>
							</li>
							<li>
								<h3><?php echo $lang['about']['qanda']['par_tit5']; ?></h3>
								<p><?php echo $lang['about']['qanda']['par5']; ?></p>
							</li>
							<li>
								<h3><?php echo $lang['about']['qanda']['par_tit6']; ?></h3>
								<p><?php echo $lang['about']['qanda']['par6']; ?></p>
							</li>
						</ul>
					</div>
					

					<div class="form-mail">
						<label>виникли</label>
						<h3>ЗАПИТАННЯ?</h3>
						<form action="about.php" type="post">
							<span>
								<div class="name-form-mail">
									<label>ПІБ</label>
									<input type="name" required="required" autocomplete="off" placeholder="Прізвище Ім'я Побатькові..." name="">
								</div>
								<div class="email-form-mail">
									<label>Ваш E-mail</label>
									<input type="mail" required="required" autocomplete="off" placeholder="youremail@gmail.com..." name="">
								</div>
								<div class="email-to-form-mail">
									<label>Кому?</label>
									<select>
										<?php

											$sql_get_heroes2 = "SELECT `links` FROM `heroes`";
											$result_heroes_array2 = mysqli_query($db, $sql_get_heroes2);

											if(isset($result_heroes_array2)){

												while ($row2 = mysqli_fetch_array($result_heroes_array2)) {
													
													echo '<option>'.$row2['links'].'</option>';

												}

											}

										?>
									</select>
								</div>
							</span>
							<label class="lab-text-form-mail">Повідомлення</label>
							<div class="text-form-mail"><textarea contenteditable="true"></textarea><p>Просимо Вас бути максимально точними при написанні повідомлення. Це допоможе нам швидше її розглянути та відписати Вам на вказаний Вами вище адрес! Всього найкращого!<br><br><b>З повагою, команда ЕСМУ</b></p></div>
							<div class="but-sub-form-mail"><button type="submit">НАДІСЛАТИ</button></div>
						</form>
					</div>

					
				</div>
			</div>
		</div>	
	</div>

	<!-- footer ------------------------------------------------------------- footer -->
	<?php require "../footer.php"; ?>


<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>

<script type="text/javascript" src="../main.js"></script>
<script type="text/javascript" src="main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>