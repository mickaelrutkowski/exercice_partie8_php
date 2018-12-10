<?php
setcookie('nom', $_POST ['nom'], time() + 10, null, null, false, true); // On écrit un cookie
setcookie('prenom', $_POST ['prenon'], time() + 10, null, null, false, true); // On écrit un autre cookie...
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
                <p><input type="submit" value="envoyer"></p>
            </form>
        </div>
    <p>
        <a href="formulaire.php">Lien vers formulaire.php</a><br />
    </p>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
