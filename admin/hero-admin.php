<?php 
	$titlepage="ESMU - Admin";
	require "plug/start.php"; 
?>

<!-- SESSION LOGIN IN ISSET -->
<?php if(isset($_SESSION['admin'])): ?>
<?php if($_SESSION['super']): ?>

<!-- SQL DB GET HEROES VALUES -->
<?php 

	$id = $data['xid'];

	//CONNECT PHP SAVE FORM VALUES FILE
	require "save-hero.php";


	$sql_main = "SELECT * FROM `heroes` WHERE `id` = '$id'";
	$sql_result = mysqli_fetch_array(mysqli_query($db, $sql_main));

	$name1 = json_decode($sql_result['name'])->ua;
	$catt1 = json_decode($sql_result['catt'])->ua;
	$title1 = json_decode($sql_result['title'])->ua;
	$name2 = json_decode($sql_result['name'])->en;
	$catt2 = json_decode($sql_result['catt'])->en;
	$title2 = json_decode($sql_result['title'])->en;
	$photo = $sql_result['photo'];
	$links = $sql_result['links'];
	$super = $sql_result['superadmin'];

?>

<body style="background: url(img/leaves-pattern.png);">
<?php require "header.php"; ?>

	<div class="body-container-admin">
		<div class="hero-main-block">
			<div class="photo-block-hero"><?php echo'<div class="img-photo-block-hero" style="box-shadow: 0 0 15px rgba(0,0,0,.1); background:url(img/heroes/'.$photo.');"><form><label for="ph-hero-ch"><i class="fa fa-file-image-o" aria-hidden="true"></i></label><input id="ph-hero-ch" type="file" class="chage-hero-photo"></form></div>';?></div>
				<form class="description-hero-block" method="post" action="hero-admin.php" style="box-shadow: 0 0 15px rgba(0,0,0,.1);">
					<a href="heroes-admin.php" class="back-heroes-page">назад</a>
					<div class="ua-description-hero-block">
						<h1>UA</h1>
						<p>NAME</p>
						<?php echo'<input autocomplete="off" placeholder="Ім\'я адміна" name="name-hero1" type="text" value="'.$name1.'">'; ?>
						<p>CATEGORY</p>
						<?php echo'<input autocomplete="off" placeholder="Категорія в команді" name="cat-hero1" type="text" value="'.$catt1.'">'; ?>
						<p>DESCRIPTION</p>
						<?php echo'<textarea autocomplete="off" placeholder="Опис адміна" name="descr1" class="textarea textarea-description-hero-block">'.$title1.'</textarea>'; ?>
					</div>

					<div class="eng-description-hero-block">
					<h1>ENG</h1>
						<p>NAME</p>
						<?php echo'<input autocomplete="off" placeholder="Ім\'я адміна" name="name-hero2" type="text" value="'.$name2.'">'; ?>
						<p>CATEGORY</p>
						<?php echo'<input autocomplete="off" placeholder="Категорія в команді" name="cat-hero2" type="text" value="'.$catt2.'">'; ?>
						<p>DESCRIPTION</p>
						<?php echo'<textarea autocomplete="off" placeholder="Опис адміна" name="descr2" class="textarea textarea-description-hero-block">'.$title2.'</textarea>'; ?>
						<p style="margin-top: 40px;">MAIL</p>
						<?php echo'<input autocomplete="off" placeholder="Пошта" name="mail" type="mail" value="'.$links.'">'; ?>
					</div>					
					
					<div class="make-super-admin">
						<label for="ch_super_hero" class="ch-super-hero">
							<label class="ch-st-hero" for="ch_super_hero"></label>
							<?php echo '<input type="checkbox"';
								if($super!==""):
									echo " checked ";
								endif;
							echo 'autocomplete="off" id="ch_super_hero" name="super" class="ch_ch">'; ?> Надати права суперадміна
						</label>
					</div>

					<div class="buttons-hero">
						<button type="submit" name="sub_save_hero" class="save-hero-bl">ЗБЕРЕГТИ</button>
						<button class="del-hero-bl">ВИДАЛИТИ</button>
					</div>
					
					<!-- $_POST id AGAIN TO KEEP STAY HERE -->
					<?php echo '<input type="hidden" name="xid" value="'.$id.'">'; ?>
				</form>
			</div>
		</div>
	</div>

				


<!-- SESSION LOGIN IN NO-ISSET -->
<?php else: require "error.php"; endif; ?>
<?php else: require "error.php"; endif;
require "plug/end.php"; ?>