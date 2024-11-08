<?php

namespace app\model;

class Endereco{
    private $pais;
    private $uf;
    private $cidade;
    private $bairro;
    private $logradouro;
    private $cep;
    private $complemento;

    // Getter e Setter para $pais
    public function getPais() {
        return $this->pais;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }

    // Getter e Setter para $uf
    public function getUf() {
        return $this->uf;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    // Getter e Setter para $cidade
    public function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    // Getter e Setter para $bairro
    public function getBairro() {
        return $this->bairro;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    // Getter e Setter para $logradouro
    public function getLogradouro() {
        return $this->logradouro;
    }

    public function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    // Getter e Setter para $cep
    public function getCep() {
        return $this->cep;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    // Getter e Setter para $complemento
    public function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($complemento) {
        $this->complemento = $complemento;
    }
}