<?php
require_once 'models/Cliente.php';
require_once 'models/Vendedor.php';
require_once 'models/Carro.php';

$cliente = new Cliente("Nicolau Moreno");
$vendedor = new Vendedor("Imperador Rhian");
$carro = new Carro("Corsa", "Kwid");

echo "=== Informações ===\n";
$cliente->exibirNome();
$vendedor->exibirNome();
$carro->exibirDetalhes();

echo "\n=== Compra ===\n";
$cliente->comprarCarro($carro, $vendedor);
?>