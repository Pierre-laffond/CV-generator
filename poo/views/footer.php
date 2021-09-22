<?php
if(isset($_POST['decc'])){
    $code = decconexion();
    header('Location: Accueil.php');
}
?>

<form method="post" id="connexion" action="../index.php">
<button type="submit" class="deco"> Déconnexion</button>
</form>
</body>
</html>