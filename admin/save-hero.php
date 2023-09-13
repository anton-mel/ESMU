<?php

//setings
if(isset($_POST['sub_save_hero'])){
	//get value

	//UA
	$name1 = $_POST['name-hero1'];
	$cat1 = $_POST['cat-hero1'];
    $descr1 = $_POST['descr1'];

	//ENG
	$name2 = $_POST['name-hero2'];
	$cat2 = $_POST['cat-hero2'];
    $descr2 = $_POST['descr2'];

    //superadmin && mail
    $super = $_POST['super'];
    $mail = $_POST['mail'];

	//make object to DB
	$mainname = array(
		'ua' => $name1,
		'en' => $name2
	);
	$maincat = array(
		'ua' => $cat1,
		'en' => $cat2
	);
	$maindescr = array(
		'ua' => $descr1,
		'en' => $descr2
    );

	//last str json value to DB
	$namelang = json_encode($mainname, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
	$catlang = json_encode($maincat, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
    $descrlang = json_encode($maindescr, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);

	$sql1 = "UPDATE `heroes` SET `name`='$namelang', `title`='$descrlang', `links`='$mail', `superadmin`='$super', `catt`='$catlang' WHERE `id`='$id'";
	mysqli_query($db, $sql1);
}

?>