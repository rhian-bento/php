<?php
class Vendedor {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function registrarVenda($carro) {
        echo "Venda de {$carro->getMarca()} {$carro->getModelo()} registrada por {$this->nome}.\n";
    }

    public function exibirNome() {
        echo "Vendedor: {$this->nome}\n";
    }

    public function getNome() {
        return $this->nome;
    }
}
?>