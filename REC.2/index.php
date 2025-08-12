<?php
// Incluindo as classes
require_once 'classes/Cliente.php';
require_once 'classes/Vendedor.php';
require_once 'classes/Carro.php';

// Criando instâncias
$cliente = new Cliente("João Silva", "joao@example.com");
$vendedor = new Vendedor("Maria Souza", "(11) 99999-9999");
$carro = new Carro("Toyota", "Corolla");

// Usando os métodos
echo "Cliente: " . $cliente->getNome() . " - Email: " . $cliente->getEmail() . "<br>";
echo "Vendedor: " . $vendedor->getNome() . " - Telefone: " . $vendedor->getTelefone() . "<br>";
echo "Carro: " . $carro->getMarca() . " " . $carro->getModelo() . "<br>";
?>
