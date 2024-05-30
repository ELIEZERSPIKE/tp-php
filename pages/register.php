<?php if(isset($_COOKIE["id"])){
    header('Location: ./discussions.php');
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>DSend</title>
</head>
<body>
    <?php require_once("../includes/menubar.php") ?>

    <div class="auth-cover-form">
        <form action="/brief/processing/authentication.php" method="post">

            <h1 class="text-center">S'inscrire</h1>

            <p class="text-center">Renseignez les informations liées au compte que vous êtes sur le point de créer</p>

            <?php if(isset($_GET['email']) && $_GET['email'] == "error") { ?>
                <div class="alert-error">Email Invalide ou déjà utilisé.

                </div>
              <?php }  ?>

              <?php if(isset($_GET['password']) && $_GET['password'] == "error") { ?>
                <div class="alert-error">Les deux mots de passes saisis ne sont pas valides.

                </div>
              <?php }  ?>

              <input type="hidden" name="source" value="register">

              <label for="email">E-mail</label>
              <input type="email" placeholder="Saisir ici l'e-mail ..." id="email" name="email" required minlength="6" maxlength="50">
              <br/><br/>

              <label for="password">Mot de passe</label>
            <input type="password" placeholder="Saisir le mot de passe ici ... " id="password" name="password" required minlength="6" maxlength="50"/><br />

              <label for="confirm_password">Confirmer mot de passe</label>
              <input type="password" placeholder="Confirmer  le mot de passe ..." id="confirm_password" name="confirm_password" required minlength="6" maxlength="50">
              <br/><br/>

              <button class="button w-100">
                S'incrire
             </button>

             <p>Dejà inscrit(e)?, <a href="/brief">Connectez-vous</a></p>
                
             </form>
            </div>
        </body>
    </html>