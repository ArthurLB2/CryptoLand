<?php 

include("conexao.php");

if(isset($_POST["usuario"]) || isset($_POST["senha"])) {

if(strlen($_POST["usuario"]) == null ){
echo "Preencha seu usuario";
}else if(strlen($_POST["senha"]) == null ){
echo "preencha a sua senha";
}

else{
$usuario = $mysqli -> real_escape_string($_POST["usuario"]);
$senha = $mysqli -> real_escape_string($_POST["senha"]);

$sql_code = "SELECT * FROM usuario WHERE username = '{$_POST["usuario"]}' AND senha = '{$_POST["senha"]}'";
$sql_query= $mysqli ->query($sql_code) or die("Falha na execução do codigo sql".$mysqli->error);


$quantidade = $sql_query -> num_rows;

if ($quantidade ==1) {
    
$usuario = $sql_query-> fetch_assoc();


if(!isset($_SESSION)){
session_start();
}
$_SESSION["id"] = $usuario["id"];   
$_SESSION ["usuario"] = $usuario["usuario"];

header("Location: dashboard.php");

if(issent($_SESSION["id"]) == $usuario["1"] ||   
issent($_SESSION ["usuario"]) == $usuario["Admin"]){


    header("Location: centralAdmin.php");
}



}else {
    echo "Falha ao logar. Usuario ou senha incorreta";
}

}

}



?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700
	;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;
	1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/style-login.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
        <script>
function alwaysShowAnimation() {
 
 let animationSVG = document.getElementById('moeda.svg');
 animationSVG.beginElement();
}

alwaysShowAnimation();


            </script>
        
        <h1><span>Faça login</span><br>E se destaque no mercado!</h1>
            <img src="moeda.svg" class="left-login-image" alt="moeda">
        
        
        
        </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>

                    <form action="" method="POST">


                    <p>
                   <div class="textfield">  
                      <label for="Usuario">Usuário</label>
                      <input type="text" name="usuario" placeholder="Usuario">
                      </div> 
                      </p>
                      <br>
                      <p>
                      <div class="textfield"> 
                       <label for="Senha">Senha</label>
                      <input type="password" name="senha" placeholder="Senha"> 

                      </div>
                      </p>
                      <button type="submit" class="btn-login">Login</button>


                      </form>


                </div> 
        </div>
    </div>
    
</body>
</html>