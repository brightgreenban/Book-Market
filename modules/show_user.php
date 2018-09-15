<?php
	include('config.php');
    $id = $_REQUEST['id']; 
$sql2 = mysql_query("SELECT * FROM `book_list`  WHERE `id`='$id'", $link);

while ($row = mysql_fetch_array($sql2, MYSQL_NUM)): ?>
        
        <div class="center col-lg-6">
        	<div class="book__items">
                <input type='hidden' name='id' value="<?=$row[0]?>">
                <p>"<?=$row[1]?>"</p>
                <p>by <?=$row[2]?></p>
                <p><?=$row[3]?></p>
                <p><?=$row[4]?></p>
                <p><b>Price: <?=$row[5]?> UAH</b></p>
            </div>
        </div>
<?PHP
endwhile;
mysql_close($link);
?>