<?php
require_once __DIR__ . "/bdd.php";
require_once __DIR__ . "/fonctions.php";

$postData= $_POST;

$nom= strip_tags($postData["nom"]);
$password= password_hash(strip_tags($postData["password"]), PASSWORD_DEFAULT, ['cost' => 12]);

if(isset($nom, $password)) {
    $password= password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
    
    $stmt= $mysqlClient-> prepare("INSERT INTO etudiant(nom, passwords) VALUES(:nom, :passwords)");
    $stmt-> execute(['nom' => $nom, 'passwords' => $password]) or die(print_r($mysqlClient->errorInfo()));
}

redirectToUrl('index.php');


?>