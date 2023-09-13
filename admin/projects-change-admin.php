<?php 

//connect DB main sett
require "../db.php";

//get ID opened project in admin-panel
$x = $_POST['xid'];


//setings
if(isset($_POST['changemainprset'])){
	//get value

	//UA
	$titlenew = $_POST['newtitle'];
	$descnew = $_POST['newdescr'];
	$wrnew = $_POST['newwr'];

	//ENG
	$titlenew2 = $_POST['newtitle2'];
	$descnew2 = $_POST['newdescr2'];
	$wrnew2 = $_POST['newwr2'];

	//make object to DB
	$maintitilenew = array(
		'ua' => $titlenew,
		'en' => $titlenew2
	);
	$maindescnew = array(
		'ua' => $descnew,
		'en' => $descnew2
	);
	$mainwrnew = array(
		'ua' => $wrnew,
		'en' => $wrnew2
	);

	//last str json value to DB
	$titlelang = json_encode($maintitilenew, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
	$desclang = json_encode($maindescnew, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
	$wrlang = json_encode($mainwrnew, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);

	//AND DATE
	$datenew = $_POST['newdate'];

	$sql1 = "UPDATE `projects` SET `title`='$titlelang', `descr`='$desclang', `data`='$datenew', `writer`='$wrlang' WHERE `id`='$x'";
	mysqli_query($db, $sql1);
}

$sql0 = "SELECT (`id`) FROM `projects`";
$resultx = mysqli_query($db, $sql0);
$nextx = true;



while ($resx = mysqli_fetch_array($resultx)) {
	if($resx[0] == $x){
		//IF FOUND ANY COMMON ID
		$nextx = false;

		//regenerate session if close form
		if(isset($_SESSION['opfa'])){
			if($_SESSION['opfa'] !== $x){
				$_SESSION['opfa'] = $x;

				//delete session
				unset($_SESSION['projects-admin']);

				//IF THERE ARE DB MAKE SESSION IMMIDIATLY
				$sql_sess = "SELECT * FROM `projects` WHERE id = '$x'";
				$result_sess = mysqli_fetch_array(mysqli_query($db, $sql_sess));

				if($result_sess['structure']!==''){
					$_SESSION['projects-admin']=json_decode($result_sess['structure']);
				}
			}else{
				$_SESSION['opfa'] = $x;
			}
		}else{
			$_SESSION['opfa'] = $x;
		}
		
	}
}

//IF TRUE => RELOAD
if($nextx){
	echo "
		<script>
			document.location.replace('esmu/admin/admin-projects.php');
		</script>
	";
}



/*PUBLIC ALL FORMS(ARRAY) TO DB*/
if(isset($_POST['public-pr-admin'])){
	$data_public = addslashes(json_encode($_SESSION['projects-admin']));
	$sql_public_all = "UPDATE `projects` SET `structure`='$data_public' WHERE `id` = '$x'";
	mysqli_query($db, $sql_public_all);
}

/*DELETE ALL FORMS(STRUCTURE) FROM DB*/
if(isset($_POST['delallprad'])){
	$sql_delete_all = "UPDATE `projects` SET `structure`='' WHERE `id`='$x'";
	mysqli_query($db, $sql_delete_all);

	unset($_SESSION['projects-admin']);
}

/*DELETE PROJECT FROM ARRAY IN DB BY KEY*/
if(isset($_POST['del-pr-admin'])){
	$keypr = $_POST['key-del'];

	//print_r($_SESSION['projects-admin'][$keypr]);
	unset($_SESSION['projects-admin'][$keypr]);

	//if there is not any forms
	if(count($_SESSION['projects-admin'])==0){
		unset($_SESSION['projects-admin']);
	}else{
		//regulate normal amount after del
		$_SESSION['projects-admin'] = array_values($_SESSION['projects-admin']);
	}
}

/*SAVE PROJECT FROM ARRAY IN DB BY KEY*/
if(isset($_POST['save-pr-admin'])){
	$keypr = $_POST['key-save'];
	$titlepr = $_POST['titleproject'];
	//print_r($titlepr);

	print($_SESSION['projects-admin'][$keypr]->id);
}


//SOME SQL GENERAL CONNECTIONS
$sql = "SELECT * FROM `projects` WHERE id = '$x'";
$result = mysqli_query($db, $sql);

$sqll = "SELECT * FROM `library`";
$resultl = mysqli_query($db, $sqll);

$row = mysqli_fetch_array($result);

//got DB general page values
$id = $row['id'];
$title = $row['title'];
$maindesc = $row['descr'];
$date = $row['data'];
$wr = $row['writer'];
$pid = $row['pid'];
$structure = $row['structure'];
$photo = $row['photo'];


//CREATE SESSION FROM LIBRARY
$data = $_POST;
$codeid = $data['xcode'];

$sqlgetcodepr = "SELECT * FROM `library` WHERE `id`='$codeid'";
$resultcode = mysqli_fetch_array(mysqli_query($db, $sqlgetcodepr));

if($resultcode){
													
	$sqlgetstructure = "SELECT `structure` FROM `projects` WHERE `id`='$id'";
	$resultstr = mysqli_fetch_array(mysqli_query($db, $sqlgetstructure));

	if(isset($_POST['addprojectcode'])){
														

		if(isset($_SESSION['projects-admin'])){
			
			$item_array_id = array_column($_SESSION['projects-admin'], "id");

			$keys = array_keys($_SESSION['projects-admin']);
			$lastKey = $keys[count($keys)-1] + 1;
																
			$item_array = (object) array(
				"id" => $resultcode['id'],
				"text" => "some text here2",
				"title" => "some title2",
				"photo" => "some photo2"
			);

			$_SESSION['projects-admin'][$lastKey] = $item_array;
			$_SESSION['projects-admin'] = array_values($_SESSION['projects-admin']);
			//print_r(json_encode($item_array));

		}else{

			$item_array = (object) array(
				"id" => $resultcode['id'],
				"text" => "some text here1",
				"title" => "some title1",
				"photo" => "some photo1"
			);

			//Create new session variable
			$_SESSION['projects-admin'][0] = $item_array;
			$_SESSION['projects-admin'] = array_values($_SESSION['projects-admin']);
		}

	}

}


///print_r($_SESSION['projects-admin']);
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>ESMU - Change Admin</title>
				
		<!-- styles -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../style.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../animate.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" integrity="sha512-fxF1t7b0mpb/ytjBeSu/OpgXxCVcX5/O8AJGYvHaWmNfi/lYLtttitFK17K4iKBva4iU9dcZ+BIV7dyD/nDdSw==" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="../Gilroy/stylesheet.css">
	</head>
			<?php

				//if system foud admin
				if(isset($_SESSION['admin'])){

			?>

					<body style="background: url(img/leaves-pattern.png);">
						
						<?php require 'header.php'; ?>

							<div class="body-container-admin">

								<div class="library-projects">
									<div class="lps">
									
										<h1>БІБЛІОТЕКА</h1>

										<div class="forms-text-library">

											<?php

												//if there are any forms in DB library echo these
												if($resultl){
													while ($rowl = mysqli_fetch_array($resultl)) {

														echo "

															<form action='".$pid.$id."' method='post'>
																<!-- form ID from DB library input value -->
																<input type='hidden' name='xid' value='".$id."'>

																<input type='hidden' id='xcode' name='xcode' value='".$rowl['id']."'>
																<label>".$rowl['name']."</label>
																<button name='addprojectcode'>ДОБАВИТИ</button>
															</form>

														";

													}
												}else{

													//if there are not any forms
													echo "виникла проблема із БД \"бібліотеки\"";

												}

											?>
											
										</div>

									</div>
								</div>

								<div class="forms-library-text">
									
									<div class="main-projects-table-change">

											<?php echo '<div class="main-projects-table-change-photo" style="background: url(../projects/img/projects/'.$photo.'); background-size: cover;"> <input type="hidden" name="xid" value="'.$x.'">'; ?>
												<form method="post" action="projects-chnge-admin.php">
													<label for="file-photo-pr" onchange="this.form.submit()">ЗМІНИТИ</label>
													<input type="file" id="file-photo-pr">
												</form>
											<?php echo '</div>'; ?>

										<?php echo '<form method="post" action="'.$pid.$id.'">'; 

											echo "<input type='hidden' name='xid' value='".$x."'>";
											$ll = $_SESSION['lang'];
										?>
											<h1>ПРОЄКТ UA</h1>

											<label>Заголовок проєкту
											<?php echo '<input type="text" autocomplate="off" name="newtitle" value="'.(json_decode($title)->ua).'" placeholder="Введіть заголовок проєкта"></label>'; ?>

											<label>Опис проєкту
											<?php echo '<textarea name="newdescr" placeholder="Введіть опис тут..." rows="5">'.(json_decode($maindesc)->ua).'</textarea></label>'; ?>

											<label>Автор проєкту
											<?php echo '<input type="text" autocomplate="off" value="'.(json_decode($wr)->ua).'" name="newwr" placeholder="Введіть автора проєкта"></label>'; ?>
										
											<h1 style="margin-top: 40px;">ПРОЄКТ ENG</h1>

											<label>Заголовок проєкту
											<?php echo '<input type="text" autocomplate="off" name="newtitle2" value="'.(json_decode($title)->en).'" placeholder="Введіть заголовок проєкта"></label>'; ?>

											<label>Опис проєкту
											<?php echo '<textarea name="newdescr2" placeholder="Введіть опис тут..." rows="5">'.(json_decode($maindesc)->en).'</textarea></label>'; ?>

											<label>Автор проєкту
											<?php echo '<input type="text" autocomplate="off" value="'.(json_decode($wr)->en).'" name="newwr2" placeholder="Введіть автора проєкта"></label>'; ?>

											<h1 style="margin-top: 40px;">ДАТА ПУБЛІКАЦІЇ ПРОЄКТУ</h1>

											<label>
											<?php echo '<input type="date" autocomplate="off" name="newdate" value="'.$date.'"></label>'; ?>

											<div><button type="submit" name="changemainprset">ЗБЕРЕГТИ</button></div>

										</form>

									</div>
									<div class="forms-library-text-change">

				
										<?php 	

										//print_r($structure);
										///IF WE PUBLISH FROMS STRUCTURE AND THEIR TEXT
										if($structure !== ''){

											//show all blocks
											foreach ($_SESSION['projects-admin'] as $key => $value){
													///print_r($value->id);

													//SQL get from general DB-library admin-panel project design
													$sql_design = "SELECT * FROM `library` WHERE `id` = '".($value->id)."'";
													$design_project = mysqli_query($db, $sql_design);

													$prrow = mysqli_fetch_array($design_project);

													//values projects form
													$titlepra = "YES!";//$_SESSION['projects-admin'][$key]->title;

													//show SQL results got from DB library
													echo '<!-- db saved code of text form fot project #1 -->
															<div class="project-form-text1">
											
																<h1>'.$prrow['name'].'</h1>
																<form action="'.$pid.$id.'" method="post">';

																echo $prrow['code'];

													echo '		<input type="hidden" name="xid" value="'.$x.'">
																<input type="hidden" name="key-save" value="'.$key.'">

																<div>
																	<button type="submit" class="save-admin-project" name="save-pr-admin">ЗБЕРЕГТИ</button>
																</div>
																</form>
															</div>';

													//amount
													echo "<div class='ampr'><span><form action='".$pid.$id."' method='post'><input type='hidden' name='xid' value='".$x."'><input type='hidden' name='key-save' value='".$key."'><button type='submit' class='save-admin-project' name='save-pr-admin'>ЗБЕРЕГТИ</button></form><span class='am-pr-a'>".($key+1)."-ий блок</span></span><form action='".$pid.$id."' method='post'><input type='hidden' name='xid' value='".$x."'><input type='hidden' name='key-del' value='".$key."'><button type='submit' class='del-admin-project' name='del-pr-admin'>ВИДАЛИТИ</button></form></div>";
											
											}

											//additionaly add form save all
											echo "<form class='submainformpr' action='".$pid.$id."' method='post'><input type='hidden' name='xid' value='".$x."'><button type='submit' name='public-pr-admin'>PUBLIC ALL</button><a href='#' class='opfa'>OPEN PAGE</a><button name='delallprad'>DELETE ALL</button></form>";

										}else{

											//if isset session with admin-panel forms
											if(isset($_SESSION['projects-admin'])){
												//PHP for each admin-panel session-froms show design on site

												foreach ($_SESSION['projects-admin'] as $key => $value){	

													//SQL get from general DB-library admin-panel project design
													$sql_design = "SELECT * FROM `library` WHERE `id` = '".($value->id)."'";
													$design_project = mysqli_query($db, $sql_design);

													$prrow = mysqli_fetch_array($design_project);

													//show SQL results got from DB library
													echo '<!-- db saved code of text form fot project #1 -->
															<div class="project-form-text1">
											
																<h1>'.$prrow['name'].'</h1>
																<form action="'.$pid.$id.'" method="post">';

																echo $prrow['code'];

													echo '		<input type="hidden" name="xid" value="'.$x.'">
																<input type="hidden" name="key-save" value="'.$key.'">

																<div>
																	<button type="submit" class="save-admin-project" name="save-pr-admin">ЗБЕРЕГТИ</button>
																</div>
																</form>
															</div>';

													//amount
													echo "<div class='ampr'><span><span class='am-pr-a'>".($key+1)."-ий блок</span></span><form action='".$pid.$id."' method='post'><input type='hidden' name='xid' value='".$x."'><input type='hidden' name='key-del' value='".$key."'><button type='submit' class='del-admin-project' name='del-pr-admin'>ВИДАЛИТИ</button></form></div>";
												}

												//additionaly add form save all
												echo "<form class='submainformpr' action='".$pid.$id."' method='post'><input type='hidden' name='xid' value='".$x."'><button type='submit' name='public-pr-admin'>PUBLIC ALL</button><a href='#' class='opfa'>OPEN PAGE</a><button name='delallprad'>DELETE ALL</button></form>";

											}else{
												
												//design for NULL result
												echo "<div class='no-sections-admin-pr'>СЕКЦІЙ НЕМАЄ<p>Скористайтеся бібліотекою зліва</p></div>";

											}

										}

										?>
										

									</div>
				





						<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
						<script type="text/javascript" src="../main.js"></script>
						<script>
						  AOS.init();
						</script>
						<script src="../paginathing-master/paginathing.js"></script>
					</body>

			<?php 
				}else{

					//if system didnt found any sesion registered admins => make error
					require "../error.php";

				}
			?>


</html>