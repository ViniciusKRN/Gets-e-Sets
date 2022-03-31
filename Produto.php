<?php

class product 
{
    public $descricao;
    public $estoque;
    public $preco;
    public $fabricante;

    public function __construct ($descricao, $estoque, $preco, $fabricante) {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        $this->fabricante = $fabricante;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getFabricante() {
        return $this->fabricante;
    }

    public function setFabricante($fabricante) {
        $this->fabricante = $fabricante;
    }

}

$moto = new product("Motos", "Ilimitado", 1700000, "honda");

$moto->setDescricao = "Motos";
$moto->setEstoque = "Ilimitado";
$moto->setPreco = 1700000;
$moto->setFabricante = "honda";

echo " A nova linha de " . $moto->getDescricao() . " aqui em varginha esta com o estoque " . $moto->getEstoque() . " fabricado pela " . $moto->getFabricante() . "<br>";
"no valor de" . $moto->getPreco(); 