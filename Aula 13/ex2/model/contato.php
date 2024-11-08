<?php

namespace app\model;

class Contato{
    private $telefone;
    private $email;

    // Getter e Setter para $telefone
    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // Getter e Setter para $email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}