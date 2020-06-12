<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1</title>
</head>

<body>
    <h1>Exercice 1</h1>

    <p>Faire une page HTML permettant de donner à l'utilisateur :</p>
    <ul>
        <li>son User Agent</li>
        <li>son adresse ip</li>
        <li>le nom du serveur</li>
    </ul>

    <p>===================================</p>
    <?php var_dump($_SERVER)?>

    <p><?= $_SERVER['HTTP_USER_AGENT'];?></p>

    <p><?= $_SERVER['SERVER_ADDR'];?></p>

    <p><?= $_SERVER['SERVER_NAME'];?></p>

    

</body>

</html>