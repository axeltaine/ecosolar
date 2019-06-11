<?php

require 'fpdf.php';
class PDF extends FPDF
{
  // Page header
function Header()
{
    //--- Modification de la marge gauche ---
    $this->SetLeftMargin(20);
    // Logo
    $this->Image('img/icone-pastille-ecosolar-rvb.png',10,6,30);
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(35); //80 teo aloha
    // Title
    //$this->Cell(30,10,'Dossier étudiant',1,0,'C');
    $this->Cell(100,10,'RECAPITULATIF DU DEVIS',1,0,'C');
    
    // Line break
    $this->Ln(25);//Ln(20);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    $this->Cell(0,10,'Projet ECOSOLAR (c) 2019',0,0,'C');
}

}
//--- ETAPE 1 : Informations sur la consommation ----
$num_fact = $_POST['montant_facture'];
$abo = $_POST['abonnement'];
$fourns = $_POST['fournisseur'];
$chauff = $_POST['chauffage'];
$chauffo = $_POST['chauffage_eau'];

  if ($_POST['orientation'] == 'est' AND $_POST['inclinaison'] == '5')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.93);
  }
  if ($_POST['orientation'] == 'est' AND $_POST['inclinaison'] == '20')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.91);
  }
  if ($_POST['orientation'] == 'est' AND $_POST['inclinaison'] == '35')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.86);
  }
  if ($_POST['orientation'] == 'est' AND $_POST['inclinaison'] == '45')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.82);
  }
  if ($_POST['orientation'] == 'sud_est' AND $_POST['inclinaison'] == '5')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.93);
  }
  if ($_POST['orientation'] == 'sud_est' AND $_POST['inclinaison'] == '20')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.95);
  }
  if ($_POST['orientation'] == 'sud_est' AND $_POST['inclinaison'] == '35')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.96);
  }
  if ($_POST['orientation'] == 'sud_est' AND $_POST['inclinaison'] == '45')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.92);
  }
  if ($_POST['orientation'] == 'sud' AND $_POST['inclinaison'] == '5')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.93);
  }
  if ($_POST['orientation'] == 'sud' AND $_POST['inclinaison'] == '20')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 1);
  }
  if ($_POST['orientation'] == 'sud' AND $_POST['inclinaison'] == '35')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.97);
  }
  if ($_POST['orientation'] == 'sud' AND $_POST['inclinaison'] == '45')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.95);
  }
  if ($_POST['orientation'] == 'sud_ouest' AND $_POST['inclinaison'] == '5')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.93);
  }
  if ($_POST['orientation'] == 'sud_ouest' AND $_POST['inclinaison'] == '20')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.95);
  }
  if ($_POST['orientation'] == 'sud_ouest' AND $_POST['inclinaison'] == '35')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.96);
  }
  if ($_POST['orientation'] == 'sud_ouest' AND $_POST['inclinaison'] == '45')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.92);
  }
  if ($_POST['orientation'] == 'ouest' AND $_POST['inclinaison'] == '5')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.93);
  }
  if ($_POST['orientation'] == 'ouest' AND $_POST['inclinaison'] == '20')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.91);
  }
  if ($_POST['orientation'] == 'ouest' AND $_POST['inclinaison'] == '35')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.86);
  }
  if ($_POST['orientation'] == 'ouest' AND $_POST['inclinaison'] == '45')
  {
    $sum = $_POST['abonnement'] * ($_POST['carte'] * 0.82);
  }

//--- ETAPE 2 Toiture ----
$orient = $_POST['orientation'];
$incli = $_POST['inclinaison'];


//--- ETAPE 3 Localisation bâtiment ----
$cart = $_POST['carte'];
$surf = $_POST['surface'];

//----ETAPE 4 Informations bâtiment ----
$hautr = $_POST['hauteur'];
$long = $_POST['longueur'];
$larg = $_POST['largeur'];
$age = $_POST['age'];
$chartp = $_POST['charpente'];
//$couv = $_POST['Couverture'];

//----ETAPE 5 Vos appareils ----
$frg = $_POST['frigo'];
$psc = $_POST['piscine'];
$lling = $_POST['lave_linge'];
$lvsl = $_POST['lave_vaisselle'];
$conglt = $_POST['congelateur'];
$cav = $_POST['cave_a_vin'];
$voit = $_POST['voiture'];
$pachl = $_POST['pompe_a_chaleur'];
$scling = $_POST['seche_linge'];

//------
$nbrpers = $_POST['nombre_personne_foyer'];
$phot = $_POST['photo_batiment'];


//--- ETAPE 6 Informations personnelles ----
$civil = $_POST['civilite'];
$nom = $_POST['nom']; 
$pren = $_POST['prenom'];
$mail = $_POST['email'];
$adr = $_POST['adresse'];
$cp = $_POST['code_postal'];
$vil = $_POST['ville'];
$infc = $_POST['info_complementaire'];




