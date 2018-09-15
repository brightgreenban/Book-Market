<?php
    
    $host="localhost";
    $user="admin";
    $pass="";
    $db_name="id7090859_book";

    $link=mysql_connect($host,$user,$pass);
    $site_url = "http://localhost/denwer/index.php";

    mysql_select_db($db_name,$link);
/*
    if($link)
    {
    	echo "<p>Database status: Connected!</p>";
    }else
    {
    	die("Connection lost!");
    }
*/