<?php
    require "../classes/RegisterController.php";
    require "../classes/RegisterModel.php";
    // require "../classes/connexion.php";

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Register"])){
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $mail = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["pwd"];
        $passwordConfirm = $_POST["pwd_confirm"];

        // Contrôle des données entrées par l'utilisateur
        $registerCtrl = new RegisterController($fname, $lname, $username, $mail, $password, $passwordConfirm);
        $registerCtrl->validateInputs();
        //Connexion à la base
        $registerMdl = new RegisterModel($fname, $lname, $username, $mail, $password);
        $registerMdl->registerUser();

        //redirection de l'utilisateur inscrit sur la page de login
        header("Location: ../login.php?msg=success");
    }else{
        header("Location: ../register.php");
    }
?>