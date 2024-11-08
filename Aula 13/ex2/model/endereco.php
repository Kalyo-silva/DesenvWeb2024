<?php

namespace app\model;

class Endereco {
    private string $cep;
    private string $estado;
    private string $cidade;
    private string $bairro;
    private string $logradouro;

    public function getCep(): string {
        return $this->cep;
    }

    public function setCep(string $cep): void {
        $this->cep = $cep;
    }

    public function getEstado(): string {
        return $this->estado;
    }

    public function setEstado(string $estado): void {
        $this->estado = $estado;
    }

    public function getCidade(): string {
        return $this->cidade;
    }

    public function setCidade(string $cidade): void {
        $this->cidade = $cidade;
    }

    public function getBairro(): string {
        return $this->bairro;
    }

    public function setBairro(string $bairro): void {
        $this->bairro = $bairro;
    }

    public function getLogradouro(): string {
        return $this->logradouro;
    }

    public function setLogradouro(string $logradouro): void {
        $this->logradouro = $logradouro;
    }
}