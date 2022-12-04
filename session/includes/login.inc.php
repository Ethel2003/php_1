<?php
    require "../classes/loginController.php";
    require "../classes/LoginModel.php";

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])){
        $input = $_POST["login"];
        $pwd =  $_POST["pwd"];

        $loginctrl = new LoginController($input, $pwd);
        $loginctrl->emptyInputs();
    
        $loginmodel = new LoginModel($input, $pwd);
        $loginmodel -> loginUser();
    
        header("Location:../accueil.php?msg=success");
    }else{
        header("Location:../login.php?msg=invalidInput");
    }

?>