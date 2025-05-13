<?php
class Cliente {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function comprarCarro($carro, $vendedor) {
        $vendedor->registrarVenda($carro);
        echo "{$this->nome} comprou o carro {$carro->getMarca()} {$carro->getModelo()}.\n";
    }

    public function exibirNome() {
        echo "Cliente: {$this->nome}\n";
    }

    public function getNome() {
        return $this->nome;
    }
}
?>