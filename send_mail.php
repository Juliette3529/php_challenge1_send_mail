<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire pour mail</title>
    <link href="elements/bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="elements/send_mail.css"/>
</head>
<body class="block_2">
 <div class="col-md-offset-4 col-md-5">
  <h3> Postez votre mail!</h3>
  </div>
  <div class="col-md-offset-2 col-md-8">
   <form action="send_mail.php"
           method="post">
           <div class="form-group">
            <label>Adresse : </label> 
				<input type="mail" class="form-control" name="mail" placeholder="Joe@Doe.com"/>
            <label>objet : </label> 
				<input type="texte" class="form-control" name="objet" placeholder="objet"/>
            <label>texte : </label> 
				<textarea type="text" class="form-control" name="message" maxlength="1000" placeholder="Votre message!"></textarea>
       </div>
            <input type="submit" class="btn btn-default" value ="Valider"/>
</form>

</div>
   <?php
if (    isset($_POST["mail"])
        AND isset($_POST["objet"]) )
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
if (empty($_POST["mail"])
   AND empty($_POST["objet"])) {
   echo '<h5>Veuillez remplir les champs suivants :</h5>';
};

?>
    
</body>
</html>
