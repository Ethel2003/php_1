<?php

    $array = ['bonjour','Alarme','Karma', 'djfgmq85(', 'sjhqhfqkq8/*965'];
    for ($i=0; $i < count($array); $i++) { 
        if(!preg_match("/^[a-zA-Z-' ]*$/",$array[$i])){
            echo $array[$i]."ne respecte pas la casse autorisée.<br>";
        }
    }

?>
