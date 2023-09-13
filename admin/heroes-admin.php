<?php 
	$titlepage="ESMU - Admins";
	require "plug/start.php"; 

	//ADD HERO PHP
	if(isset($_POST['add-hero'])){
		$defpass = '$2y$10$IgVyM.FPlH9EC.zxsTcFXugCH9KW4Oj.FFDUlgEWsIYfiBLe877Fa';
		$add = "INSERT INTO `heroes`(`name`, `title`, `links`, `photo`, `catt`, `password`, `superadmin`, `username`) VALUES ('','','','def.png','','$defpass','','admin')";
		mysqli_query($db, $add);
	}

	//DELETE HERO BY KEY PHP
	if(isset($_POST['del-hero'])){
		$id = $_POST['xid'];
		$del = "DELETE FROM `heroes` WHERE `id`='$id'";
		mysqli_query($db, $del);
	}
?>

<!-- SESSION LOGIN IN ISSET -->
<?php if(isset($_SESSION['admin'])): ?>
<?php if($_SESSION['super']): ?>

<body style="background: url(img/leaves-pattern.png);">
<?php require "header.php"; ?>

	

	<div class="body-container-admin">
		<div class="heroes">

			<div class="menu-heroes-admin">
				<form class="form-search-heroes" action="heroes-admin.php" method="post">
					<input autocomplete="off" placeholder="Запит..." type="text" name="keyword">
					<select>
						<option>усі категорії</option>
						<?php 

							$sqlcat = "SELECT `catt` FROM `heroes`";
							$result = mysqli_query($db, $sqlcat);
							$values = array();

							while ($cat = mysqli_fetch_array($result)) {
								array_push($values, json_decode($cat['catt'])->ua);
							}

							$all = array_unique($values);
							foreach($all as $row){
								echo "
									<option>".$row."</option>
								";
							}

						?>
					</select>
					<button type="submit" name="findhero">SEARCH</button>
				</form>
				<div class="left-side-menu-heroes-admin">
					<div class="drag-hero">DRAG</div>
					<form action="heroes-admin.php" method="post">
						<button type="submit" name="add-hero">ADD</button>
					</form>
				</div>
			</div>

			<div class="admins-blks">
				
				<?php 

					//ALL INF ABOUT HEROES
					if(isset($data['findhero'])){
						$key = $data['keyword'];
						$sql = "SELECT * FROM `heroes` WHERE (`username` LIKE '%$key%' OR `name` LIKE '%$key%') ORDER BY `id` DESC";
					}else{
						$sql = "SELECT * FROM `heroes` ORDER BY `id` DESC";
					}

					$result = mysqli_query($db, $sql);
					$count = mysqli_num_rows($result);
					if($count>0){
						while ($row = mysqli_fetch_array($result)) {

								echo '
									<div class="admin-ch-bl drug-element">
										<div class="drug-eff"><i class="fa fa-address-card" aria-hidden="true"></i></div>
										<div class="photo-admin-bl-ch" style="background: url(img/heroes/'.$row['photo'].');"></div>
											<div class="text-admin-bl-ch">
												<h1>'.(json_decode($row['name'])->ua).'</h1>
												<label>'; if($row['superadmin']!==""){echo '<i class="fa fa-users" aria-hidden="true" style="margin-right: 5px;"></i>'; } echo (json_decode($row['catt'])->ua).'</label>
												<p>'; 


														// LETTER COUNTER
														if(count(str_split(json_decode($row['title'])->ua))>=500){
															$time=0;
															$checkspace=true;
															foreach (str_split(json_decode($row['title'])->ua) as $letter) {
																if($time<=500){
																	echo $letter;
																}else if($letter!==" " && $time>500){
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
															foreach (str_split(json_decode($row['title'])->ua) as $letter) {
																echo $letter;
															}
														}
																	

											echo '		
												</p>
												<div class="butns-hero">
													<form action="hero-admin.php" method="POST">
														<input type="hidden" name="xid" value="'.$row['id'].'">
														<button type="submit" name="sub_hero_chp" class="ch-admin-ch-bl" style="border:none; cursor: pointer;">CHANGE</button>
													</form>
													<form action="heroes-admin.php" method="POST">
														<input type="hidden" name="xid" value="'.$row['id'].'">
														<button type="submit" name="del-hero" class="del-admin-ch-bl" style="border:none; cursor: pointer;">DELETE</button>
													</form>
												</div>
											</div>
										</div>';
						}
					}
				?>
											
			</div>

		</div>
	</div>

			


<!-- SESSION LOGIN IN NO-ISSET -->
<?php else: require "error.php"; endif; ?>
<?php else: require "error.php"; endif;
require "plug/end.php"; ?>