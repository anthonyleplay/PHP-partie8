<?php

$message = "";

    // collect value of input field
    $loginName = 'login';
    $passName = 'password';

    if (!isset($_COOKIE[$loginName]) && !isset($_COOKIE[$passName])) {
        $message = "merci d'entré un Login et un Mot de passe";
    } else {
        $message = "votre login est : " . $_COOKIE[$loginName] . "<br>
                    Votre mot de passe est : " . $_COOKIE[$passName];
    };


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>

<body>
    <h1>Exercice 4</h1>
    <h2>page2</h2>

    <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</p>
    <p>(EXO3 : Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. <br>
        A la validation du formulaire, stocker les informations dans un cookie.)</p>

    
    <a href="page2.php"><span style="background-color: lightcoral;">reset</span></a><br><br><br>
    <a href="index.php"><span style="background-color: lightgreen;">lien vers page1</span></a><br><br>

    <p>===================================</p>


    <p><?= $message ?></p>

</body>

</html>