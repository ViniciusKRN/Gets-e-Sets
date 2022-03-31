<?php

class fabricante {
    public $nome;
    public $endereco;
    public $documento;

    public function __construct ($nome, $endereco, $documento) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->documento = $documento;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function setDocumento($documento) {
        $this->documento = $documento;
    }
}

$fabricante = new fabricante("Honda", "japao", 101010);

$fabricante->nome = "Honda";
$fabricante->endereco = "japao";
$fabricante->documento = 101010;

echo "A". $fabricante->nome. " é uma das maiores criadoras de moto do mundo, tendo a sede em". $fabricante->endereco. "<br>";
echo " com o CNPJ de". $fabricante->documento;

