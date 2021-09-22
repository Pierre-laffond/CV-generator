<?php
require_once('../root.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../CSS/style.css" rel="stylesheet">
	<title>CV GENERATOR</title>
</head>

<section>
  <div class="black">CV</div>
  <div class="orange">Gen</div>
</section>
<br>


<body class="grad">
	<div class="container">

		<form method="post" id="connexion" action="">
			<h1>Connexion</h1>
			<p>Pour nous rejoindre et commencer la création de vos CV veuillez vous connecter.</p>
			<hr>
			<div class="input">
			<label for="email"><b>Email</b></label>
				<input type="email" placeholder="email@exemple.fr" name="mail">
			</div><div class="input">
				<label for="mdp"><b>Mot de passe</b></label>
				<input type="password" placeholder="Mot de passe" name="pwd">
			</div>
			
			<p>Vous n'avez pas de compte ? Inscivez-vous <a href="inscription.php" style="color:dodgerblue">ici</a>.</p>

			<div>
			</div>
		</form>

		<button type="submit" form="connexion" name="connexion" class="connexion">Connexion</button>

	</div>
	<?php
if(isset($_POST['connexion'])){
	$code = connexion($_REQUEST);

}
?>
</body>
</html>