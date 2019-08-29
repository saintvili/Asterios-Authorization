<?php 
$an_token = $_GET['access_token'];
$an_id = $_GET['user_id'];
$an_photo = $_GET['photo'];
$an_email = $_GET['email'];


// Redicet to Auth Page (http://Your_Domain/auth.php)


header("HTTP/1.1 301 Moved Permanently");
header('Location: http://'.$_SERVER['HTTP_HOST'].'/auth.php?token='.$an_token.'&id='.$an_id.'&photo='.$an_photo.'&email='.$an_email);
exit();
?>