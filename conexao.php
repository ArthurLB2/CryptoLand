<?php 
$host = "localhost";
$usuario = "root";
$senha = "";
$database = "crypto";

$mysqli = new mysqli($host,$usuario,$senha,$database);

if ($mysqli->error) {
    die("Não foi possivel conectar ao banco de dados ".$mysqli->error);
}


?>


