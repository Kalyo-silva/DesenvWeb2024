<?php

class Time{
    private string $Nome;
    private int $AnoFundacao;
    private array $jogadores = [];

    public function __construct($nome, $ano){
        $this->Nome = $nome;
        $this->AnoFundacao = $ano;
    }
    
    public function addJogador($jogador){
        array_push($this->jogadores, $jogador);
    }

    public function getNome(){
        return $this->Nome;
    }

    public function getJogadores(){
        return $this->jogadores;
    }
}