//********** PDF CREATION PAGE********* */
$pdf = new PDF();
$pdf->AddPage();

$pdf->Ln();
$pdf->SetFont('Times','BI',13);

$pdf->Cell(170,10,' - INFORMATIONS SUR LA CONSOMMATION - ',1,2,'C');
$pdf->SetFillColor(180,180,180);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,10,'Consommation : '.$num_fact,0,10,'L');
$pdf->Cell(0,10,'abonnement : '.$abo,0,10,'L');
$pdf->Cell(0,10,'Fournisseur energie: '.strtoupper($fourns),0,10,'L');
$pdf->Cell(0,10,'Chauffage : '.$chauff,0,10,'L');
$pdf->Cell(0,10,'Chauffe-eau : '.$chauffo,0,10,'L');
$pdf->Cell(0,10,'Production solaire en KWh : '.$sum,0,10,'L');

//--- ETAPE 2 Toiture ----
$pdf->SetFont('Times','BI',13);

$pdf->Cell(170,10,' - TOITURE - ',1,2,'C');
$pdf->SetFillColor(180,180,180);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,10,'Orientation : '.strtoupper($orient),0,10,'L');
$pdf->Cell(0,10,'Inclinaison : '.$incli.' degre',0,10,'L');


//--- ETAPE 3 Localisation bâtiment ----
$pdf->SetFont('Times','BI',13);

$pdf->Cell(170,10,' - LOCATION BATIMENT - ',1,2,'C');
$pdf->SetFillColor(180,180,180);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,10,'Carte : '.strtoupper($cart),0,10,'L');
$pdf->Cell(0,10,'Surface : '.$surf,0,10,'L');

//--- ETAPE 4 Informations bâtiment ----
$pdf->SetFont('Times','BI',13);
$pdf->Cell(170,10,' - INFORMATIONS BATIMENT - ',1,2,'C');
$pdf->SetFillColor(180,180,180);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,10,'Hauteur : '.$hautr,0,10,'L');
$pdf->Cell(0,10,'longueur : '.$long,0,10,'L');
$pdf->Cell(0,10,'largeur : '.$larg,0,10,'L');
$pdf->Cell(0,10,'Age : '.$age,0,10,'L');
$pdf->Cell(0,10,'charpente : '.$chartp,0,10,'L');
//$pdf->Cell(0,10,'Couverture : '.$couv,0,10,'L');


//--- ETAPE 5 Vos appareils ----
$pdf->SetFont('Times','BI',13);
$pdf->Cell(170,10,' - VOS APPAREILS - ',1,2,'C');
$pdf->SetFillColor(180,180,180);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,10,'Frigo : '.$frg,0,10,'L');
$pdf->Cell(0,10,'Piscine : '.$psc,0,10,'L');
$pdf->Cell(0,10,'Lave-linge : '.$lling,0,10,'L');
$pdf->Cell(0,10,'Lave-vaisselle : '.$lvsl,0,10,'L');
$pdf->Cell(0,10,'Congelateur : '.$conglt,0,10,'L');
$pdf->Cell(0,10,'Cave à vin : '.$cav,0,10,'L');
$pdf->Cell(0,10,'Voiture : '.$voit,0,10,'L');
$pdf->Cell(0,10,'Pompe à chaleur : '.$voit,0,10,'L');
$pdf->Cell(0,10,'Seche linge : '.$scling,0,10,'L');

$pdf->Cell(0,10,'Nombre de personne au foyer : '.$nbrpers,0,10,'L');
//$pdf->Cell(0,10,'Seche linge : '.$phot,0,10,'L');


//--- ETAPE 6 Informations personnelles ----
$pdf->SetFont('Times','BI',13);
$pdf->Cell(170,10,' - VOS APPAREILS - ',1,2,'C');
$pdf->SetFillColor(180,180,180);
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,10,'Civilite : '.$civil,0,10,'L');
$pdf->Cell(0,10,'Nom : '.strtoupper($nom),0,10,'L');
$pdf->Cell(0,10,'Prenom : '.$pren,0,10,'L');
$pdf->Cell(0,10,'Email : '.$mail,0,10,'L');
$pdf->Cell(0,10,'Adresse : '.$adr,0,10,'L');
$pdf->Cell(0,10,'Code postal : '.$cp,0,10,'L');
$pdf->Cell(0,10,'Ville : '.strtoupper($vil),0,10,'L');
$pdf->Cell(0,10,'Infos complementaire : '.$infc,0,10,'L');

$pdf->Output('devis/'.strtoupper($nom).'_'.$prenom.'.pdf','D');
//$pdf->Output(strtoupper($nom).'_'.$prenom.'.pdf','D', 'isUTF8');
//$pdf->Output();
?>