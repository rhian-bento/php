
<?php
header('Content-Type: application/json');

//Conectar ao banco de dados
$conn = new mysqli("localhost", "root", "", "estoque");

if($conn->connect_error) {
    die(json_encode(["erro" =>"Erro na conexão do banco"]));
}

//Consulta SQL
$sql = "SELECT id,nome,matricula,funcao FROM usuarios";
$resultado = $conn -> query($sql);

$usuarios = [];

while($linha = $resultado -> fetch_assoc()) {
    $usuario[] = $linha;
}

echo json_encode($usuario);
?>
