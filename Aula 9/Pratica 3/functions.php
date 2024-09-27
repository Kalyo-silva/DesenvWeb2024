<?php

function calculaMedia(array $nota_aluno){
        $sum = 0;

        foreach ($nota_aluno as $nota) {
            $sum += $nota;
        }

        return $sum / sizeof($nota_aluno);
    }

    function getStatus(float $media_final){
        if ($media_final > 7) {
            return 'Aprovado :)';
        }
        else {
            return 'Reprovado :(';
        }
    }

    function getFrequencia(array $faltas_aluno){
        $qtd_faltas = 0;
        
        foreach ($faltas_aluno as $falta) {
            $qtd_faltas += $falta;
        }
        
        return 100 - ($qtd_faltas / sizeof($faltas_aluno) * 100);
    }

    function getStatusByFrequencia(float $percentual_frequencia){
        if ($percentual_frequencia > 70){
            return 'Aprovado :)';
        }
        else{
            return 'Reprovado pro falta :(';
        }
    }