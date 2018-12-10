<?php 
setcookie('nom', $_POST['nom'], time() + 120, null, null, false, true); // On écrit un cookie
setcookie('prenom', $_POST['prenom'], time() + 120, null, null, false, true); // On écrit un autre cookie...
setcookie('adresse', $_POST['adresse'], time() + 120, null, null, false, true); // On écrit un autre cookie...
setcookie('password', $_POST['password'], time() + 120, null, null, false, true); // On écrit un autre cookie...
setcookie('confirmpassword', $_POST['confirmpassword'], time() + 120, null, null, false, true); // On écrit un autre cookie...
setcookie('stop', $_POST['stop'], time() + 10, null, null, false, true);
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
        <?php
        if ($_COOKIE['stop'] != 'stop'){
        ?>
        <script>location.reload();</script>
        <?php
        }else{
        $recupInfo = $_COOKIE['nom'] . ' ' . $_COOKIE['prenom'] . ' ' . $_COOKIE['adresse'] . ' ' . $_COOKIE['password'] . ' ' . $_COOKIE['confirmpassword'];
        $info = [];
         array_push($info, $recupInfo);
        foreach ($info as $key => $value){
        echo $value;
            }
        }
        ?>        
        <p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page index.php.</p>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
