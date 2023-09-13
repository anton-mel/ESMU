<?php


/*add views*/
$sql_get_views = "SELECT `views` FROM `projects` WHERE `id` = '$id_project'";
$result_get_views = mysqli_fetch_array(mysqli_query($db, $sql_get_views));

if(!isset($result_get_views[0])){
	$sql_add_views = "INSERT INTO `projects`(`views`) VALUES '1' WHERE `id` = '$id_project'";
	mysqli_fetch_array(mysqli_query($db, $sql_add_views));
}else{
	$count = $result_get_views[0]+1;
	$sql_add_views = "UPDATE `projects` SET `views` = '$count' WHERE `id` = '$id_project'";
	mysqli_query($db, $sql_add_views);
}

$sql_get_views2 = "SELECT `views` FROM `projects` WHERE `id` = '$id_project'";
$views = mysqli_fetch_array(mysqli_query($db, $sql_get_views2));

?>