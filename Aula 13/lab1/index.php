<?php
    require_once('pessoa.php');

    $pessoa = new Pessoa();

    $pessoa->setNome('Kalyo');
    $pessoa->setSobrenome('Silva');

    echo $pessoa->getNomeCompleto();
    echo $pessoa->getIdade();