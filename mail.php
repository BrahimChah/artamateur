<?php
	$destinataire = 'desvaux.brendon@gmail.com'; // mais qui va recevoir le mail de "contact"
	// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
	$expediteur = 'support@fscf-yonne.fr'; // adresse mail du site
	//$copie = 'adresse@fai.com'; //Si besoin d'une deuxiemme adresse
	//$copie_cachee = 'adresse@fai.com';
	$objet = 'Commentaire fscf de '.'   ' . ' ' .$_POST['nom']. ' ' .$_POST['prenom']; // Objet du message
	$headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
	$headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
	$headers .= 'From: "'.$_POST['nom'].' '.$_POST['prenom'].'"<'.$expediteur.'>'."\n"; // Expediteur
	$headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire     
	$message = 'Bonjours'."\n\n"; //Debut du message. Les "\n\n" servent à revenir à la ligne.
	$message .= 'Vous avez reçu ce message de la part de :'.' '.$_POST['nom'].' '.$_POST['prenom']."\n\n";
	$message .= 'Message recu:'."\n\n".$_POST['msg']."\n\n";
	$message .= 'Le joindre par téléphone:'.' '.$_POST['tel'];
	if (isset($_POST['valider'])) { // si appuis sur le bouton valider
	
		if (mail($destinataire, $objet, $message, $headers)) // si il y a envoi du message
		{
			require('confirmmail.php'); // alors on nous redirige sur une page de confirmation d'envoie
		}
		else // si le message est non envoyé
		{
			require('errormail.php'); // alors on nous redirige sur une page de d'erreur d'envoie.
		}
	}
?>
