<?php
// On démarre la session AVANT d'écrire du code HTML
setcookie('nom', $_POST['nom'], time() + 120, null, null, false, true); // On écrit un cookie
setcookie('prenom', $_POST['prenom'], time() + 120, null, null, false, true); // On écrit un autre cookie...
setcookie('adresse', $_POST['adresse'], time() + 120, null, null, false, true); // On écrit un autre cookie...
setcookie('password', $_POST['password'], time() + 120, null, null, false, true); // On écrit un autre cookie...
setcookie('confirmpassword', $_POST['confirmpassword'], time() + 120, null, null, false, true); // On écrit un autre cookie...
setcookie('stop', $_POST['stop'], time() + 10, null, null, false, true);
// Et SEULEMENT MAINTENANT, on peut commencer à écrire du code html
?>
<!DOCTYPE html PUBLIC>
<html lang="fr" >
    <head>
        <title>Formulaires</title>
        <meta charset=utf-8 />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="col-md-5">
            <form action="formulaire.php" method="post">
                <p>Nom :<input type="text" name="nom" value=""></p>
                <p>Prénom:<input type="text" name="prenom" value=""></p>
                <p>Adresse:<input type="text" name="adresse" value=""></p>         
                <p>password:<input type="password" name="password" value=""></p>
                <p>confirm password:<input type="password" name="confirmpassword" value=""></p>
                <input type="text" name="stop" value="stop" readonly hidden><!-- Envoi d'un cookie pour arrêter le location reload (oui c'est du bricolage) -->
                <p><input type="submit" value="envoyer"></p>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
