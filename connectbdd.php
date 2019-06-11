<?php
try
{
  // On se connecte à MySQL
  $bdd = new PDO('mysql:host=db776288475.hosting-data.io;dbname=db776288475;charset=utf8', 'dbo776288475', '2ku8t5y97');
}
catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
?>
