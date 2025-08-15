
<?php
header('Content-Type: application/json');

//Conectar ao banco de dados
$conn = new mysqli("localhost", "root", "", "estoque");

if($conn->connect_error) {
    die(json_encode(["erro" =>"Erro na conexão do banco"]));
}

//Consulta SQL
$sql = "SELECT id,nome,quantidade,preco FROM produtos";
$resultado = $conn -> query($sql);

$produtos = [];

while($linha = $resultado -> fetch_assoc()) {
    $produtos[] = $linha;
}

echo json_encode($produtos);
?>
