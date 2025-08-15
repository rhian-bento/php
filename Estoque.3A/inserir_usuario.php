
<?php
header('Content-Type: application/json');

// Verificar se os dados foram enviados via POST
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conectar com o banco
    $conn = new mysqli ("localhost","root","","estoque");

    if($conn->connect_error) {
        die(json_encode(["erro" => "Erro ao conectar"]));
    }

    //Receber e limpar os dados
    $nome = $conn -> real_escape_string($_POST['nome']);
    $nome = $conn -> real_escape_string($_POST['matricula']);
    $nome = $conn -> real_escape_string($_POST['funcao']);

    //Inserir no banco
    $sql = "INSERT INTO usuarios (nome, matricula, funcao) VALUES('$nome', '$matricula', '$funcao')";
    if($conn -> query($sql)){
        echo json_encode(["sucesso" =>true,"mensagem" =>"Usuario inserido com sucesso!"]);
    } else {
        echo json_encode(["erro" => "Erro ao inserir usuario."]);
    }
    $conn->close();
} else {
    echo json_encode(["erro" => "Requisição inválida."]);
}
