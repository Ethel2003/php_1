<?php
    //opérateur null coalescent 
    $msg = $_GET["msg"] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <?php if ($msg ==="success"):?>
        <div> Vous avez été bien enregistré!!</div>
    <?php endif; ?>

    <?php if ($msg ==="failure"):?>
        <div> Désolé, réessayez à nouveau!!</div>
    <?php endif; ?>
    <h1>Exercice sur la connexion de bdd</h1>
    <form action="server.php" method="POST">
        <div class="input">
            <input type="text"  class="input"  name="nom" placeholder="Votre Nom ">
        </div>

        <div class="input">
            <input type="text"  class="input"  name="prenom" placeholder="Votre Prénom">
           
        </div>
        
        <div class="input">
            <input type="number" name="age" placeholder="Votre âge">
        </div>

        <div class="input">
            <input type="email" id="email" name="mail" class="input" placeholder=" Votre Email" >
        </div>
        <input class="button" type="submit" value = "Valider"> 
</body>
</html>