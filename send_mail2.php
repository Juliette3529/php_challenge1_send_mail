<?php
if (    isset($_POST["mail"])
        AND isset($_POST["mail"])
        AND isset($_POST["mail"]) )
{
$adresse = $_POST["mail"]; 
$objet = $_POST["objet"]; 
$message = $_POST["message"]; 
$headers = 'From: juliette@saint-jalme.fr ' . "\r\n" . 
     'Reply-To: juliette@saint-jalme.fr ' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
mail($adresse, $objet, $message, $headers);
header('Location: send_mail3.php');
}
else {
   echo '<h2>ECHEC</h2>';;
};

?>
