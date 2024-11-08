<?php
    require_once('lib/conexaoBD.php');
    require_once('lib/query.php');

    $conexaoBd = new conexaoBD();
    $conexaoBd->setHost('localhost');
    $conexaoBd->setPorta(5432);
    $conexaoBd->setUser('postgres');
    $conexaoBd->setPassword('postgres');
    $conexaoBd->setDatabase('hrav');
    
    if (!$conexaoBd->Connect()){
        echo "Falha ao conectar no banco de dados!";
    };

    echo ($conexaoBd->getStatus());

    $query = new Query($conexaoBd);

    $query->setSQL('select 1 as coluna');

    if ($query->Open()){
        while ($linha = $query->getNextRow()){
            var_dump($linha);
        }
    }

    