<?php 
    require "header.php";
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['login'])){
        $_SESSION["userid"] = 01;
        $_SESSION["username"] = $_POST["username"];
        header("Location: accueil.php");
    }
?>
<div class="form">
        <h2>Login</h2>
        <form action="login.php" method="post">
            
            <!-- User name -->
            <div class="input">
                <input type="text" name="username" placeholder="UserName ou Email">
            </div>

            <!-- Mot de passe -->
            <div class="input">
                <input type="password" name="pwd" placeholder="Mot de passe">
            </div>

            <div class="input">
                <button type="submit" name="login">Connexion</button>
                <button type="reset" name="reset">Rafraîchir</button>
            </div>
        </form>
        <p>Nouveau ?<a href="register.php">Inscrivez-vous!</a></p>
</div>