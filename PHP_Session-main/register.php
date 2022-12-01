<?php

session_start(); // cré une nouvelle session

$_SESSION["userid"] = "10";
$_SESSION["firsname"] = "John";
$_SESSION["lastname"] = "Doe";
$_SESSION["username"] = "John123";
$_SESSION["useremail"] = "John@test.com";

header("Location: ./public.php?msg=success");
