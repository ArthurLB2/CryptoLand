<?php
//conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crypto";

//cria conexão
$conn = new mysqli($servername, $username, $password, $dbname);

//verifica conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//busca no banco de dados se o usuário está banido
$sql = "SELECT banido FROM usuario WHERE usuario = 'Admin'"
$result = $conn->query($sql);

if ($result === false) {
    // houve um erro na consulta SQL
    die("SQL Error: " . $conn->error);
} elseif ($result->num_rows > 1) {
    // algo está errado com a consulta SQL, devemos ter apenas uma linha de resultado
    die("Too many rows returned. SQL Error: " . $conn->error);
} elseif ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["banido"] == 1){
            echo "Essa conta foi banida!";
        } else {
            echo "Conta ativa!";
        }
    }
} else {
    echo "0 results";
}
$conn->close();
?>