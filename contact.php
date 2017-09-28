<?php require('include/header.php'); ?>	
	<div class="container">					
		<section> <!-- Début du contenu principal -->       
			<h1 class="title"> NOUS<br>CONTACTER </h1>
			<p class="horaire"> Nos horaires d'ouvertures sont du Lundi au Vendredi : de 9h00 à 17h00.</p>
			<div class="row"> <!-- Formulaire de contact -->
				<form class="col-md-6" action="mail.php" method="post" onsubmit="return comparaison2()">
					<div class="form-group">
						<label for="nomcont">Nom <span>*</span>:</label>
						<input type="text" class="form-control" id="nomcont" name="nom" />
					</div>
					<div class="form-group">
						<label for="prenomcont">Prénom <span>*</span>:</label>
						<input type="text" class="form-control" id="prenomcont" name="prenom" />
					</div>
					<div class="form-group">
						<label for="mailcont">Email <span>*</span>:</label>
						<input type="email" class="form-control" id="mailcont" name="mail" />
					</div>
					<div class="form-group">
						<label for="telcont">Téléphone <span>*</span>:</label>
						<input type="tel" class="form-control" id="telcont" name="tel" />
					</div>
					<div class="form-group">
						<label for="comment">Votre message <span>*</span>:</label>
						<textarea class="form-control" rows="3" id="comment" name="msg" ></textarea>
					</div>
					<input type="submit" value="Valider" class="btn btn-danger" name="valider"/> <!-- bouton d'envoie -->
				</form>           
				
			</div>                          
		</section>
	</div>	
</div> <!-- balise fermée ici pour que la div avec l'id container ne soit pas prise en compte dans le footer -->

<script src="js/scriptcontact.js" type="text/javascript"></script>
<?php require ('include/footer.php'); ?>