<div class="subscribe-window">
 		<div class="form-subscribe-window">
 			<div class="right-around-scroll">
			<svg viewBox="-39 -39 578 578"><path d="
			        M 250, 250
			        m -250, 0
			        a 250,250 0 1,0 500,0
			        a 250,250 0 1,0 -500,0
			      " fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • subscribe • subscribe • subscribe • subscribe • subscribe • subscribe</textPath></text>)</svg></div>
 			<form action="index.php" method="post">
 				<h1>SUBSCRIBE TO NEWS</h1>
 				<label class="infa-subscribe-window">
	 				<p>Lorem ipsum dolor sit amet, consectetur<br> adipisicing elit, sed do eiusmod
	 				tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim<br> ad minim veniam,
	 				quis nostrud exercitation ullamco</p>
	 				<ul class="ul-subscribe-window">
	 					<li>Цікаві ідеї</li>
	 					<li>Реєстрація</li>
	 					<li>Оновлення</li>
	 					<li>Проєкти</li>
	 					<li>Блоги</li>
	 				</ul>
	 			</label>
 				<span>
 					<input type="email" name="mailsub" placeholder="Введіть Ваш Email">
 					<button type="submit" class="sub-email" name="sub_subscr_mail"><?php echo $lang['index']['body_menu']['mail_send']; ?></button>
 					<div class="close-subscribe-window">ЗАКРИТИ</div>
 				</span>
 				<p class="no-spam-subscribe-window">no spam, <b style="margin-left: 5px;">secured</b></p>
 			</form>
 		</div>
 	</div>

 	<!-- FIXED MENU PHONE -->
 	<div class="fixed-phone-rihgt-menu">
 		<div class="fixed-phone-rihgt-menu-tools">
 			<span><i class="fa fa-times animated fadeIn" style="animation-duration: 1s;" aria-hidden="true"></i></span>
 		</div>
	 	<ul>
			<li>
				<a href="/index.php" class="animated fadeIn" style="animation-duration: 2s;">
					<span><?php echo $lang['menu']['menu_a1']; ?></span>
					<span class="mouseeventsnone"><?php echo $lang['menu']['menu_a1']; ?></span>
				</a>
			</li>
			<li>
				<a href="/about.php" class="animated fadeIn" style="animation-duration: 3s;">
					<span><?php echo $lang['menu']['menu_a2']; ?></span>
					<span class="mouseeventsnone"><?php echo $lang['menu']['menu_a2']; ?></span>
				</a>
			</li>
			<li>
				<a href="/projects.php" class="animated fadeIn" style="animation-duration:4s;">
					<span><?php echo $lang['menu']['menu_a3']; ?></span>
					<span class="mouseeventsnone"><?php echo $lang['menu']['menu_a3']; ?></span>
				</a>
			</li>
			<!--<li>
				<a href="#" class="animated fadeIn" style="animation-duration: 5s;">
					<span><?php echo $lang['menu']['menu_a4']; ?></span>
					<span class="mouseeventsnone"><?php echo $lang['menu']['menu_a4']; ?></span>
				</a>
			</li>-->
			<li>
				<a href="/help.php" class="animated fadeIn" style="animation-duration: 6s;">
					<span><?php echo $lang['menu']['menu_a5']; ?></span>
					<span class="mouseeventsnone"><?php echo $lang['menu']['menu_a5']; ?></span>
				</a>
			</li>
		</ul>
		<div class="links-menu-phone">
			<div class="links-list-menu-ph">
				<div class="bread-cr-link">
					<p> <a href="/index.php"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span>home </a></p>
				</div>
				<span class="main-page-support">
					<div class="lang2">
						<?php echo $lang['lang']; ?>
						<span class="lang-list2">
					        <?php
								$array_lang = array('?lang=ua','?lang=en');
								echo '<a href="'; echo str_replace($array_lang, '', $_SERVER['REQUEST_URI']); echo '?lang=en">EN</a>';
								echo '<a href="'; echo str_replace($array_lang, '', $_SERVER['REQUEST_URI']); echo '?lang=ua">UA</a>';
							?>
					    </span>
				    </div>
				</span>
			</div>
		</div>
	</div>