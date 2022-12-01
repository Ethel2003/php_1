<?php 
    require "header.php";
?>
<div>
    <h2>Welcome <?=$_SESSION["username"]?></h2>
    <em>
        <h3>Vos identifiants sont:</h3>
        <p>Nom d'utilisateur: <?=$_SESSION["username"]?></p>
        <p>Nom: <?= $_SESSION["lastname"]?> </p>
        <p>Prénom: <?= $_SESSION["firstname"]?> </p>
    </em>
</div>