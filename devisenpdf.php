<?php
 // INCLUDE THE phpToPDF.php FILE
require("phpToPDF.php");

// PUT YOUR HTML IN A VARIABLE
$my_html="<HTML>
<h1>Votre simulation personnalisée</h1><br>
<h2>...Mr, Mrs...</h2><br><br>
<img scr='img/icone-pastille-ecosolar-rvb.png'/>


<h3>Vos informations</h3>

<h4>Votre consommation</h4>
<u>Votre fournisseur d'énergie:</u> ... <br>
<u>Votre consommation annuelle:</u> ... <br>
<u>Type de chauffage:</u> ... <br>
<u>Type de chauffe-eau:</u> ... <br>

<h4>Vos appareils</h4>
Vous disposez de ......
Votre foyer est composé de ... personnes.

<h4>Votre toiture</h4>
Son orientation est ...et son inclinaison est de ... degrés.
La surface de votre toit est d'environ: ...

<h4>Informations du bâtiment</h4>
Sa hauteur est de ...
Sa couverture est en ...

<h4>Informations personnelles</h4>
Mr/Mrs  nom  prenom
Votre email est bien ....
votre numéro de téléphone est ...
Votre adresse actuelle: ... code postal:...

</HTML>";

// SET YOUR PDF OPTIONS -- FOR ALL AVAILABLE OPTIONS, VISIT HERE:  http://phptopdf.com/documentation/
$pdf_options = array(
  "source_type" => 'html',
  "source" => $my_html,
  "action" => 'download',
  "file_name" => 'mon_devis.pdf',
  "page_size" => 'A4');

// CALL THE phpToPDF FUNCTION WITH THE OPTIONS SET ABOVE
phptopdf($pdf_options);


?>
