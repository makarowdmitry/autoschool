<?php
//Если форма была отправленна, то выводим ее содержимое на экран
if($_POST) {
$to = $_POST['youremail']; // почта, на которую будет приходить письмо galina@agro-personal.ru
$from = $_POST['name'];
$phone = $_POST['phone'];
$metro = $_POST['metro'];


$headers = "Reply-To: ".$to."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: ". $from ." \r\n";
$subject = "Заявка 'Школа вождения'";

$msg = "";
$msg .= $from." <br>";
$msg .= $phone."<br> ";
$msg .= $metro." <br>";



$result = mail($to, $subject, $msg, $headers);
if ($result){ echo "Cообщение успешно отправленно."; }
}

?>