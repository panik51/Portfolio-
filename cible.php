<!doctype html>
<html lang="fr" class="no-js">
	<head>
		<meta charset="UTF-8">
	</head>
<body>
<?php

if(isset($_POST) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])){
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])){
		$destinataire = "william.servenay@gmail.com";
		$sujet = "Demande de contact";
		$message = "Nom : ".$_POST['name']."\r\n";
		$message = "Adresse email : ".$_POST['email']."\r\n";
		$message = "Message : ".$_POST['text']."\r\n";
		$entete = 'From: '.$_POST['email']."\r\n".
        	'Reply-To: '.$_POST['email']."\r\n".
		'X-Mailer: PHP/'.phpversion();
		if (mail($destinataire,$sujet,$message,$entete)){
			echo 'Message envoyé';
		} else {
 			echo "Une erreur est survenue lors de l'envoi du formulaire par email";
		}
	}
}

?>
</body>
</html>