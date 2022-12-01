<?php
    session_start();
 /*<?php if ($_SERVER['REQUEST_URI'] !== "/session/accueil.php"):?>*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        *,*::after,
        *::before{
            box-sizing:border-box;
            margin:0;
        }
        div.input:not(:first-child){
            margin-top:1rem;
        }

        .container{
            margin:0 auto;
            padding:2rem;
        }

        input{
            height: 1.5rem;
            border-radius: 6px;
            width: 200px;
            border: 1px solid black;
            
        }
        
        form{
            border:1px solid #b797d1a1;
            border-radius:10px;
            padding-block:2rem;
            background-color:#b797d1a1;
        }

        header{
            display:flex;
            justify-content:space-between; 
            align-items:center;
            background-color: beige;
            padding:1rem;
        }

        ul{
            display:flex;
            justify-content:space-around;
            list-style: none;
            gap:2rem; 
        }

        .form{
            max-width:500px;
            margin:0 auto;
            text-align: center;
            padding:2rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>LOGO</h1>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <?php if(isset($_SESSION["userid"])):?>
                    <li><a href="space.php">My Space</a></li>
                    <li><a href="logout.php">Se Déconnecter</a></li>
                <?php else:?>
                    <li><a href="register.php">S'inscrire</a></li>
                    <li><a href="login.php">Se Connecter</a></li>
                <?php endif;?> 
                
                
            </ul>
        </nav>
    </header>