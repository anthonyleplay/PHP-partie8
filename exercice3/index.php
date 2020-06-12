<?php
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $loginName = 'login';
    $passName = 'password';
    $passValue = $_POST['password'];

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

            if (!isset($_COOKIE[$loginName]) && !isset($_COOKIE[$passName])) {
                $message = "merci d'entré un Login et un Mot de passe";
            } else {
                $message = "votre login est : " . $_COOKIE[$loginName] . "<br>
                            Votre mot de passe est : " . $_COOKIE[$passName];
            };
        };
    };
};

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3</title>
</head>

<body>
    <h1>Exercice 3</h1>

    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. <br>
        A la validation du formulaire, stocker les informations dans un cookie.</p>
    <a href="index.php"><span style="background-color: lightcoral;">reset</span></a><br><br>

    <p>===================================</p>

    <form action="/exercice3/index.php" method=post>
        <label for="login">login:</label><br>
        <input type="text" id="login" name="login" required><br>
        <label for="password">Mot de Passe:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="envoyer">
    </form><br><br>

    <p><?= $message ?></p>

</body>

</html>