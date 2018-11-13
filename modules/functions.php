<?php

function get_connection()
{

	$host="localhost";
    	$user="root";
    	$pass="";
    	$db_name="books";
	
	$link=mysql_connect($host,$user,$pass) or die(mysql_error());

	mysql_select_db($db_name,$link) or die(mysql_error());
	
}

?>
