<?php

    $name = $fname = $mail = $pwd = $tel =" ";

    $name = $_POST["lname"];
    $fname = $_POST["fname"];
    $mail = $_POST["mail"];
    $pwd = $_POST["pwd"];
    $tel = $_POST["Tel"];

    $errorfname = $errorlname = $errormail = $errorpwd = " ";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($name)){
            $errorlname = "Your lastname is required!";
        }else{
            if(!preg_match("/^[a-zA-Z-']*$/",$name)){
                $errorlname = "Your name must have only letters and whitespaces.";
            }
        }

        if(empty($fname)){
            $errorfname = "Your firstname is required!";
        }else{
            if(!preg_match("/^[a-zA-Z-']*$/",$fname)){
                $errorfname = "Your firstname must have only letters and whitespaces.";
            }
        }

        if(empty($mail)){
            $errormail= "Your email is required!";
        }else{
            if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
                $errormail = "Your mail are incorrect!";
            }
        }

        if(mb_strlen($errorpwd) < 8){
            $errorpwd = "Your password must have more than 8 characters!";
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
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
        <div> 
            Lastname: <input type="text" name="lname" value = "<?= $name ?>">
            <span>*<?= $errorlname ?></span>
        </div> 
        <div>
            Firstname: <input type="text" name="fname" value = "<?= $fname ?>">
            <span>*<?= $errorfname ?></span>
        </div> 
        <div>
            Email: <input type="email" name="mail" value = "<?= $mail ?>">
            <span>*<?= $errormail ?></span>
        </div> 
        <div>
            Tel: <input type="tel" name="Tel" value = "<?= $tel ?>">
        </div> 
        <div>
            Password: <input type="password" name="pwd">
            <span>*<?= $errorpwd ?></span>
        </div> 
        <div>
            Repeat your password: <input type="password" name="pwd">
        </div> 
        <button type="submit">Submit</button>
    </form>
        <div>
            <p>Welcome <?= $name ." ".$fname ."<br>"; ?></p>
            <p> Your email are :<?= $mail  ."<br>";?></p>
            <p> Your password are <?= $pwd  ."<br>";?></p>
    </div>
</body>
</html>