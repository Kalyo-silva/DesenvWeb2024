<?php

class conexaoBD {
    private $Host;
    private $Porta;
    private $User;
    private $Password;
    private $Database;

    private $Status;
    private $conn;

    // Getter e Setter para Host
    public function getHost() {
        return $this->Host;
    }

    public function setHost($Host) {
        $this->Host = $Host;
    }

    // Getter e Setter para Porta
    public function getPorta() {
        return $this->Porta;
    }

    public function setPorta($Porta) {
        $this->Porta = $Porta;
    }

    // Getter e Setter para User
    public function getUser() {
        return $this->User;
    }

    public function setUser($User) {
        $this->User = $User;
    }

    // Getter e Setter para Password
    public function getPassword() {
        return $this->Password;
    }

    public function setPassword($Password) {
        $this->Password = $Password;
    }
    
    // Getter e Setter para Database
    public function getDatabase() {
        return $this->Database;
    }

    public function setDatabase($Database) {
        $this->Database = $Database;
    }

    
    // Getter e Setter para Conn
    public function getConn() {
        return $this->Conn;
    }

    public function setConn($Conn) {
        $this->Conn = $Conn;
    }

    // Getter e Setter para Status
    public function getStatus() {
        return $this->Status;
    }

    public function setStatus($Status) {
        $this->Status = $Status;
    }

    private function getParams(){
        return "host=".$this->Host. 
               " port=".$this->Porta. 
               " dbname=".$this->Database. 
               " user=".$this->User.
               " password=".$this->Password;
    }

    public function Connect(){
        try {
            $this->setStatus('Conectando...');
            $this->Conn = pg_connect($this->getParams());

            if ($this->Conn){
                $this->setStatus('Conectado!');
                return true;
            }
        } catch (\Throwable $th) {
            $this->setStatus('Erro Ao Conectar.');
            return false;
        }
    }
}