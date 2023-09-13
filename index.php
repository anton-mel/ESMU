<?php require "db.php"; ?>
<?php require 'config.php'; ?>
<?php 
	
	//SUBSCRIBE MAILS
	$data = $_POST;
	if(isset($data['sub_subscr_mail'])){
		$mail = $data['mailsub'];
		$date = date("d.m.Y");
		$sql_sub_mail = "INSERT INTO `mail` (`mail`, `date`) VALUES ('$mail','$date')";
		mysqli_query($db, $sql_sub_mail);
	}

?>
<!DOCTYPE html>
<html lang="ua" data-scrollbar>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>ESMU - <?php echo $lang['menu']['menu_a1']; ?></title>
	
	<!-- styles -->
	<link rel="icon" href="img/">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" integrity="sha512-fxF1t7b0mpb/ytjBeSu/OpgXxCVcX5/O8AJGYvHaWmNfi/lYLtttitFK17K4iKBva4iU9dcZ+BIV7dyD/nDdSw==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="Gilroy/stylesheet.css">
	<link rel="stylesheet" href="base.css">
</head>
<body class="bgcolor">
 	
	<?php require 'plugins.php'; ?>

	<div id="canvas"></div>

	<?php require 'header/header.php'; ?>
		
	<div class="header" id="header">


		<div class="container-slider">
			<p class="bg-text-slide-main"></p>
			
				<div class="slides">
						<div class="left-side-slide1">
							<h3><?php echo $lang['index']['header']['label']; ?></h3>
							<h1><?php echo $lang['index']['header']['title']; ?></h1>
							<p><?php echo $lang['index']['header']['description']; ?></p>
							<div class="buttons-slide1">
								<a href="/projects.php"> <?php echo $lang['index']['header']['project_but']; ?></a>
								<a href="/blog.php"><?php echo $lang['index']['header']['blog_but']; ?></a>
							</div>
						</div>
						<div class="right-side-slide1">
							<?php 

								$cc = 0;
								$sql_get_count_pr = "SELECT * FROM `projects`";
								$result_count_pr = mysqli_query($db, $sql_get_count_pr);
								while ($row = mysqli_fetch_array($result_count_pr)){
									$cc++;
								}

								$sql_get_last_pr = "SELECT * FROM `projects` ORDER BY `id` DESC LIMIT 1";
								$result_pr_last = mysqli_fetch_array(mysqli_query($db, $sql_get_last_pr));

								

								if(isset($result_pr_last)){
									$ll = $_SESSION['lang'];
									$descr = json_decode($result_pr_last['descr'])->$ll;
									$id = $result_pr_last['id'];
									$title = json_decode($result_pr_last['title'])->$ll;
									$date = $result_pr_last['data'];
									$writer = json_decode($result_pr_last['writer'])->$ll;

									/*add views*/
									$sql_get_views = "SELECT `views` FROM `projects` WHERE `id` = '$id'";
									$result_get_views = mysqli_fetch_array(mysqli_query($db, $sql_get_views));


									echo '
										<div class="last-project-main-cont">
											<div class="last-project-main">
												<div>
													<h1>'.$title.'</h1>
													<p class="p-text-last-project-main">'; 

														if(count(str_split($descr))>=200){
															$time=0;
															$checkspace=true;
															foreach (str_split($descr) as $letter) {
																if($time<=200){
																	echo $letter;
																}else if($letter!==" " && $time>200){
																	if($checkspace){
																		echo $letter;
																	}
																}else{
																	$checkspace = false;
																	break;
																}
																$time++;
															}
															echo "...";
														}else{
															foreach (str_split($descr) as $letter) {
																echo $letter;
															}
														}

													echo '</p>
													<span>
														<p>'.$date.'</p>
														<p>'.$writer.'</p>
													</span>
													<h6>#'.$cc.'</h6>
												</div>
											</div>
											<p class="last-count-vw">'.$result_get_views[0].' переглядів</p>
										</div>
									';
								}
								

							?>
						</div>
				</div>
		</div>
		

		<div class="filter-header"></div>

		<!--<img src="img/leafp.png" class="leafp12">
		<img src="img/leafp.png" class="leafp22">-->


		<!-- <div class="count-main-center">
			<h1 data-aos="fade-up" data-aos-duration="3000"><?php $sqlgetcount /* = "SELECT `id` FROM `projects`"; echo count(mysqli_fetch_array(mysqli_query($db, $sqlgetcount)))+13;*/?> успішних проєктів</h1>
			<h1 data-aos="fade-up" data-aos-duration="3000">більше 100 залучених підлітків</h1>
			<h1 data-aos="fade-up" data-aos-duration="3000"><?php $sqlgetcount /*= "SELECT `id` FROM `projects`"; echo count(mysqli_fetch_array(mysqli_query($db, $sqlgetcount)))+13;*/?> опублікованих блогів</h1>
			<h1 data-aos="fade-up" data-aos-duration="3000">більше 20 амбасадорів</h1>
		</div> -->
	</div>
	<div class="body-container">
		<div class="be-eco"><p>#BeEcoFriendly</p> <span><ul><li class="active-li-slide">○</li><li>○</li><li>○</li></ul></span></div>

		<div class="menu-header-main-container">
			<div class="menu-header-main">
				<div class="bread-cr-link">
					<p> <a href="/index.php"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span>на головну </a></p>
				</div>
				<span class="main-page-support">
					<div class="lang">
						<?php echo $lang['lang']; ?>
						<span class="lang-list">
					        <?php
								$array_lang = array('?lang=ua','?lang=en');
								echo '<a href="../'; echo str_replace($array_lang, '', $_SERVER['REQUEST_URI']); echo '?lang=en">EN</a>';
								echo '<a href="../'; echo str_replace($array_lang, '', $_SERVER['REQUEST_URI']); echo '?lang=ua">UA</a>';
							?>
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
		<div class="center-body-container">
			<div class="block-center-body-container">

				<div class="right-around-scroll3" data-aos="fade-down-left" data-aos-duration="3000">
				<svg viewBox="-39 -39 578 578" class="svg-right-around-scroll"><path d="
			        M 250, 250
			        m -250, 0
			        a 250,250 0 1,0 500,0
			        a 250,250 0 1,0 -500,0
			      " fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • ukrainian • ukrainian • ukrainian • ukrainian • ukrainian • ukrainian</textPath></text>)</svg></div>

				<div class="all-text-containers-main">
					<div class="contmainblock1">
						<h1><?php echo $lang['index']['esmu_name_capitalize']['title']; ?></h1>
						<p class="p_contmainblock1"><?php echo $lang['index']['esmu_name_capitalize']['description']; ?></p>
						<ul>
							<li><?php echo $lang['index']['esmu_name_capitalize']['values'][0]; ?></li>
							<li><?php echo $lang['index']['esmu_name_capitalize']['values'][1]; ?></li>
						</ul>
					</div>					

					

						<!--<div class="aboutprpdfbut"><a href="/files/identity_1pagesummaryUKR.pdf" target="_blank"><?php echo $lang['index']['butns_main'][0]; ?></a><a href="/files/one_year_esmu.pdf" target="_blank"><?php echo $lang['index']['butns_main'][1]; ?></a><a href="/about.php"><?php echo $lang['index']['butns_main'][2]; ?></a></div>-->

						<!-- section 2
						<div class="block-text-project2" data-aos="fade-up" data-aos-duration="3000" style="margin-bottom: 40px !important;">
							<div class="left-block-text-project2">
								<div class="title-left-block-text-project2" data-aos="fade-up" data-aos-duration="3000">
									Polly Chesnokova
								</div>
								<div class="top-left-block-text-project2" data-aos="fade-up" data-aos-duration="3000">
									Я Polly Chesnokova - студент режисер, co-founder ЕСМУ, випускниця програми FLEX, фіналістка Ukraine Global Scholars когорти 2019 і (барабанний дріб) Tree Hugger.
								</div>
								<div class="bottom-left-block-text-project2" data-aos="fade-up" data-aos-duration="3000">
									Так, так, Я — той друг, якого всі мають і який носить повсюди свою пляшечку для води, підбирає сміття, коли йде вулицею, та носить свої книги в екоторбі.<br><br>

									Я мрію про розширення свідомості молодих людей про важливість дії. Я не вірю в час, який люди витрачають, чекаючи поки хтось вище, або старше, або впливовіше виправить ситуацію, яка погіршується в геометричній прогресії.<br><br>

									Саме тому ми з Олегом вирішили створити щось, що зможе дати молоді зі маленьких куточків України можливість діяти. Ми є тут, щоб показувати підліткам як вони можуть покращувати цю планету і робити це із задоволенням.<br><br>

									Ми є тут, щоб захоплювати.
								</div>
								<ul data-aos="fade-up" data-aos-duration="3000" class="links-for-org">
									<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
									<li><i class="fa fa-instagram" aria-hidden="true"></i></li>
									<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="right-block-text-project2">
								<div class="photo-right-block-text-project2" style="background: url(img/polly.webp);">
									<div class="right-around-scroll2">
										<svg viewBox="-39 -39 578 578" class="svg-org-main"><path d="
									        M 250, 250
									        m -250, 0
									        a 250,250 0 1,0 500,0
									        a 250,250 0 1,0 -500,0
									      " fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • Polly Chesnokova • Polly Chesnokova • Polly Chesnokova • Polly Chesnokova </textPath></text>)</svg>
								  	</div>
								</div>
							</div>
						</div>-->

						<!-- section 3
							<div class="block-text-project3" style="margin-bottom: 40px !important;">
								<div class="left-block-text-project3">
									<div class="photo-right-block-text-project3" style="background: url(img/nathan.webp);" data-aos="fade-up" data-aos-duration="3000">
										<div class="right-around-scroll2">
											<svg viewBox="-39 -39 578 578" class="svg-org-main"><path d="
										        M 250, 250
										        m -250, 0
										        a 250,250 0 1,0 500,0
										        a 250,250 0 1,0 -500,0
										      " fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • Oleh Syvash • Oleh Syvash • Oleh Syvash • Oleh Syvash • Oleh Syvash </textPath></text>)</svg>
									  	</div>
									</div>
								</div>
								<div class="right-block-text-project3">
									<div class="title-left-block-text-project3" data-aos="fade-up" data-aos-duration="3000">
										Oleh Syvash
									</div>
									<div class="top-left-block-text-project3" data-aos="fade-up" data-aos-duration="3000">
										Мене звати Oleh Syvash і я - студент, закоханий у фізику, co-founder ЕСМУ, випускник програми FLEX та Civic Education Workshop, член МАН і просто людина, яка мріє щоб кожний ховрах і кожна коала у світі мала свою домівку.
									</div>
									<div class="bottom-left-block-text-project3" data-aos="fade-up" data-aos-duration="3000">
										Якщо ви припустили, що я той самий знайомий, який при розмові щодо новітніх трендів переводить стрілки на важливість глобального потепління, то ви — праві. І так, я проти пластикових соломинок.<br><br>

										Я плекаю надію, що день, коли ми будемо вимушені купляти чисте повітря у супермаркеті, не настане, і небо не гратиме барвами сріблястого свинцю.<br><br>

										Саме тому ми з Поллі скооперувались заради створення проєкту, де звичайний підліток із маленького містечка може долучитись до покращення екологічної ситуації.<br><br>

										Переходь на зелену сторону!
									</div>
									<ul data-aos="fade-up" data-aos-duration="3000" class="links-for-org">
										<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
										<li><i class="fa fa-instagram" aria-hidden="true"></i></li>
										<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
									</ul>
								</div>
							</div>-->

							<!--<div class="contmainblock2" data-aos="fade-up" data-aos-duration="3000">
								<marquee direction="up" loop="infinite"><h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4></marquee>
								<div>
									<img src=img/header.jpg>
								</div>
							</div>-->
							<!--<div class="quote-main-esmu-value">
								<label><i class="fa fa-quote-left" aria-hidden="true"></i></label>
								<p><?php echo $lang['index']['quote']['quote']; ?><span>|</psan></p>
								<span><?php echo $lang['index']['quote']['writer']; ?></span>
							</div>-->
							<div class="title-scroll-block-content-container-center2">
								<p>
									<?php echo $lang['index']['last_projects']['label']; ?>
								</p>
								<h1><?php echo $lang['index']['last_projects']['title']; ?></h1>
							</div>
							<section class="blocks-projects-container3">
								<?php
									//get projects
									$sql_get_pr = "SELECT * FROM `projects` LIMIT 3";
									$projects = mysqli_query($db, $sql_get_pr);
									$key_pr = 0;
									$key_real = 1;

									while ($project = mysqli_fetch_array($projects)) {
										if($key_pr%2==0){

											echo '

												<div class="block-projects-container">
													<div class="photo-block-projects-container">
														<div class="photo-bpc" style="background: url(img/projects/'.$project['photo'].'); background-size: cover;">
															<p class="p1-photo-bpc">'.$key_real.'</p>
														</div>
													</div>
													<div class="content-block-projects-container">
														<div class="text-content-block-projects-container">
															<h1>'.(json_decode($project['title'])->$ll).'</h1>
															<span class="descr-text-content-block-projects-container">'; 

															if(count(str_split(json_decode($project['descr'])->$ll))>=200){
																$time=0;
																$checkspace=true;
																foreach (str_split(json_decode($project['descr'])->$ll) as $letter) {
																	if($time<=200){
																		echo $letter;
																	}else if($letter!==" " && $time>200){
																		if($checkspace){
																			echo $letter;
																		}
																	}else{
																		$checkspace = false;
																		break;
																	}
																	$time++;
																}
																echo "...";
															}else{
																foreach (str_split(json_decode($project['descr'])->$ll) as $letter) {
																	echo $letter;
																}
															}

															echo '</span>
															<label class="writer-projects-block">
																'.(json_decode($project['writer'])->$ll).'
															</label>
															<label class="data-projects-block">
																'.$project['data'].'
															</label>
														</div>
													</div>
												</div>

											';

											$key_pr--;
											$key_real++;

										}else{

											echo '

												<div class="block-projects-container">
													<div class="text-content-block-projects-container">
														<h1>'.(json_decode($project['title'])->$ll).'</h1>
														<span class="descr-text-content-block-projects-container">'; 

															if(count(str_split(json_decode($project['descr'])->$ll))>=200){
																$time=0;
																$checkspace=true;
																foreach (str_split(json_decode($project['descr'])->$ll) as $letter) {
																	if($time<=200){
																		echo $letter;
																	}else if($letter!==" " && $time>200){
																		if($checkspace){
																			echo $letter;
																		}
																	}else{
																		$checkspace = false;
																		break;
																	}
																	$time++;
																}
																echo "...";
															}else{
																foreach (str_split(json_decode($project['descr'])->$ll) as $letter) {
																	echo $letter;
																}
															}

															echo '</span>
															<label class="writer-projects-block">
																'.(json_decode($project['writer'])->$ll).'
															</label>
															<label class="data-projects-block">
																'.$project['data'].'
															</label>
													</div>
													<div class="photo-block-projects-container">
														<div class="photo-bpc" style="background: url(img/projects/'.$project['photo'].'); background-size: cover;">
															<p class="p2-photo-bpc">'.$key_real.'</p>
														</div>
													</div>
												</div>

											';

											$key_pr++;
											$key_real++;

										}
										

										
									}

								?>
								
							</section>
							<!-- section 4
							<div class="block-text-project4" style="margin-bottom: 0 !important;">
								<h1 data-aos="fade-up" data-aos-duration="3000">Мрієш стати чатиною команди?<br> Спробуй свої сили та подай свою анкету<br>
								на волонтерську діяльність у команді<br> ЕСМУ 2020. Не зволікай!</h1>
							 	<p data-aos="fade-up" data-aos-duration="3000">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
							<div class="aboutprpdfbut"><a href="#">ПОДАТИ ЗАЯВКУ</a></div> -->
						</div>

				</div>

			</div>
		</div>
		

	</div>

	<?php require "footer.php"; ?>

<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="documentsize.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>



</body>
</html>