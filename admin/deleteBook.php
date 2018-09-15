<?php
include ('../admin/header.php');
include('../modules/config.php');
    $id = $_REQUEST['id']; 
	$sql222 = mysql_query("DELETE FROM `book_list`  WHERE `id`='$id'", $link);

	if($sql222 == true){
		include ('success.php');
	} else{
		echo "Error";
	}

	mysql_close($link);
 ?>