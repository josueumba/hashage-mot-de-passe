<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau mot de passe</title>
</head>
<body>
    <h3>Nouveau mot de passe</h3>

    <form action="submit_newpassword.php" method="post">
        <?php if(isset($_SESSION["error-message"])): ?>
            <p><?php echo $_SESSION["error-message"] ; unset($_SESSION["error-message"]) ; ?></p>
        <?php endif; ?>
        <input style="width:200px" type="password" name="password1" id="" placeholder="Entrer le nouveau mot de passe"><br><br>
        <input style="width:200px" type="password" name="password2" id="" placeholder="Confirmer le mot de passe"><br><br>
        <button type="submit">Confirmer</button>

    </form>
</body>
</html>