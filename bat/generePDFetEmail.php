<?php
ini_set('memory_limit','512M');
$chiranaDosAppuiTete = $_GET["chiranaDosAppuiTete"];
$chiranaAppuiTete = $_GET["chiranaAppuiTete"];
$chiranaDosDossier = $_GET["chiranaDosDossier"];
$chiranaSiege = $_GET["chiranaSiege"];
$chiranaSousSiege = $_GET["chiranaSousSiege"];
$chiranaPiedSiegeHaut = $_GET["chiranaPiedSiegeHaut"];
$chiranaPiedSiegeBas = $_GET["chiranaPiedSiegeBas"];
$chiranaPiedAvant = $_GET["chiranaPiedAvant"];
$chiranaPiedArriere = $_GET["chiranaPiedArriere"];
$chiranaPedale = $_GET["chiranaPedale"];
$chiranaBrasSiege = $_GET["chiranaBrasSiege"];
$chiranaTabletteSiege = $_GET["chiranaTabletteSiege"];
$chiranaTabletteKart = $_GET["chiranaTabletteKart"];
$chiranaPiedKart = $_GET["chiranaPiedKart"];


		
		


// On va renvoyer une image jpeg
  header('Content-Type: jpeg');
  // Création de l'image (vierge)
  //$rendu = imagecreatetruecolor(2539, 1831);
  $rendu = imagecreatetruecolor(2539, 1831);
  $dest = imagecreatetruecolor(1270, 916);
  // On met le fond en blanc par défaut
  $fond = imagecolorallocatealpha($rendu,  255, 255, 255, 0);
  imagefill($rendu, 0, 0, $fond);
  // On active l'alphablending
  imagealphablending($rendu, true);
  // On charge le ou les image(s) png
  $image1 = imagecreatefrompng('../images/appliconfig/baseNBKARTFiligrane.png');
  imagecopy($rendu, $image1, 0, 0,0,0, 2539, 1831);
    //imagecopyresampled($rendu, $image1, 0, 0, 0, 0, 1270, 916, 2539,1831);
    imagedestroy($image1);
    
    
  if ('CHIRANA : NC' != $chiranaBrasSiege &&'56029' != $chiranaBrasSiege ){
  $image2 = imagecreatefrompng('../images/appliconfig/brasSiege' .$chiranaBrasSiege. '.png');
 imagecopy($rendu, $image2, 0, 0,0,0, 2539, 1831);
 // imagecopyresampled($rendu, $image2, 0, 0, 0, 0, 1270, 916, 2539,1831);
 imagedestroy($image2);
  }
  if ('CHIRANA : NC' != $chiranaDosAppuiTete &&'56029' != $chiranaDosAppuiTete ){
    $image3 = imagecreatefrompng('../images/appliconfig/dosAppuiTete' .$chiranaDosAppuiTete. '.png');
    imagecopy($rendu, $image3, 0, 0,0,0, 2539, 1831);
    imagedestroy($image3);
    }
    if ('CHIRANA : NC' != $chiranaAppuiTete &&'56029' != $chiranaAppuiTete ){
      $image4 = imagecreatefrompng('../images/appliconfig/AppuiTete' .$chiranaAppuiTete. '.png');
      imagecopy($rendu, $image4, 0, 0,0,0, 2539, 1831);
      imagedestroy($image4);
      }
      if ('CHIRANA : NC' != $chiranaDosDossier &&'56029' != $chiranaDosDossier ){
        $image5 = imagecreatefrompng('../images/appliconfig/dosDossier' .$chiranaDosDossier. '.png');
        imagecopy($rendu, $image5, 0, 0,0,0, 2539, 1831);
        imagedestroy($image5);
        }
        if ('CHIRANA : NC' != $chiranaSiege &&'56029' != $chiranaSiege ){
          $image6 = imagecreatefrompng('../images/appliconfig/siege' .$chiranaSiege. '.png');
          imagecopy($rendu, $image6, 0, 0,0,0, 2539, 1831);
          imagedestroy($image6);
          }
           if ('CHIRANA : NC' != $chiranaSousSiege &&'56029' != $chiranaSousSiege ){
            $image7 = imagecreatefrompng('../images/appliconfig/sousSiege' .$chiranaSousSiege. '.png');
            imagecopy($rendu, $image7, 0, 0,0,0, 2539, 1831);
            imagedestroy($image7);
            }
            if ('CHIRANA : NC' != $chiranaPiedSiegeHaut &&'56029' != $chiranaPiedSiegeHaut ){
              $image8 = imagecreatefrompng('../images/appliconfig/barreHautSiege' .$chiranaPiedSiegeHaut. '.png');
              imagecopy($rendu, $image8, 0, 0,0,0, 2539, 1831);
              imagedestroy($image8);
              }
               if ('CHIRANA : NC' != $chiranaPiedSiegeBas &&'56029' != $chiranaPiedSiegeBas ){
                $image9 = imagecreatefrompng('../images/appliconfig/barreBasSiege' .$chiranaPiedSiegeBas. '.png');
                imagecopy($rendu, $image9, 0, 0,0,0, 2539, 1831);
                imagedestroy($image9);
                }
                if ('CHIRANA : NC' != $chiranaPiedAvant &&'56029' != $chiranaPiedAvant ){
                $image10 = imagecreatefrompng('../images/appliconfig/piedAvant' .$chiranaPiedAvant. '.png');
                imagecopy($rendu, $image10, 0, 0,0,0, 2539, 1831);
                imagedestroy($image10);
                }
                if ('CHIRANA : NC' != $chiranaPiedArriere &&'56029' != $chiranaPiedArriere ){
                $image11 = imagecreatefrompng('../images/appliconfig/piedArriere' .$chiranaPiedArriere. '.png');
                imagecopy($rendu, $image11, 0, 0,0,0, 2539, 1831);
                imagedestroy($image11);
                }
                 if ('CHIRANA : NC' != $chiranaPedale &&'56029' != $chiranaPedale ){
                $image12 = imagecreatefrompng('../images/appliconfig/pedale' .$chiranaPedale. '.png');
                imagecopy($rendu, $image12, 0, 0,0,0, 2539, 1831);
                imagedestroy($image12);
                }
                if ('CHIRANA : NC' != $chiranaTabletteSiege &&'56029' != $chiranaTabletteSiege ){
                $image13 = imagecreatefrompng('../images/appliconfig/tabletteSiege' .$chiranaTabletteSiege. '.png');
                imagecopy($rendu, $image13, 0, 0,0,0, 2539, 1831);
                imagedestroy($image13);
                }
                if ('CHIRANA : NC' != $chiranaTabletteKart &&'56029' != $chiranaTabletteKart ){
                $image14 = imagecreatefrompng('../images/appliconfig/tabletteKart' .$chiranaTabletteKart. '.png');
                imagecopy($rendu, $image14, 0, 0,0,0, 2539, 1831);
                imagedestroy($image14);
                }
                 if ('CHIRANA : NC' != $chiranaPiedKart &&'56029' != $chiranaPiedKart ){
                $image15 = imagecreatefrompng('../images/appliconfig/piedKart' .$chiranaPiedKart. '.png');
                 imagecopy($rendu, $image15, 0, 0,0,0, 2539, 1831);
                 imagedestroy($image15);
                }
  
              
 
  // On déactive l'alphablending
  imagealphablending($rendu, false);
  // Sauvegarde des données alpha
  imagesavealpha($rendu, true);
  $rendu = imagerotate($rendu, 270, 0);
  imagecopyresampled($dest, $rendu, 0, 0, 0, 0, 1270, 916, 2539,1831);
  // Enfin, on rend l'image
  imagejpeg($dest,'../images/temp.jpg',100);

