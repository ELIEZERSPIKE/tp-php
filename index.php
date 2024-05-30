<?php if(isset($_COOKIE["id"])){
    header('Location: ./pages/discussions.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>DSend</title>
</head>
<body>
    <?php 
     require_once("./includes/menubar.php")
    
    ?>
    <div class="auth-cover-form">
        <form action="/brief/processing/authentication.php" method="post">
            <h1>Se connecter</h1>

            <p classs="text-center">Renseignez vos paramètres de connexion dans le champ saisi ...</p>

            <?php if (isset($_GET['auth']) && $_GET['auth'] == "error"){ ?>
                <div class="alet-error">
                L'addresse  email ou le mot de passe que vous avez saisis ne sont pas valides. 
                </div>
            <?php } ?>

           

            <label for="email">E-mail</label>

              <input type="email" placeholder="Saisir ici l'e-mail ..." id="email" name="email" required minlength="6" maxlength="50">
              <br/><br/>

              <input type="hidden" name="source" value="login">

              <label for="password">Mots de passe</label>
              <input type="password" placeholder="Saisir ici le mot de passe ..." id="password" name="password" required minlength="6" maxlength="50">
              <br/><br/>

              <button class="button w-100">
                Se connecter
              </button>
            
              <p>
                Pas encore de compte, <a href="./pages/register.php">Inscrivez_vous.</a>
              </p>

             


        </form>

    </div>
    
</body>
</html>
