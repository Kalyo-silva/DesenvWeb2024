<?php

class Jogador {
    private DateTime $dataNascimento;
    private string $posicao;
    private string $nome;

    public function getDataNascimento(): DateTime {
        return $this->dataNascimento;
    }

    public function setDataNascimento(DateTime $dataNascimento): void {
        $this->dataNascimento = $dataNascimento;
    }

    public function getPosicao(): string {
        return $this->posicao;
    }

    public function setPosicao(string $posicao): void {
        $this->posicao = $posicao;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }
}