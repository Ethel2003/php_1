<?php
// echo session_save_path(); // retourner le chemin où sont sauvegardés les sessions
session_start(); // cré une session (fichier avec vos données) | récupère les données dans un fichier existant

// $_SESSION["userid"] = "10";
// $_SESSION["firsname"] = "John";
// $_SESSION["lastname"] = "Doe";
// $_SESSION["username"] = "John123";
// $_SESSION["useremail"] = "John@test.com";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP login management</title>
    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: beige;
        }

        ul {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        
        li {
            
        }
    </style>
</head>

<body>
    <header>
        <div>LOGO</div>
        <ul>
            <li><a href="./public.php">Accueil</a></li>
            <!-- <li><a href="register.php">S'inscrire</a></li> -->
            <?php if (isset($_SESSION["userid"])) : ?>
                <li><a href="profil.php">Mon profil</a></li>
                <li><a href="logout.php">Se déconnecter</a></li>
            <?php else : ?>
                <li><a href="register.php">Se connecter</a></li>
                <?php endif; ?>
            </ul>
        </header>