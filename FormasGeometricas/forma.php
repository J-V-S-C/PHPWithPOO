<?php
    abstract class Forma{
        protected float $b;
        protected float $h;
        public abstract function calcularArea($b, $h);
    }

    class Circulo extends Forma{
        public function __construct()
        {}
        public function calcularArea($b, $h)
        {
            
        }
    }

    class Retangulo extends Forma{
        public function __construct(){
        }
        public function calcularArea($b, $h)
        {
            
        }
    }