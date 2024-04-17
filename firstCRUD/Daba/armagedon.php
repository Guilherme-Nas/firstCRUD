<?php
include('dbconnect.php');

$nome = $_POST['nome'];
$id = $_POST['id'];

if($nome != NULL && $id != NULL){
    $sql = "DELETE FROM `cadeia` WHERE codigoPrisioneiro = $id AND nome = '$nome';";
    $result = $conn->query($sql);
}else{
    echo "Erro, insira nome e id";
}