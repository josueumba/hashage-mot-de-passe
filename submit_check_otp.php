<?php
session_start();

require_once __DIR__ . "/bdd.php";
require_once __DIR__ . "/variables.php";
require_once __DIR__ . "/fonctions.php";

$postData= $_POST;

$otp= $postData["otp"];
$nom= $_SESSION["connected"];
$password= $_SESSION["new_password"];

if(isset($otp)) {
    foreach($students as $student) {
        if($otp == $student["otp"]) {
            $stmt= $mysqlClient-> prepare("UPDATE etudiant SET passwords= :passwords WHERE nom= :nom");
            $stmt-> execute(["passwords" => $password, "nom" => $nom]) or die(print_r($mysqlClient->errorInfo()));

            redirectToUrl("password_changed.php");

            return;
        }
    }

    $_SESSION["error-message"]= "Code incorrect";

    redirectToUrl("check_otp.php");
}