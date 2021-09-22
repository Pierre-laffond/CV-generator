<?php
require_once('../root.php');
if(isset($_POST['addBtn'])){

    addCompetence($_REQUEST);
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
			<h1>Vos Compétences</h1>
			<p>veuillez remplir le formulaire ci-dessous en indiquant vos compténce dans les champs vide.</p>
			<hr>


			<div class="input" style="margin-bottom: 25px;">
			</div>

			<div class="input demi">
				<label for="prenom"><b></b></label>
				<input type="text" name="libCompetence[]">
            </div>
            <div class="input demi">
				<label for="prenom"><b></b></label>
				<input type="text" name="libCompetence[]">
            </div>
            <div class="input demi">
				<label for="prenom"><b></b></label>
				<input type="text" name="libCompetence[]">
            </div>
            <br>
            <div class="input demi">
				<label for="prenom"><b></b></label>
				<input type="text" name="libCompetence[]">
            </div>
            <div class="input demi">
				<label for="prenom"><b></b></label>
				<input type="text" name="libCompetence[]">
			</div>

			<button type="submit" form="inscription" name="addBtn" class="inscription">prochaine étape</button>
		</form>

	</div>
</body>


</html>