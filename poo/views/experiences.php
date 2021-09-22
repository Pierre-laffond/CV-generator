<?php
require_once('../root.php');
if(isset($_POST['addBtn'])){

    addExperience($_REQUEST);
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
			<h1>Vos Experiences</h1>
			<p>Pour nous rejoindre et commencerà crée vos CV veuillez remplir le formulaire ci-dessous.</p>
			<hr>

			<div class="input demi">
				<label for="Nom"><b>Date de début</b></label>
				<input type="date" name="debutExperience" placeholder="Date">
			</div>

			<div class="input demi">
				<label for="Nom"><b>Date de fin</b></label>
				<input type="date" name="finExperience" placeholder="Date">
			</div>

			<div class="input" style="margin-bottom: 25px;">
			</div>

			<div class="input demi">
				<label for="Nom"><b>Nom de l'entreprise</b></label>
				<input type="text"name="entrepriseExperience" placeholder="Nom">
			</div>

	
<br>
			<label for="subject">Description</label>
			<br>
    <textarea id="subject" name="descriptionExperience" placeholder="Ecrivez quelque chose..." style="width:780px" ;></textarea>

			

			<button type="submit" form="inscription" name="addBtn" class="inscription">prochaine étape</button>
		</form>

	</div>
</body>


</html>