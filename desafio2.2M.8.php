<?php
class Abastecimento {

    public $matriculaCarro;
    public $tipoDeCombustivel;
    public $litrosAbastecidos;
    public $precoPorLitro;

public function __construct($matriculaCarro, $tipoDeCombustivel, $litrosAbastecidos,$precoPorLitro)
{
$this->matriculaCarro = $matriculaCarro;
$this->tipoDeCombustivel = $tipoDeCombustivel;
$this->litrosAbastecidos = $litrosAbastecidos;
$this->precoPorLitro = $precoPorLitro;
}

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

$abastecimento1 = new Abastecimento("LD 2222","Gasóleo",14,2000);

$abastecimento1->mostrarTotal();
