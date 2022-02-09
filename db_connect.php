<?php

$host = "localhost";
$user = "root";
// $pass = "rubik";
$pass = "R3c0rd!DF@";
$database = "driver";

$connection_string = 'mysql:host=' . $host . ';dbname=' . $database;

// Necessário descomentar a linha 934 "extension = pdo_mysql do arquivo php-ini (copie o ini-development, crie o php-ini e cole os dados)
$pdo = new PDO($connection_string, $user, $pass);

$success_message = "<script type='text/javascript'>console.log('Conectado com sucesso!')</script>";
$error_message =  "<script type='text/javascript'>console.log('Falha ao conectar!')</script>";
// 
$pdo ? print($success_message) : print($error_message);
