<?php
    require_once "model\pessoa.php";
    require_once "model\contato.php";
    require_once "model\endereco.php";

    $pessoa = new app\model\Pessoa();

    $pessoa->setNome('Kalyo');
    $pessoa->setSobrenome('Silva');

    echo $pessoa->getNomeCompleto();
    echo $pessoa->getIdade();