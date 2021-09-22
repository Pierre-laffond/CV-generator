<?php
require_once('../root.php');
$user = $_SESSION['userInfo'];
$experiences = $_SESSION['userExperience'];
$competences = $_SESSION['userCompetence'];
$etudes = $_SESSION['userEtude'];

?>


<!DOCTYPE html>
<html>
<head>
    <title>CV-Generator</title>
    <meta name="viewport" content="width=device-width" />
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="CSS/accueil.css"> -->
    <link rel="stylesheet" href="../CSS/style.css">
</head>
 
<?php include('header.php');?>

<div class="container">

    <?php foreach($experiences as $key=>$value)
    {
   
        echo "<form method='post' id='VInscription' action='utilisateur_accueil.php'>";
        echo "<br>";
        echo " <h1>Vos Expériences</h1>";
        echo "<div class=' containerb'>";
        echo " <label>Poste occupé : </label>";
        echo "<input type='text' value='$value->descriptionExperience'>   ";
        echo "<label>Date de début</label>";
        echo "<input type='date' Value='$value->debutExperience'/>";
        echo "<label>Date de fin</label>";
        echo "<input type='date' Value='$value->finExperience'/>";
        echo "<label>Quel entreprise ?</label>";
        echo "<input type='texte' Value='$value->entrepriseExperience'/>";

    }
    ?>
</div>

        <button type="submit" >Sauvegarder les modifications</button>
        <br><br>
        <a href="modif_CV.php" style="color: blue">Retour</a>
        
    </div>
</div>
        
    