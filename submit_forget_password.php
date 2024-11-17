<?php
session_start();

require_once __DIR__ . "/variables.php";
require_once __DIR__ . "/fonctions.php";

$postData= $_POST;

$nom= strip_tags($postData["nom"]);

if(isset($nom)) {
    foreach($students as $student) {
        if($student["nom"] == $nom) {
            $_SESSION["connected"]= $nom;
            redirectToUrl("newpassword.php");
            return;
        }
    }

    $_SESSION["error-message"]= "Compte non reconnu";
    redirectToUrl("forget_password.php");
}