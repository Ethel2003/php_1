<?php
     $name = $fname = $age = $mail = " ";

    $name = $_POST["nom"];
    $fname = $_POST["prenom"];
    $age = $_POST["age"];
    $mail = $_POST["mail"]; 

    $errorfname = $errorlname = $errormail = $errorage =" ";
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        if(empty($_POST["nom"]))
        {
            $errorlname=" Votre nom est requis!";
        }
    

        if(empty($_POST["prenom"]))
        {
            $errorfname=" Votre prénom est requis!";
        }
            
        if(empty($_POST["age"]))
        {
            $errorage=" Votre âge est requis!";
        }

        if(empty($_POST["mail"]))
        {
            $errormail=" Votre mail est requis!";
        }
        
    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *,
        *::after,
        *::before{
            box-sizing:border-box;
            margin:0 auto;
        }

        .container{
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:2rem;
        }

        .input::after{
            content:"*";
            color:red;
            font-weight:bold;
        }

        form {
            padding:2rem;
            display: flex;
            flex-direction: column;
            gap: 20px;
            background-color: #cfe2fa;
            border:1px solid black;
            border-radius:10px;
            width:323px;
            height:500px;
            /*box-shadow: 10px 10px 5px transparent;*/  
        }   

        input {
            padding: 10px;
            font-size: 16px;
            border:none;
            border-bottom: 1px solid black; 
            color: var(--clr-secondary);
            background-color:transparent;
            transition: 0.5s;
            
        }

        input:focus{
            border: 2px solid var(--clr-light);

        }

        p{
            color:red;
        }

        .button{
            border:1px solid black;
            /* border-style:none; */
            border-radius:3px;
            background-color:white;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <p> * Champ obligatoire</p>
        <div class="input">
            <input type="text"  class="input"  name="nom" placeholder="Votre Nom " value = "<?php echo $name ?>">
            <span> <?php echo $errorlname ?></span>
        </div>

        <div class="input">
            <input type="text"  class="input"  name="prenom" placeholder="Votre Prénom" value = "<?php echo $fname ?>" >
            <span> <?php echo $errorfname ?></span>
        </div>
        
        <div class="input">
            <input type="number" name="age" placeholder="Votre âge" value = "<?php echo $age ?>">
            <span> <?php echo $errorage ?></span>
        </div>

        <div class="input">
            <input type="email" id="email" name="mail" class="input" placeholder=" Votre Email" value = "<?php echo $mail ?>">
            <span> <?php echo $errormail ?></span>
        </div>
                
        <div>
            <input type="password" name="mpd" id="password" placeholder="Password">
        </div>
        
        <div>
            <input class="button" type="submit" value = "Valider"> 
            <input class="button" type="reset" value = " Reset">
        </div>
    </form>
    </div>
    
</body>
</html>