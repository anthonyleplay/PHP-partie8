<?php

    // collect value of input field
    $loginName = 'login';
    $passName = 'password';

    if (empty($_POST[$loginName])) {
        $message = "merci d'entré un Login et un Mot de passe";
    } else {
        $loginValue = $_POST[$loginName];

        if (empty($_POST[$passName])) {
            $message = "merci d'entré un Login et un Mot de passe";
        } else {
            $passValue = $_POST[$passName];
            setcookie($loginName, $loginValue, time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie($passName, $passValue, time() + (86400 * 30), "/"); // 86400 = 1 day
        };
    };

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
</head>

<body>
    <h1>Exercice 5</h1>
    <h2>page1</h2>

    <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
    <p>(EXO3 : Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. <br>
        A la validation du formulaire, stocker les informations dans un cookie.)</p>

    
    <a href="index.php"><span style="background-color: lightcoral;">refresh page 1</span></a><br><br><br>
    <a href="page2.php"><span style="background-color: lightblue;">lien vers page2</span></a><br><br>

    <p>===================================</p>

    <form action="/exercice5/index.php" method="post">
        <label for="login">login:</label><br>
        <input type="text" id="login" name="login" required><br>
        <label for="password">Mot de Passe:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="envoyer">
    </form><br><br>


</body>

</html>