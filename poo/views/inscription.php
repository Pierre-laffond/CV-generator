<?php
require_once('../root.php');
if(isset($_POST['btnInscription'])){

    addUser($_REQUEST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../CSS/style.css" rel="stylesheet">
	<title>CV generator</title>
</head>

<section>
	<div class="black">CV</div>
	<div class="orange">Gen</div>
</section>


<body class="grad">

	<div class="container">

		<form method="post" id="inscription" action="">
			<h1>Inscription</h1>
			<p>Pour nous rejoindre et commencerà crée vos CV veuillez remplir le formulaire ci-dessous.</p>
			<hr>


			<div class="input" style="margin-bottom: 25px;">
			</div>

			<div class="input demi">
				<label for="Nom"><b>Nom</b></label>
				<input type="text" placeholder="Nom" name="nomUser" >
			</div>

			<div class="input demi">
				<label for="prenom"><b>Prenom</b></label>
				<input type="text" placeholder="Prenom" name="prenomUser" >
			</div>

			<div class="input demi">
				<label for="Nom"><b>Date de naissance</b></label>
				<input type="date" placeholder="Date" name="naissanceUser	">
			</div>
			
			<div class="input demi">
				<label for="email"><b>Email</b></label>
				<input type="email" placeholder="email@exemple.fr" name="emailUser">
			</div>

			<div class="input demi">
				<label for="mdp"><b>Mot de passe</b></label>
				<input type="password" placeholder="Mot de passe" name="passwordUser">
			</div>

			<div class="input demi">
				<label for="phoneNumber"><b>Numéro de téléphone</b></label>
				<input type="tel" placeholder="Numéro de téléphone" name="telUser">
			</div>

			<br>
			<label for="Nom"><b>Adresse</b></label>
			<br>
			<br>
			<div class="input demi">
				<input type="number" placeholder="numero de rue" name="numRueUser">
			</div>
			<div class="input demi">
				<input type="text" placeholder="Rue" name="nomRueUser">
			</div>
			<div class="input demi">
				<input type="text" placeholder="Ville" name="villeUser">
			</div>
			<div class="input demi">
				<input type="number" placeholder="code postal" name="cpUser">
			</div>

			<div class="input demi">
				<input type="text" placeholder="Pays" name="paysUser">
			</div>
			<br>
			<br>



			<p>Déjà membre ? Connectez-vous <a href="Accueil.php" style="color:dodgerblue">ici</a>.</p>
           
			<input type="submit" name="btnInscription" value="prochaine étape">
            
		</form>

	</div>
</body>


</html>