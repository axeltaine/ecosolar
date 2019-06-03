<?php

include('connectbdd.php');
/*
$montant_facture = isset($_POST['facture']) ? $_POST['facture'] : NULL;
$orientation = isset($_POST['orientation']) ? $_POST['orientation'] : NULL;
$inclinaison = isset($_POST['inclinaison']) ? $_POST['inclinaison'] : NULL;
$surface = isset($_POST['surface']) ? $_POST['surface'] : NULL;


$fournisseur= $_POST['fournisseur'];
$chauffage = $_POST['chauffage'];
$chauffage_eau = $_POST['chauffage_eau'];
$carte= $_POST['carte'];
$hauteur= $_POST['hauteur'];
$age = $_POST['age'];
$couverture= $_POST['couverture'];
$frigo = $_POST['frigo'];
$piscine = $_POST['piscine'];
$lave_linge = $_POST['lave_linge'];
$lave_vaisselle = $_POST['lave_vaisselle'];
$congelateur = $_POST['congelateur'];
$cave_a_vin = $_POST['cave_a_vin'];
$voiture = $_POST['voiture'];
$pompe_a_chaleur = $_POST['pompe_a_chaleur'];
$seche_linge = $_POST['seche_linge'];
$nombre_personne_foyer = $_POST['nombre_personne_foyer'];
$photo_batiment = $_POST['photo_batiment'];
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];
$ville = $_POST['ville'];
$info_complementaire = $_POST['info_complementaire'];

$req = $bdd->prepare('INSERT INTO deviseco (montant_facture,	fournisseur,	chauffage,	chauffage_eau,	orientation,	inclinaison,	carte,	surface,	hauteur,	age,	couverture,
  	frigo,	piscine	lave_linge,	lave_vaisselle,	congelateur,	cave_a_vin,	voiture,	pompe_a_chaleur,	seche_linge,	nombre_personne_foyer,	photo_batiment,	civilite,	nom,	prenom,	email,	telephone,	adresse,	code_postal,	ville,	info_complementaire
) VALUES(?,?,?,?,?, ?,?,?,?,?,?,?,?,?,?, ?,?,?,?,?,?,?,?,?,?, ?,?,?,?,?,?,?)');
$req->execute(array(
  $montant_facture,
  $fournisseur,
  $chauffage,
  $chauffage_eau,
  $orientation,
  $inclinaison,
  $carte,
  $surface,
  $hauteur,
  $age,
  $couverture,
  $frigo,
  $piscine,
  $lave_linge,
  $lave_vaisselle,
  $congelateur,
  $cave_a_vin,
  $voiture,
  $pompe_a_chaleur,
  $seche_linge,
  $nombre_personne_foyer,
  $photo_batiment,
  $civilite,
  $nom,
  $prenom,
  $email,
    	$telephone,
      	$adresse,
        	$code_postal,
  $ville,
        $info_complementaire));

echo 'ok';

*/

$req = $bdd->prepare('INSERT INTO `visiteur` (civilite, nom, prenom, mail, telephone, adresse, code_postal, ville) VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['civilite'], $_POST['nom'], $_POST['prenom'], $_POST['telephone'], $_POST['adresse'], $_POST['code_postal'], $_POST['ville']));

 ?>
