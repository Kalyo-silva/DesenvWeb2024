<?php
class Time {
    private array $jogadores = [];
    private int $anoFundacao;
    private string $nome;

    public function getJogadores(): array {
        return $this->jogadores;
    }

    public function setJogadores(array $jogadores): void {
        $this->jogadores = $jogadores;
    }

    public function getAnoFundacao(): int {
        return $this->anoFundacao;
    }

    public function setAnoFundacao(int $anoFundacao): void {
        $this->anoFundacao = $anoFundacao;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function addJogador($jogador){
        array_push($this->jogadores, $jogador);
    }

    public function mostraTime(){
        foreach ($this->jogadores as $jogador) {
            echo $jogador->getPosicao()." -> ".$jogador->getNome()." <br> ";
        }
    }
}