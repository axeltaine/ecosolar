<?php

include('connectbdd.php');



$req = $bdd->prepare('INSERT INTO `deviseco`(`montant_facture`, `fournisseur`, `chauffage`, `chauffage_eau`, `orientation`, `inclinaison`, `carte`, `surface`, `hauteur`, `age`, `couverture`, `frigo`, `piscine`, `lave_linge`, `lave_vaisselle`, `congelateur`, `cave_a_vin`, `voiture`, `pompe_a_chaleur`, `seche_linge`, `nombre_personne_foyer`, `photo_batiment`, `civilite`, `nom`, `prenom`, `email`, `telephone`, `adresse`, `code_postal`, `ville`, `info_complementaire`) VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? )');
$req->execute(array($_POST['montant_facture'], $_POST['fournisseur'],
$_POST['chauffage'], $_POST['chauffage_eau'],$_POST['orientation'], $_POST['inclinaison'],
$_POST['carte'], $_POST['surface'],$_POST['hauteur'], $_POST['age'],
$_POST['couverture'], $_POST['frigo'],$_POST['piscine'], $_POST['lave_linge'],
$_POST['lave_vaisselle'], $_POST['congelateur'],$_POST['cave_a_vin'], $_POST['voiture'],
$_POST['pompe_a_chaleur'], $_POST['seche_linge'],$_POST['nombre_personne_foyer'], $_POST['photo_batiment'],
$_POST['civilite'], $_POST['nom'],$_POST['prenom'], $_POST['email'],
$_POST['telephone'], $_POST['adresse'],$_POST['code_postal'], $_POST['ville'],$_POST['info_complementaire']
 ));


 ?>
