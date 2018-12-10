<?php
$timestamp = time() + 10; // Le cookie a une durée
setcookie('nom', $_POST ['nom'], $timestamp); // On écrit un cookie
setcookie('prenom', $_POST ['prenom'], $timestamp); // On en écrit un autre cookie...
// Vous remarquez que tout est bien noté avant le début du code HTML
setcookie('prenom', 'Cristobal', $timestamp);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <p>
            Hé ! Je me souviens de toi !<br />
            Tu t'appelles <?php echo htmlspecialchars($_COOKIE['nom'] . ' ' . $_COOKIE['prenom']); ?> c'est bien ça ?
        </p>
        <p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page index.php.</p>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>