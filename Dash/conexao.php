<?php

//$loader = require 'vendor/autoload.php';
//$loader->register();

//Env
//$dontenv = Dotenv\Dotenv::createImmutable(__DIR__);
//$dontenv->safeLoad();


//require_once __DIR__ . "/vendor/autoload.php";

//dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//dotenv->load();

$hostname = "localhost";
$bancodedados = ("bd_novo");
$usuario = "root";
$senha = "";

$mysqli= new mysqli($hostname, $usuario, $senha,$bancodedados);
    if (!$mysqli){
        die ("Ocorreu um erro: " . mysqli_connect_error());
    }
?>