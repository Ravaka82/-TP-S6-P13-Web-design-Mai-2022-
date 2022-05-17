<?php
 $errore = null;
  if(isset($_GET["errore"]))
{
  $errore = $_GET["errore"];
}
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>ACTUALITE</title>
    <link href="assets/css/style2.css" rel="stylesheet" />
  </head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="traitementLogin.php" method="post">
      <h1>CONNEXION ADMIN</h1>
      <input type="text" placeholder="login" name="login" />
      <input type="password" placeholder="mdp" name="mdp" />
      <button type="submit" class="btn btn-danger">VALIDER </button>
     
      <p class="errore" for="erreur">
        <?php 
                if($errore==1)
              {
                  echo "Login Failled";
              }
          ?>
      </p>
    </form>
     <p class="message"><a href="index.php">retour a la page d'accueil</a></p>
  </div>
</div>
</body>
</html>