require('../fpdf/fpdf.php');

$pdf = new FPDF('P','mm','A4');
$pdf->SetTitle('Résumer de votre configuration',true);
$pdf->AddPage();
$pdf->SetXY(10, 10);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,15,'Résumé de votre configuration de Siege Chirana FD',0,0,'C' );
$pdf->SetXY(40, 30);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(60,15,'Partie du siège',1,0,'C' );
$pdf->Cell(60,15, 'Numéro de couleur',1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Dos Appui Tete',1,0,'C' );
$pdf->Cell(60,15, $chiranaDosAppuiTete,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Appui Tete',1,0,'C');
$pdf->Cell(60,15, $chiranaAppuiTete,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Dos Dossier',1,0,'C');
$pdf->Cell(60,15, $chiranaDosDossier,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Siege',1,0,'C');
$pdf->Cell(60,15, $chiranaSiege,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Sous Siege',1,0,'C');
$pdf->Cell(60,15, $chiranaSousSiege,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Pied Siege Haut',1,0,'C');
$pdf->Cell(60,15, $chiranaPiedSiegeHaut,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Pied Siege Bas',1,0,'C');
$pdf->Cell(60,15, $chiranaPiedSiegeBas,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Pied Avant',1,0,'C');
$pdf->Cell(60,15, $chiranaPiedAvant,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Pied Arriere',1,0,'C');
$pdf->Cell(60,15, $chiranaPiedArriere,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Pedale',1,0,'C');
$pdf->Cell(60,15, $chiranaPedale,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Bras Siege',1,0,'C');
$pdf->Cell(60,15, $chiranaDosAppuiTete,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Tablette Siege',1,0,'C');
$pdf->Cell(60,15, $chiranaTabletteSiege,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Tablette Kart',1,0,'C');
$pdf->Cell(60,15, $chiranaTabletteKart,1,0,'C');
$pdf->Ln(15);
$pdf->SetX(40);
$pdf->Cell(60,15,'Pied Kart',1,0,'C');
$pdf->Cell(60,15, $chiranaPiedKart,1,0,'C');

$pdf->Line(10, 260, 200, 260);
$pdf->Ln(25);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(0,10, 'ORTHOSERVICES SARL au capital de 5000€, 261 Les Agranas 13560 Sénas',0,0,'C');

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('../images/temp.jpg', 10, 10);


$pdf->Line(10, 260, 200, 260);
$pdf->Ln(255);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(0,10, 'ORTHOSERVICES SARL au capital de 5000€, 261 Les Agranas 13560 Sénas',0,0,'C');





//$pdf->WriteHTML($html);

$content = $pdf->Output('', 'S');

$content = chunk_split(base64_encode($content));
$mailto = 'contact@chirana.fr';
$from_name = $_GET['nom'];
$from_mail = $_GET['email'];
$tel = $_GET['tel'];
$replyto = $_GET['email'];
$uid = md5(uniqid(time())); 
$subject = 'Configuration de siège sur le site www.chirana.fr';
$message = 'Bonjour,

Veuillez trouver ci-joint la configuration effectuée par '.$from_name.' sur le site www.chirana.fr.

E-mail : '.$from_mail.'
Tel : '.$tel.'

Cordialement,

'.$from_name;
$filename = 'OrthoservicesConfigurationSiege'.$from_name.'.pdf';

$header = "From: ".$from_name." <".$from_mail.">\r\n";
$header .= "Reply-To: ".$replyto."\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
$header .= "This is a multi-part message in MIME format.\r\n";
$header .= "--".$uid."\r\n";
$header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
$header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$header .= $message."\r\n\r\n";
$header .= "--".$uid."\r\n";
$header .= "Content-Type: application/pdf; name=\"".$filename."\"\r\n";
$header .= "Content-Transfer-Encoding: base64\r\n";
$header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
$header .= $content."\r\n\r\n";
$header .= "--".$uid."--";
$is_sent = @mail($mailto, $subject, "", $header);






    
  header('Location: http://www.site.chirana.fr/#!/configurateurSiege');      






?>