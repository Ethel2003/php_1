<?php
    $fname = $lname = $mail = " " ;
    $age = 0;

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $fname = $_POST['prenom'];
        $lname = $_POST['nom'];
        $age = $_POST['age'];
        $mail = $_POST['mail'];
    }

    $dsn = "mysql:host=localhost; dbname=mydatabase";
    
    // try{
    //     //
    //     $conn = new PDO($dsn, "root", "");
    //     $sql = "INSERT INTO mydatabase.users (userFirstname, userLastname, userEmail, userAge) VALUES ('$fname','$lname','$mail', $age);";
    //     $conn -> exec($sql);
    //     header("Location: ./exo_bdd.php");//permet de rediriger sur une autre page;
    // }catch(PDOException $e){
    //     echo 
    //     "erreur...". $e->getMessage();
    // }

    //première manière de faire une requête préparée
    // try{
    //     $conn = new PDO($dsn, "root", "");
    //     $sql = "INSERT INTO users(userFirstname, userLastname, userEmail, userAge) VALUES (?, ?, ?, ?)";
    //     $stmt = $conn->prepare($sql);
    //     $stmt->execute([$fname,$lname,$mail, $age]);
    //     header("Location: ./exo_bdd.php");//permet de rediriger sur une autre page;
    // }catch (PDOException $e){
    //     echo "erreur...".$e->getMessage();
    // }

    //second way to do the same thing
    try {
        $conn = new PDO($dsn, "root", "");
        $sql = "INSERT INTO users(userFirstname, userLastname, userEmail, userAge) VALUES (:fname, :lname, :mail, :age);";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
           [ ":fname"=>$fname,
            ":mail"=>$mail,
            ":lname"=>$lname,
            ":age"=>$age]
        );
        header("Location: ./exo_bdd.php?msg=success");//permet de rediriger sur une autre page;
    }catch (PDOException $e){
        // echo "erreur...".$e->getMessage();
        header("Location: ./exo_bdd.php?msg=failure");//permet de rediriger sur une autre page;

    }

?>