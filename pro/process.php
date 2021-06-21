<?php
$to = "rahulgaur200086@gmail.com";
$Subject=$_POST['subject'];
$email = $_POST['email'];

$name = $_POST['name'];
$comment = $_POST['comment'];

$headers = "Content-type: text/html;\r\n";
$headers = "From: $email";

if (mail($to, $Subject ,$comment ,$headers)) {
	echo "Thank You $name";
}

else{
	echo "Can't Send it...";
}
?>