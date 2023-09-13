<?php require "../db.php"; ?>
<?php require '../config.php'; ?>

<?php 
	
	$data = $_POST;
	if(isset($data['addproject'])){
		$sql4 = "SELECT MAX(`id`) FROM `projects`";
		$maxid = mysqli_query($db, $sql4);
		while ($idcounter = mysqli_fetch_array($maxid)) {
			$id_row = $idcounter[0] + 1;
		}
		
		$sql2 = "INSERT INTO `projects`(`title`, `descr`, `data`, `writer`, `photo`, `views`, `structure`) VALUES ('','',now(),'','', '0', '')";
		mysqli_query($db, $sql2);
	}

	if(isset($data['deleteproject'])){
		$hidedelid = $data['hididdeleteproject'];

		$sql3 = "DELETE FROM `projects` WHERE `id` = '$hidedelid'";
		mysqli_query($db, $sql3);
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>ESMU - Admin Panel Projects</title>
				
		<!-- styles -->
		<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../animate.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" integrity="sha512-fxF1t7b0mpb/ytjBeSu/OpgXxCVcX5/O8AJGYvHaWmNfi/lYLtttitFK17K4iKBva4iU9dcZ+BIV7dyD/nDdSw==" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="../Gilroy/stylesheet.css">
	</head>

			<?php

				if(isset($_SESSION['admin'])){

			?>

					<body style="background: url(img/leaves-pattern.png);">

							<?php require 'header.php'; ?>

							<div class="body-container-admin">

								<div class="projects-body-container-admin">
									<div class="tools-projects-admin">
										
										<form class="search-admin-project-form" action="/admin-projects.php" method="POST">
											<button type="submit" name="sub-admin-projects-search">ПОШУК</button>
											<input type="text" autocomplete="off" class="input-search-admin-project-form" placeholder="Введіть назву проєкту..." name="search-admin-project">
										</form>
										<form class="add-admin-project" method="post" action="admin-projects.php">
											<button type="submit" name="addproject">ДОДАТИ ПРОЄКТ</button>
										</form>

									</div>
									<div class="table-admin-projects">

											<?php 
												if(isset($data['sub-admin-projects-search'])){
													$tits = $data['search-admin-project'];
													$sql = "SELECT * FROM `projects` WHERE `title` LIKE '%$tits%'";
												}else{
													$sql = "SELECT * FROM `projects` ORDER BY `id` DESC";
												}

												$callrows = "SELECT * FROM `projects`";
												$countallrows = mysqli_query($db, $callrows)->num_rows;
												$result_rows = mysqli_query($db, $sql);

												echo '<p class="search-echo-count">Знайдено '.$result_rows->num_rows.' із '.$countallrows.' проєкта </p>';
											?>


										<table>

											<!-- //titles -->
											<tr>
												<th>id</th>
												<th>Заголовок</th>
												<th>Опис</th>
												<th>Дата</th>
												<th>Автор</th>
												<th>змінити</th>
												<th>Видалити</th>
											</tr>

											<!-- //body table -->
											<?php 

												$result = mysqli_query($db, $sql);

												if($result){
													while ($row = mysqli_fetch_array($result)){
														$descr = json_decode($row['descr'])->ua;
													
														echo "

															<tr>
																<td>".$row['id']."</td>
																<td>".json_decode($row['title'])->ua."</td>
																<td>";

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



																echo"</td>
																<td>".$row['data']."</td>
																<td>".json_decode($row['writer'])->ua."</td>
																<td class='form-change-project-admin'>
																	<form action='projects-change-admin.php' method='post'>
																		<input type='hidden' name='xid' value='".$row['id']."'>
																		<button type='submit'>змінити #".$row['id']."</button>
																	</form>
																</td>
																<td class='form-delete-project-admin'>
																	<form method='post' action='admin-projects.php'>
																		<input type='hidden' name='hididdeleteproject' value='".$row['id']."'>
																		<button type='submit' name='deleteproject'>видалити #".$row['id']."</button>
																	</form>
																</td>
															</tr>

														";

													}
												}

											?>

										</table>
									</div>
								</div>

							</div>

				



						<!-- scripts -->
						<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
						<script type="text/javascript" src="../main.js"></script>
						<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
						<script>
						  AOS.init();
						</script>
					</body>

			<?php 
				}else{

					require "error.php";

				}
			?>


</html>