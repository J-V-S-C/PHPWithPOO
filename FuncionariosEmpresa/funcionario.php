<?php
    class Funcionario{
      
        protected string $nome;
        protected float $salarioBase;

        public function __construct() {
        }
        public function calcularSalario(){
            return $this->salarioBase;
        }

    }

    class Gerente extends Funcionario{
        public function __construct(){
           
        }
        public function calcularSalario(){
            return  $this->salarioBase *= 1/2;
        }
    }
    class Desenvolvedor extends Funcionario{
        public function __construct(){
           
        }
        public function calcularSalario(){
            return  $this->salarioBase += 500;
        }
}