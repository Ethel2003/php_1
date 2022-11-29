<?php

   // //Pour créer un cookie 
   // setcookie('username','John DOE',time()+(20*24*3600));

   // //affichage du cookie
   // print_r($_COOKIE["username"]);

   // //suppression d'un cookie
   // setcookie('username','Nana',time()-1);
   // // unset($_COOKIE['username']);

   //Procédure pour se connecter à une base de données

   //On définit le dsn(data source name/nom de la source de données)
   /**
    * Pour définir le dsn pour une base de données de type MYSQL: mysql:host=nom du serveur puis dbname=nom de la base de données 
    */
   $dsn = "mysql:host=localhost; dbname=highfive";

   // on crée une instance de la classe PDO qui permettra de se connecter à la base de données.
   $conn = new PDO ($dsn, "root", "");
   //root représente le nom d'utilisateur pour se connecter à la bdd après lui on fournit le mot de passe.

   //Pour lancer une requête sql il faut:
   $sql = "DELETE FROM students where students_id = 7;";
   $result = $conn->exec($sql);
   print_r($result);
?>