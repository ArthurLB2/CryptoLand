
<?php 

include("conexao.php");

if (isset($_POST['envio'])) {


$usuario =$_POST['usuario'];
$email =$_POST['email'];
$senha =$_POST['senha'];


if(isset($_POST['senha']) != isset($_POST['senha-confirme']) ){
echo 'senhas diferentes por favor insira as duas iguais';
}


$envio = mysqli_query($mysqli,"INSERT INTO usuario(username,senha) VALUES('$usuario','$senha')");

header("Location: dashboard.php");

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
    <link rel="stylesheet" href="dist/style-reg.css">
    <title>Registro</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1><span>Faça login</span><br>E se destaque no mercado!</h1>
            <img src="moeda.svg" class="left-login-image" alt="moeda">
        </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>REGISTRE-SE</h1>
                   
                       <form action="registro.php" method="POST" id="registration-form">
                        <div class="textfield">
                            <label for="Usuario">Usuário</label>
                            <input type="text" name="usuario" placeholder="Usuario" required oninvalid="this.setCustomValidity('Por favor, preencha o campo de usuário.')" oninput="this.setCustomValidity('')">
                            
                        </div> 
      
                            <div class="textfield"> 
                              <label for="Email">E-mail</label>
                              <input type="email" name="email" placeholder="E-mail" required oninvalid="this.setCustomValidity('Por favor, insira um endereço de e-mail válido.')" oninput="this.setCustomValidity('')">
                            
                             </div>
      
                          
                            <div class="textfield"> 
                             <label for="Senha">Senha</label>
                            <input type="password" name="senha" placeholder="Senha" required> 
                         
                            </div>
                            <div class="textfield"> 
                              <label for="Senha"> Confirme a Senha</label>
                             <input type="password" name="senha-confirme" placeholder="Senha" required> 





                             </div>
                        <button type="submit" name="envio" class="btn-login" id="register-button">Registrar</button>
                    </form>
                </div> 
        </div>
    </div>
    
</body>
</html>