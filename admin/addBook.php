<?php
include ('../admin/header.php');
include ('../modules/functions.php');

get_connection();

if(isset($_POST['submit'])){

    $name = mysql_real_escape_string($_POST['name']);
    $author = mysql_real_escape_string($_POST['author']);
    $review = mysql_real_escape_string($_POST['review']);
    $genre = mysql_real_escape_string($_POST['genre']);
    $price = mysql_real_escape_string($_POST['price']);

    $add = mysql_query("INSERT INTO `book_list` (`name`, `author`, `review`,`genre`,`price`) VALUES ('$name', '$author', '$review', '$genre', '$price')");
 
    if ($add == true)
    {
        include ('../admin/success.php');
        
    }
    else
    {
        echo "Error";
        mysql_close();
    }
}

mysql_close();

?>