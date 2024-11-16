<?php
session_start();
require_once __DIR__ . "/redirect.php";
require_once __DIR__ . "/variables.php";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connected Success</title>
</head>
<body>
    <h1>BIENVENUE <?php echo $_SESSION["nom"]; ?> </h1>
    <button><a href="index.php">OK</a></button>
</body>
</html>