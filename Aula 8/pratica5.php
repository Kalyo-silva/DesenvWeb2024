<?php

    $disciplina = array('Engenharia de Software II', 'Banco de Dados II', 'Administração e Sistemas de Informaçao', 'Programação Web I', 'Estruturas de Dados II');
    $professores = array('Julian','Marco','Sandro','Cleber','Bastos');

    for ($i=0; $i < sizeof($disciplina); $i++) { 
        echo'Disciplina: '.$disciplina[$i].'<br> Professor: '.$professores[$i].'<br><br>';
    }