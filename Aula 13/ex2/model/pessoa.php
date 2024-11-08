<?php

namespace app\model;

class Pessoa{
    private $nome;
    private $sobrenome;
    private $datanascimento;
    private $cpfcnpj;
    private $tipo;
    private $telefone;
    private $endereco;

    public function __construct(){
        $this->telefone = new contato();
        $this->endereco = new endereco();
    }

    public function getNomeCompleto(){
        return $this->nome.' '.$this->sobrenome;
    }

    public function getIdade(){
        $idade = $this->datanascimento->diff(new \DateTime (date('Y-m-d')));
        return $idade->y;
    }

     // Getter e Setter para $nome
     public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Getter e Setter para $sobrenome
    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    // Getter e Setter para $datanascimento
    public function getDataNascimento() {
        return $this->datanascimento;
    }

    public function setDataNascimento($datanascimento) {
        $this->datanascimento = $datanascimento;
    }

    // Getter e Setter para $cpfcnpj
    public function getCpfCnpj() {
        return $this->cpfcnpj;
    }

    public function setCpfCnpj($cpfcnpj) {
        $this->cpfcnpj = $cpfcnpj;
    }

    // Getter e Setter para $tipo
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    // Getter e Setter para $telefone
    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // Getter e Setter para $endereco
    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
}