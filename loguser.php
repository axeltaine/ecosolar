<?php

include ('connectbdd.php');

$pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : NULL;
$pass = isset($_POST['pass']) ? $_POST['pass'] : NULL;


//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, pass FROM users WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = $_POST['pass'] == $resultat['pass'];

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';

}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        header("Location: page_admin.php");
    }
    else {
        echo 'retry';
    }
}
