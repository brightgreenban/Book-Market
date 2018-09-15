<?php

if($_POST['select'])
{

	$select=$_POST['select'];
	switch ($select)
	{
		case "all":
		$sql2 = mysql_query("SELECT * FROM `book_list`", $link);
		break;

		case "romance":
		$sql2 = mysql_query("SELECT * FROM `book_list` WHERE `genre` LIKE '%Romance%'", $link);
		break;

		case "fantasy":
		$sql2 = mysql_query("SELECT * FROM `book_list` WHERE `genre` LIKE '%Fantasy%'", $link);
		break;

		case "science":
		$sql2 = mysql_query("SELECT * FROM `book_list` WHERE `genre` LIKE '%Science%'", $link);
		break;

		case "horror":
		$sql2 = mysql_query("SELECT * FROM `book_list` WHERE `genre` LIKE '%Horror%'", $link);
		break;

		case "technology":
		$sql2 = mysql_query("SELECT * FROM `book_list` WHERE `genre` LIKE '%Technology%'", $link);
		break;
	}
	while ($row = mysql_fetch_array($sql2, MYSQL_NUM)):
        include("modules/get_data.php");
endwhile;
mysql_close($link);
}

?>