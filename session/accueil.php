<?php
    require "header.php"
?>

<main class = "container">

    <?php if(isset($_SESSION['userid'])):?>
        <h2>Bienvenue <?= $_SESSION['username'];?></h2>
    <?php else: ?>
        <h2>Bienvenue sur notre site</h2>
    <?php endif; ?>    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo eveniet iusto ullam error unde eligendi? Praesentium obcaecati iste ipsam soluta tenetur cupiditate fuga consequatur. Corrupti at ut dolorum sequi harum?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione maxime praesentium velit quam suscipit sit repellat veritatis, accusamus quas rem officia fugiat, eius vero consectetur quisquam autem, necessitatibus molestiae illum.</p>
</main>    