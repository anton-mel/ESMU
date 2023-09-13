<?php
	if (!isset($_SESSION['lang']))
		$_SESSION['lang'] = "ua";
	else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
		if ($_GET['lang'] == "en")
			$_SESSION['lang'] = "en";
		else if ($_GET['lang'] == "ua")
			$_SESSION['lang'] = "ua";
	}

	require_once "languages/".$_SESSION['lang'].".php";
?>