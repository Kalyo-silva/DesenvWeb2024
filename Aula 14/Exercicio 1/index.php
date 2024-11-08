<?php

require_once  'model\calculadora.php';

if(isset($_GET['operando'])){
    $operando = $_GET['operando'];
    $op1 = $_GET['valA'];
    $op2 = $_GET['valB'];
}

$calc = new app\model\Calculadora();

$calc->setOperador1($op1);
$calc->setOperador2($op2);
$calc->setOperando($operando);

echo $calc->calcula();

echo $calc->escreveResultado();