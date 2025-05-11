<?php
    abstract class Forma{
        public abstract function calcularArea();
    }

    class Circulo extends Forma{
        private float $raio;
        public function __construct(float $raio)
        {
            $this->raio = $raio;
        }
        public function calcularArea(){
            return round(pi()* pow($this->raio, 2),2);
        }
    }

    class Retangulo extends Forma{
        private float $base;
        private float $altura;
        public function __construct($base, $altura){
            $this->base = $base;
            $this->altura = $altura;
        }
        public function calcularArea()
        {
            return $this->base * $this->altura;
        }
    }

$formas = [
    new Circulo(5),
    new Retangulo(4, 6),
    new Circulo(2.5),
    new Retangulo(10, 3)
];

foreach ($formas as $forma) {
    echo "Área: " . $forma->calcularArea() . "\n";
}
