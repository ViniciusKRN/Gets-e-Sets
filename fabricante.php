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

$fabricante = new fabricante ("Honda, Minato, tokio, japão", 04337168000148);

$fabricante->Nome = "Honda";
$fabricante->Endereco = "Minato, tokio, japão";
$fabricante->Documento = 04337168000148;

echo "A". $fabricante->Nome. " é uma das maiores criadoras de moto do mundo, tendo a sede em". $fabricante->Endereco. "<br>"
echo " com o CNPJ de". $fabricante->Documento.;

