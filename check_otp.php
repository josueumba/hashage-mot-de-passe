<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Vérification</title>
</head>
<body>
    <h3>Code de Vérification</h3>

    <form action="submit_check_otp.php" method="post">
        <?php if(isset($_SESSION["error-message"])): ?>
            <p><?php echo $_SESSION["error-message"] ; unset($_SESSION["error-message"]) ; ?></p>
        <?php endif; ?>
        <input style="width:200px" type="number" name="otp" id="" placeholder="Entrer le code reçu"><br><br>
        <button type="submit">Confirmer</button>

    </form>
</body>
</html>