<?php require '../db.php'; ?>
<?php require '../config.php'; ?>
<!DOCTYPE html>
<html lang="ua" data-scrollbar>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>ESMU - <?php echo $lang['menu']['menu_a3']; ?></title>
	
	<!-- styles -->
	<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="../animate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" integrity="sha512-fxF1t7b0mpb/ytjBeSu/OpgXxCVcX5/O8AJGYvHaWmNfi/lYLtttitFK17K4iKBva4iU9dcZ+BIV7dyD/nDdSw==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="../Gilroy/stylesheet.css">
	<link rel="stylesheet" href="main.css">
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
	 -->
	
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
				<div class="right-around-scroll4">
					<svg viewBox="-39 -39 578 578"><path d="
			        M 250, 250
			        m -250, 0
			        a 250,250 0 1,0 500,0
			        a 250,250 0 1,0 -500,0
			      " fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • <?php echo $lang['menu']['menu_a3']; ?> • <?php echo $lang['menu']['menu_a3']; ?> • <?php echo $lang['menu']['menu_a3']; ?> • <?php echo $lang['menu']['menu_a3']; ?> • <?php echo $lang['menu']['menu_a3']; ?> • <?php echo $lang['menu']['menu_a3']; ?> </textPath></text>)</svg>
				</div>
				<div class="scroll-block-content-container-center">
				
					<div class="title-scroll-block-content-container-center">
						<p>
							<?php echo $lang['projects']['label']; ?>
						</p>
						<h1>
							<?php echo $lang['projects']['title']; ?>
						</h1>
					</div>
					<section class="blocks-projects-container">
						<?php
							//get projects
							$sql_get_pr = "SELECT * FROM `projects` ORDER BY `id` DESC";
							$projects = mysqli_query($db, $sql_get_pr);
							$key_pr = 0;
							$ll = $_SESSION['lang'];

							while ($project = mysqli_fetch_array($projects)) {
								if($key_pr%2==0){

									echo '

										<div class="block-projects-container">
											<div class="photo-block-projects-container">
												<div class="photo-bpc" style="background: url(img/projects/'.$project['photo'].'); background-size: cover;">
													
												</div>
											</div>
											<div class="content-block-projects-container">
												<div class="text-content-block-projects-container">
													<h1>'.(json_decode($project['title'])->$ll).'</h1>
													<span class="descr-text-content-block-projects-container">'; 

													if(count(str_split(json_decode($project['descr'])->$ll))>=180){
														$time=0;
														$checkspace=true;
														foreach (str_split(json_decode($project['descr'])->$ll) as $letter) {
															if($time<=180){
																echo $letter;
															}else if($letter!==" " && $time>180){
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

								}else{

									echo '

										<div class="block-projects-container">
											<div class="text-content-block-projects-container">
												<h1>'.(json_decode($project['title'])->$ll).'</h1>
												<span class="descr-text-content-block-projects-container">'; 

													if(count(str_split(json_decode($project['descr'])->$ll))>=180){
														$time=0;
														$checkspace=true;
														foreach (str_split(json_decode($project['descr'])->$ll) as $letter) {
															if($time<=180){
																echo $letter;
															}else if($letter!==" " && $time>180){
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
													
												</div>
											</div>
										</div>

									';

									$key_pr++;

								}
								

								
							}

						?>
						
					</section>
					
				</div>
			</div>
		</div>
	</div>
	

	<!-- footer ------------------------------------------------------------- footer -->
	<?php require "../footer.php"; ?>




	<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="../paginathing-master/paginathing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.blocks-projects-container').paginathing({
    		  perPage: 3,
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