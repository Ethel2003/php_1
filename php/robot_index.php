<?php
    require './generic_function.php';
    //génération du nom de façon aléatoire et affichage du nom
    $result=randomName();
    echo('Salut, humain. Je suis '.$result.'.<br>');
       
    //affichage de la date par le robot 
    echo afficheDate();

    //choix d'un nombre de façon aléatoire et vérification de sa parité
    echo parity();
    
    //inversion du nom du robot
    echo nameReverse($result);
   

    // echo strrev($result);
?>