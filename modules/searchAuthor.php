<?php

	$author = $_POST['author'];
	
	$sql = mysql_query("SELECT * FROM `book_list` WHERE `author` LIKE '%".$author."%'", $link);
	
		while ($row = mysql_fetch_array($sql, MYSQL_NUM)): include("modules/get_data.php");
endwhile;
mysql_close($link);
?>
