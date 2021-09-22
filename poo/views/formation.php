<?php
require_once('../root.php');
if(isset($_POST['addBtn'])){

    addEtude($_REQUEST);
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
    <h2>Add Etude</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="dip">Diplome</label>
            <input type="text" class="form-control" id="dip" placeholder="Entrer votre diplome" name="diplomeEtude">
        </div>
        <div class="form-group">
            <label for="year">Annee:</label>
         <select class="form-control" name="anneeEtude">
            <?php

            for($i=1950;$i<2021;$i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
         </select>
        </div>
        <div class="form-group">
            <label for="ecole">Ecole</label>
            <input type="text" class="form-control" id="ecole" placeholder="Entrer votre ecole" name="ecoleEtude">
        </div>

        <input type="submit" class="inscription" name="addBtn" value="Add etude" />
    </form>
    </div>
</body>


</html>