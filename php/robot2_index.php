<?php 
 if (isset($_GET["robotName"]) && !empty($_GET["robotName"])) {
    echo('Salut, humain. Je suis '.$_GET["robotName"].'.<br>');

    require './generic_function.php';
    //affichage de la date par le robot 
    echo afficheDate();

    //choix d'un nombre de façon aléatoire et vérification de sa parité
    echo parity();
    
    //inversion du nom du robot
    echo nameReverse($_GET["robotName"]);

 } else {
    # code...
    require './robot_index.php'; 
}
?>
 


