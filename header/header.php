	<div class="menu-fixed">
		<div class="top-bg-hp-men-fix"></div>
		<div class="menu-fixed-main-cont">			

			<link rel="stylesheet" type="text/css" href="../header/style.css">
			<div class="left-side-menu-fixed">
				<a href="../index.php" class="logo-menu-fixed">
					<img class="logo" src="../header/img/logo.svg">
					<h1><?php echo $lang['logo']['logo']; ?></h1>
					<p><?php echo $lang['logo']['p']; ?></p>
				</a>
				<div class="ul-list-menu-fixed">
					<ul>
						<li>
							<a href="../index.php">
								<span><?php echo $lang['menu']['menu_a1']; ?></span>
								<span class="mouseeventsnone"><?php echo $lang['menu']['menu_a1']; ?></span>
							</a>
						</li>
						<li>
							<a href="../about/about.php">
								<span><?php echo $lang['menu']['menu_a2']; ?></span>
								<span class="mouseeventsnone"><?php echo $lang['menu']['menu_a2']; ?></span>
							</a>
						</li>
						<li>
							<a href="../projects/projects.php">
								<span><?php echo $lang['menu']['menu_a3']; ?></span>
								<span class="mouseeventsnone"><?php echo $lang['menu']['menu_a3']; ?></span>
							</a>
						</li>
						<!--<li>
							<a href="/blog.php">
								<span><?php echo $lang['menu']['menu_a4']; ?></span>
								<span class="mouseeventsnone"><?php echo $lang['menu']['menu_a4']; ?></span>
							</a>
						</li>-->
						<li>
							<a href="../donate/">
								<span><?php echo $lang['menu']['menu_a5']; ?></span>
								<span class="mouseeventsnone"><?php echo $lang['menu']['menu_a5']; ?></span>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="right-side-menu-fixed">
				<div class="menu-phone">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
			</div>
		</div>

		<div class="menu-header-main-container2">
			<div class="menu-header-main">
				<div class="bread-cr-link">
					<p> <a href="../index.php"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span><?php echo $lang['back']; ?> </a></p>
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
				    	<button type="submit"><i class="fa fa-search" aria-hidden="true" style="font-size: 12px; margin-right: 4px;"></i><?php echo $lang['search']; ?></button>
				    </form>
				</span>
				<div class="scrollBar2"></div>
			</div>
		</div>
	</div>