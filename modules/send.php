<?php

$name = $_POST['name'];

$to .= 'orderbook@bookstorage.online';

$subject = 'Письмо с bookstorage.online';

$message = $_POST['name'] . '<br />' . $_POST['id'] . '<br />' . $_POST['adress'] . '<br />' . $_POST['count'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$headers .= 'To: Alexander <fmvgdsgn@gmail.com>' . "\r\n";
$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['mail'] . '>' . "\r\n";

mail($to, $subject, $message, $headers);
$mess = "$name, your message was send.";

echo "<center><p class='text'>".$mess."</p>
<p>Expect manager's reply</p>
<p>
<a id='admin__item' href='../index.php'>Back Home
</a>
</p>";

?>