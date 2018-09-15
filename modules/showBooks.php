<?php
	
$sql2 = mysql_query("SELECT * FROM `book_list`", $link);

while ($row = mysql_fetch_array($sql2, MYSQL_NUM)): include("modules/get_data.php");
endwhile;
mysql_close($link);
?>