<?php
session_start();
require_once __DIR__ . "/bdd.php";
require_once __DIR__ . "/redirect.php";
require_once __DIR__ . "/variables.php";

$postData= $_POST;

$nom= strip_tags($postData["nom"]);
$password= strip_tags($postData["password"]);

if(isset($nom, $password)) {
    foreach($students as $student) {
        if($nom == $student['nom'] && password_verify($password, $student['password'])) {
            $_SESSION['nom']= $student['nom'];
            redirectToUrl('connected.php');
            return;
        }
    }

    redirectToUrl('connection.php');
    
}