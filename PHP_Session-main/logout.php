<?php
// $id = session_id();
session_start(); // récupérer l'ancienne session
// unset($id);// vider le contenu de la session
// session_unset();
session_destroy();// destruire ou supprimer la session
session_start();
header("Location: ./public.php");