<?php
    class Funcionario{
      
        protected string $nome;
        protected float $salarioBase;

        public function __construct(float $salario) {
            $this->salarioBase = $salario;
        }
        public function calcularSalario(){
            return $this->salarioBase;
        }

    }

    class Gerente extends Funcionario{
      
        public function calcularSalario(){
            return  $this->salarioBase += $this->salarioBase * 1/2;
        }
    }
    class Desenvolvedor extends Funcionario{
        
        public function calcularSalario(){
            return  $this->salarioBase += 500;
        }
}

    $salarioBase = 10000;
    $funcionario = new Funcionario($salarioBase);
    echo $funcionario->calcularSalario();
    echo "\n";
    $gerente = new Gerente($salarioBase);
    echo $gerente->calcularSalario();
    echo "\n";
    $desenvolvedor = new Desenvolvedor($salarioBase);
    echo $desenvolvedor->calcularSalario();
