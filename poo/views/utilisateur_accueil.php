<?php include('header.php'); 
require_once('../root.php');
$user = $_SESSION['userInfo'];
$experiences = $_SESSION['userExperience'];
$competences = $_SESSION['userCompetence'];
$etudes = $_SESSION['userEtude'];

?>


<br>
<br>

<div class="tete">

<br>
<br>
<br>
<br>

<h4 class="tres">C'est terminé , BIENVENUE <?php   echo $user->prenomUser ; ?>  !</h4>
 

</div>


  <section class="container-boxes">
    <div class="box">

      <div class="text">
        <a href="affiche.php">
          <h3>Voir son CV</h3>
          <p>Vous pouvez maintenant modifier , condulter et imprimer votre CV!</p>
        </a>
      </div>

    </div>



  </section>
  <div class="row">     

  <h3 class="second">

Pour vous aider à trouver un job, un stage, une alternance et pleins d'autres oportunitées.

<h3>
<br>
<br>


<div class="cadre">

        <div class="cadree" align="center">

         <img src="../IMG/job.jpg" height=440px />



</div>

</div>
 


</div>

<h3 class="second">...</h3>


<?php include('footer.php'); ?>