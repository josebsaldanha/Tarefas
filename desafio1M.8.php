<?php
class Produto {
public $nome;
public $preco;
public $quantidade;

public function mostrarInfo() {
echo $this->nome . " custa " . $this->preco . " Kz e tem " . $this->quantidade . " <br>";
}
}
// Instanciar a classe Produto
$produto1 = new Produto();
$produto1->nome = "Caderno";
$produto1->preco = 500;
$produto1->quantidade = 10;
$produto1->mostrarInfo();

$produto2 = new Produto();
$produto2->nome = "Livro";
$produto2->preco = 200;
$produto2->quantidade = 20;
$produto2->mostrarInfo();