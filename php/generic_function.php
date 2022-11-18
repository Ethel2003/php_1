<?php 
 function afficheDate(){
    return('Nous sommes le '.date("d m Y") .', il est '.date("H:i:s") .'.<br>');
 } 

 function parity():string{
    $choicenumber = rand(1,10);
    if($choicenumber % 2 ==0){
       return ("J'ai choisi ".$choicenumber.'.Ce nombre est pair.<br>');
    }else{
       return ("J'ai choisi ".$choicenumber.'.Ce nombre est impair.<br>');
    }
}

function randomName(){
    // global $name;
    $arrayofletter = range("A","Z");//range permet de générer un tableau associatif des lettres de l'alphabet
    //print_r($arrayofletter) ;

    //génération de la première lettre et de la seconde
    $firstLetter = rand(0,25);//rand() permet de génerer un nombre aléatoire
    $secondLetter = rand(0,25);

    //génération du nombre à 4lettres
    $number = rand(1000,10000);

    $name = $arrayofletter[$firstLetter].$arrayofletter[$secondLetter]."-".$number;
    return $name;
}    

function nameReverse($name){
    // $arr = array_reverse(str_split($result));
    // print(join("",$arr));
    return "Mon nom à l'envers s'écrit ".strrev($name) . '.Ah. Ah. Ah.';
}


?>