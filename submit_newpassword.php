<?php
session_start();

require_once __DIR__ . "/bdd.php";
require_once __DIR__ . "/variables.php";
require_once __DIR__ . "/fonctions.php";

$postData= $_POST;

$password1= strip_tags($postData["password1"]);
$password2= strip_tags($postData["password2"]);

if(isset($password1, $password2)) {
    if($password1 == $password2) {
        $password1= password_hash($password1, PASSWORD_DEFAULT, ['cost' => 12]);
        $otp= generateOtp();

        $stmt= $mysqlClient-> prepare("UPDATE etudiant SET otp= :otp WHERE nom= :nom");
        $stmt-> execute(["otp" => $otp, "nom" => $_SESSION["connected"]]) or die(print_r($mysqlClient->errorInfo()));

        $_SESSION["new_password"]= $password1;

        redirectToUrl("check_otp.php");
        return;

    }

    $_SESSION["error-message"]= "Les mot de passe ne sont pas identiques";
    redirectToUrl("newpassword.php");
}