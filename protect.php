<?php 
include('conexao.php');

if(!isset($_SESSION)){
session_start();
}

if(!isset($_SESSION["id_user"])){

die("Você não pode acessar essa área sem estar logado. \n Porfavor loge na sua conta para poder acessar a area\n<p> <a href=\"login.php\"> Entrar</a> </p>"); 

}



?>