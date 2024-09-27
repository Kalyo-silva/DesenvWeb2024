<?php

require_once('functions.php');

define('notas', array(5,9,8,7,6,4,5,8,10,8,10));
define('faltas', array(1,0,0,1,0,0,0,0,0,0));

$media = round(calculaMedia(notas),2);
$sitNotas = getStatus($media);
$presenca = round(getFrequencia(faltas),2);
$sitPresenca = getStatusByFrequencia($presenca);

echo "<h1> Situação do Aluno </h1>
        <h3>Média: $media </h3>
        <h3>Presença: $presenca%</h3>
        <h3>Situação por notas: $sitNotas</h3>
        <h3>Situação por Presença: $sitPresenca</h3>";
