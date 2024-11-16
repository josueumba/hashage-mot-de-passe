<?php
require_once __DIR__ . "/bdd.php";

$retrieveStudents= $mysqlClient-> prepare("SELECT * FROM etudiant");
$retrieveStudents-> execute();
$students= $retrieveStudents-> fetchAll();