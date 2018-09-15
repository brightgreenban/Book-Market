<?php

include ('../admin/header.php');
include('../modules/config.php');
if(isset($_POST['submit'])){
    $id = $_REQUEST['id'];
    $name = mysql_real_escape_string($_POST['name']);
    $author = mysql_real_escape_string($_POST['author']);
    $review = mysql_real_escape_string($_POST['review']);
    $genre = mysql_real_escape_string($_POST['genre']);
    $price = mysql_real_escape_string($_POST['price']);

    $sql5 = mysql_query("UPDATE `book_list` SET `name` = '$name', `author` = '$author', `review` = '$review', `genre` = '$genre', `price` = '$price' WHERE `id`='$id'", $link);

    include ('success.php');

}
    mysql_close($link);
?>