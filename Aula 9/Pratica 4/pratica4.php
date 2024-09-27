<?php

function getValue(){
    try {
        return $_REQUEST['valor'];
    } catch (\Throwable $th) {
        echo 'Erro!'.$th ->getMessage();
    }


    throw new Exception("Valores não informados", 1);
}

function getDisc(){
    try {
        return $_REQUEST['desconto'];
    } catch (\Throwable $th) {
        echo 'Erro!'.$th ->getMessage();
    }
}

function Calcular(){
    try {
        return getValue() - getDisc();
    } catch (\Throwable $th) {
        echo 'Erro!'.$th ->getMessage();
    }
}

echo "Valor: R$".round(Calcular(),2);


