<?php
    require "header.php";

    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['Register'])){
        $_SESSION["userId"] = 01;
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["firstname"] = $_POST["firstname"];
        $_SESSION["lastname"] = $_POST["lastname"];
        $_SESSION["usermail"] = $_POST["email"];

    }
?>

<div class="form">
    <h2>Inscription</h2>
    <form action="./includes/register.inc.php" method="post">
        <!-- First name -->
        <div class="input">
            <input 
            type="text" 
            name="firstname" 
            placeholder="First Name" 
            value="<?php echo $_GET["firstname"] ?? '';?>">
        </div>

        <!-- Last name -->
        <div class="input">
            <input 
            type="text" 
            name="lastname" 
            placeholder="Last Name" 
            value="<?php echo $_GET["lastname"] ?? '';?>"
            >
        </div>

        <!-- User name -->
        <div class="input">
            <input 
            type="text" 
            name="username" 
            placeholder="User Name" 
            value="<?php echo $_GET["username"] ?? '';?>">
        </div>

        <!-- Mail -->
        <div class="input">
            <input 
            type="email" 
            name="email" 
            placeholder="Email" 
            value="<?php echo $_GET["mail"] ?? '';?>">
        </div>

        <!-- Mot de passe -->
        <div class="input">
            <input 
            type="password" 
            name="pwd" 
            placeholder="Mot de passe" 
            required>
        </div>

        <!-- Confirmation Mot de passe -->
        <div class="input">
            <input 
            type="password" 
            name="pwd_confirm" 
            placeholder="Confirmez votre mot de passe" 
            required>
        </div>

        <div class="input">
            <button type="submit" name="Register">S'inscrire</button>
            <button type="reset" name="reset">Rafraîchir</button>
        </div>

        <p>Déjà inscrit ?<a href="./login.php">Connectez-vous!</a></p>
    </form>
</div>
 