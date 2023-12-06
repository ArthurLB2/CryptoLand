<?php 
$host = "localhost";
$user= "root";
$password = "";
$bdd = "crypto";

$mysqli = new mysqli($host,$user,$password,$bdd);

if($mysqli->error){
die("Não foi possivel conectar ao banco de dados ".$mysqli->error);
}
?>