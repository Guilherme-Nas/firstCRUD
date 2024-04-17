<?php
include('dbconnect.php');

$nome = $_POST['nome'];
$id = $_POST['id'];
$diaE = $_POST['dayEnter'];
$diaS = $_POST['dayOut'];

if($nome != NULL && $id != NULL){
    $sql = "UPDATE `cadeia` SET `nome` = '$nome', `diaEntrada` = '$diaE', `diaSaida` = '$diaS' WHERE `codigoPrisioneiro` = $id;";
    $result = $conn->query($sql); 
}else{
    echo "Erro, insira nome e id";
}

