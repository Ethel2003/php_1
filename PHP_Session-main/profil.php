<?php
require "./header.php";
?>

<h2>Votre Profil</h2>
<p>id : <strong><?php echo $_SESSION["userid"]; ?></strong></p>
<p>Firstname : <strong><?php echo $_SESSION["firsname"]; ?></strong></p>
<p>Lastname : <strong><?php echo $_SESSION["lastname"]; ?></strong></p>
<p>UserEmail : <strong><?php echo $_SESSION["useremail"]; ?></strong></p>

<?php
require "./footer.php";
?>