<?php

namespace app\model;

class Computador{
    private string $status;
    
    private function retornaMensagem(){
        return "Status definido como: ".$this->status;
    }

    public function __construct(){
        $this->status = 'Offline';
    }

    public function ligar(){
        $this->status = 'Online';
        return $this->retornaMensagem();
    }

    public function desligar(){
        $this->status = 'Offline';
        return $this->retornaMensagem();
    }

    public function status(){
        return $this->status;
    }
}