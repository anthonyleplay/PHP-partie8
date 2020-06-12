<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>

<body>
    <h1>Exercice 2</h1>
    <h2>page1</h2>

    <p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.<br>
        Ces variables auront été définies directement dans le code. <br>
        Il faudra afficher le contenu de ces variables sur la deuxième page.</p>

    <p>===================================</p>
    <a href="page2.php"><span>lien vers page2</span></a><br><br>

    <?php

    $_SESSION["lastname"] = "Le Play";
    $_SESSION["firstname"] = "Anthony";
    $_SESSION["age"] = 33;

    ?>

</body>

</html>