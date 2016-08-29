<?php
$adresse = $_POST["mail"]; 
$objet = $_POST["objet"]; 
$message = $_POST["message"]; 
$headers = 'From: juliette@saint-jalme.fr ' . "\r\n" . 
     'Reply-To: juliette@saint-jalme.fr ' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
mail($adresse, $objet, $message, $headers);
header('Location: send_mail3.php');

/* [Mon Aug 29 10:43:52.891912 2016] [:error] [pid 8078] [client 127.0.0.1:42040] PHP Notice:  Undefined index: mail in /var/www/html/php_challenge1_send_mail/send_mail2.php on line 2, referer: http://localhost/php_challenge1_send_mail/send_mail.php
*/
?>
