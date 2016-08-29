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
   <form action="send_mail2.php"
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
    
</body>
</html>
