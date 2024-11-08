<?php
require_once "./model/pessoa.php";
require_once "./model/contato.php";
require_once "./model/endereco.php";

$kalyo = new app\model\Pessoa();

$kalyo->setNome('Kalyo');
$kalyo->setSobrenome('Silva');
$kalyo->setDataNascimento(new dateTime('01-01-2003'));

echo $kalyo->getNomeCompleto();
echo $kalyo->getIdade();