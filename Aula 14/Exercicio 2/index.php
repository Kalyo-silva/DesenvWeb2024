<?php

require_once  'model\Jogador.php';
require_once  'model\Time.php';

$time = new Time();
$time->setNome('Birigui FC');
$time->setAnoFundacao(2024);

for ($i=0; $i < 11; $i++) { 
    $jogador = new Jogador();
    $jogador->setNome("Jogador ".$i+1);
    $jogador->setPosicao('Futebolista');
    $jogador->setDataNascimento(new DateTime('2000-01-01'));

    $time->addJogador($jogador);
}

$time->mostraTime();