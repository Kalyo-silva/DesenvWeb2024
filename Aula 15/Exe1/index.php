<?php
    require_once "lib/jogador.php";
    require_once "lib/time.php";
    require_once "lib/jogo.php";


    $timeA = new Time('Vasco', 1898);

    for ($i=0; $i < 11; $i++) { 
        $jogador = new Jogador('Jogador '.$i.' - '.$timeA->getNome());
        $jogador->setDataNascimento(new DateTime());
        $jogador->setPosicao('Jogador');

        $timeA->addJogador($jogador);
    };

    $timeB = new Time('Framengo', 1895);

    for ($i=0; $i < 11; $i++) { 
        $jogador = new Jogador('Jogador '.$i.' - '.$timeB->getNome());
        $jogador->setDataNascimento(new DateTime());
        $jogador->setPosicao('Jogador');

        $timeB->addJogador($jogador);
    };


    $jogo = new Jogo($timeA, $timeB);

    $jogo->addGol($timeA, $timeA->getJogadores()[0]);
    $jogo->addGol($timeA, $timeA->getJogadores()[1]);
    $jogo->addGol($timeB, $timeB->getJogadores()[0]);

    echo $jogo->getNomeTimeVencedor();
