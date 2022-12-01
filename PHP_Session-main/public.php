<?php
    require "./header.php";
?>

    <?php if (isset($_SESSION["userid"])) : ?>
        <h2>Bienvenue <?php echo $_SESSION["username"] ?></h2>
    <?php endif; ?>

    <p>Cette page est accessible à tout le monde.</p>
    <?php if (isset($_SESSION["userid"])) : ?>
        <p><a href="./private.php">Accedez à la page privée</a></p>
    <?php endif; ?>

<?php
    require "./footer.php";
?>