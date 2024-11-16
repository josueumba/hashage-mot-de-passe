<?php
require_once __DIR__ . "/bdd.php";
require_once __DIR__ . "/redirect.php";

$postData= $_POST;

$nom= strip_tags($postData["nom"]);
$password= strip_tags($postData["password"]);

if(isset($nom, $password)) {
    $password= password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
    
    $stmt= $mysqlClient-> prepare("INSERT INTO etudiant(nom, password) VALUES(:nom, :passwords)");
    $stmt-> execute(['nom' => $nom, 'passwords' => $password]) or die(print_r($mysqlClient->errorInfo()));
}

redirectToUrl('index.php');


?>