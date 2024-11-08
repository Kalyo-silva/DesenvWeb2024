<?php

namespace app\model;

class Calculadora{
    private int $operando;
    private float $operador1;
    private float $operador2;

    private float $resultado;

    public function getOperando(): string {
        return $this->operando;
    }

    public function setOperando(string $operando): void {
        $this->operando = $operando;
    }

    public function getOperador1(): float {
        return $this->operador1;
    }

    public function setOperador1(float $operador1): void {
        $this->operador1 = $operador1;
    }

    public function getOperador2(): float {
        return $this->operador2;
    }

    public function setOperador2(float $operador2): void {
        $this->operador2 = $operador2;
    }

    private function somar(){
        return $this->operador1 + $this->operador2;
    }
    
    private function subtrair(){
        return $this->operador1 - $this->operador2;
    }
    
    private function multiplicar(){
        return $this->operador1 * $this->operador2;
    }
    
    private function dividir(){
        return $this->operador1 / $this->operador2;
    }

    public function calcula(){
        switch ($this->operando) {
            case 1:
                $this->resultado = $this->somar();
                break;
            
            case 2:
                $this->resultado = $this->subtrair();
                break;
        
            case 3:
                $this->resultado = $this->multiplicar();
                break;
    
            case 4:
                $this->resultado = $this->dividir();
                break;
                                
            default:
                break;
        }
    }

    public function escreveResultado(){
        return 'Resultado = '.$this->resultado;
    }
}