<?php

namespace app\model;

class Contato {
    private string $valor;
    private string $nome;
    private int $tipo;

    public function getValor(): string {
        return $this->valor;
    }

    public function setValor(string $valor): void {
        $this->valor = $valor;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getTipo(): int {
        return $this->tipo;
    }

    public function setTipo(int $tipo): void {
        $this->tipo = $tipo;
    }
}