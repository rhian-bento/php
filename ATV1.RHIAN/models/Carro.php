<?php
class Carro {
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirDetalhes() {
        echo "Carro: {$this->marca} {$this->modelo}\n";
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }
}
?>