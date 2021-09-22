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

    <?php foreach($competences as $key=>$value)
    {
   
        echo "<form method='post' id='VInscription' action='utilisateur_accueil.php'>";
        echo "<br>";
        echo " <h1>Vos compétences</h1>";
        echo "<div class=' containerb'>";
        echo "<input type='text' value='$value->libCompetence'>   ";
    }
    ?>
</div>

        <button type="submit" >Sauvegarder les modifications</button>
        <br><br>
        <a href="modif_CV.php" style="color: blue">Retour</a>
        
    </div>
</div>
        
    