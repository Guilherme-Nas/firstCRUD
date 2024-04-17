<?php
include('dbconnect.php');

$nome = $_POST['nome'];
$diaE = $_POST['diaEntrada'];
$diaS = $_POST['diaSaida'];

$sql = "INSERT INTO `cadeia` (`codigoPrisioneiro`, `nome`, `diaEntrada`, `diaSaida`) VALUES (NULL, '$nome', '$diaE', '$diaS')";

$conn->query($sql);

echo $nome . ' = ' . $diaE . ' -- ' . $diaS;