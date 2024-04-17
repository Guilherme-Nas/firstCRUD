<?php

$servername = 'localhost';
$username = 'admin';
$password = 'admin';
$datbase = 'bancodacadeia';

$conn = new mysqli($servername, $username, $password, $datbase);

if($conn->connect_error){
    die("Erro: " . $conn->connect_error);
}
