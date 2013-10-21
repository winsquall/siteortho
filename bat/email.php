<script type="text/javascript">
window.setTimeout("location=('http://www.site.chirana.fr/#!/page_contact');",4000);
</script>

  
<?php


$nom = $_POST['name'] ;
$email = $_POST['email'];
$telephone = $_POST['phone'];

$message = $_POST['message'];




 $headers ='From: <'.$nom.'>'."\n";
     $headers .='Reply-To: '.$email.''."\n";
     $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
     $headers .='Content-Transfer-Encoding: 8bit';
	 
	 $message ='<html><head><title>Demande d information</title></head><body>
	 
	 Demande d informations depuis le site wwww.chiranna.fr <br />
	<br />
	 Nom Prenom : '.$nom.' <br />
	 E-mail : '.$email.'<br />
	 Telephone : '.$telephone.'<br /><br />
	 Message : '.$message.'<br />
	 <br />
   Cordialement,<br />
   
   www.chirana.fr<br />
	 
	 </body></html>';

     if(mail('contact@winsquall.fr', 'Demande de renseignements depuis votre site internet' , $message, $headers))
     {
          echo '<center><h3>Votre message a été envoyé. Vous serez recontactez dans les plus brefs délais.</h3></center>';
     }
     else
     {
          echo '<center><h3>Le message n\'a pu être envoyé</h3></center>';
     } 

?>    

