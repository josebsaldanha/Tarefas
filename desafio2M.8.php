<?php
class Abastecimento {

    public $matriculaCarro;
    public $tipoDeCombustivel;
    public $litrosAbastecidos;
    public $precoPorLitro;

public function mostrarResumo()
{
echo"Matricula: ". $this->matriculaCarro . "<br>";
echo"Compustivel: ". $this->tipoDeCombustivel . "<br>";
echo"Litros: ". $this->litrosAbastecidos . " Lt <br>";
} 

public function calcularTotal()
{
    $valorApagar = $this->litrosAbastecidos * $this->precoPorLitro;
    return $valorApagar;
}
public function mostrarTotal()
{
 $resumo = $this->mostrarResumo();
 $total = $this->calcularTotal();
 
 echo"Total a pagar:" . $total;
 }
}

$abastecimento1 = new Abastecimento();
$abastecimento1->matriculaCarro = "LD 2222";
$abastecimento1->tipoDeCombustivel = "Gasóleo";
$abastecimento1->litrosAbastecidos = "12";
$abastecimento1->precoPorLitro = "1000";

$abastecimento1->mostrarTotal();
