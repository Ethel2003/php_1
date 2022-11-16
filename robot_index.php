<?php
    
        $arrayofletter = range("A","Z");//range permet de générer un tableau associatif des lettres de l'alphabet
        //print_r($arrayofletter) ;

        //génération de la première lettre et de la seconde
        $firstLetter = rand(0,25);//rand() permet de génerer un nombre aléatoire
        $secondLetter = rand(0,25);

        //génération du nombre à 4lettres
        $number = rand(1000,10000);

        //affichage du message
        echo('Salut, humain. Je suis '.$arrayofletter[$firstLetter].$arrayofletter[$secondLetter]."-".$number.'.<br>');
        $name = [$arrayofletter[$firstLetter],$arrayofletter[$secondLetter],"-",$number];
    
    
    echo('Nous sommes le '.date("d m Y") .', il est '.date("H:i:s") .'.<br>');

    function parity(int $num):string{
        if($num % 2 ==0){
           return ("Ce nombre est pair.");
        }else{
           return ("Ce nombre est impair.");
        }
    }

    $choicenumber = rand(1,10);
    echo("J'ai choisi ".$choicenumber.'.'.parity($choicenumber).'.');

    $arr = array_reverse($name);
    print(join("",$arr));
?>