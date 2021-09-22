<?php
include('header.php');
$user = $_SESSION['userInfo'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/contact.css">
</head>

<div class="ctcmail">
<h3 class="second">Contactez-nous<h3>

</div>

<div class="container">
    <label for="fname">First Name </label>
    <input type="text" name="firstname" placeholder="Your name.." value="<?php echo $user->prenomUser  ?>">

    <label for="lname">Last Name</label>
    <input type="text" name="lastname" placeholder="Your last name.."value="<?php echo $user->nomUser ?>">


    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Ecrivez quelque chose..." style="height:200px"></textarea>

    <a href="mailto:webmaster@example.com"> <input type="submit" value="Envoyer" ></a>
    
</div>
</html>