<?php

$servername = "localhost";
$dbname = "ecosolar";
$username = "charf11";
$password = "pioupiou";

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=$servername;dbname=$dbname;charset=utf8', $username, $password);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessag);
}
?>
