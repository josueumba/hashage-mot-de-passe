<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
</head>
<body>
    <h3>Recherche compte</h3>

    <form action="submit_forget_password.php" method="post">
        <?php if(isset($_SESSION["error-message"])): ?>
            <p><?php echo $_SESSION["error-message"] ; unset($_SESSION["error-message"]) ; ?></p>
        <?php endif; ?>
        <input style="width:200px" type="text" name="nom" id="" placeholder="Entrer votre nom"><br><br>
        <button type="submit">Vérifier</button>

    </form>
</body>
</html>