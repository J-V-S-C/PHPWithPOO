<?php
    class Animal{
        protected string $nome;
        protected int $idade;

        public function emitirSom(){
            echo "Estou emitindo som";
        }

        public function mover(){
            echo "Estou me movendo";
        }
    }

    class Cachorro extends Animal{
        public function emitirSom()
        {
            echo "Latir";
        }
        public function mover(){
            echo "Caminhar";
        }
    }

    class Passaro extends Animal{
        public function emitirSom()
        {
            echo "Cantar";
        } 
        public function mover(){
            echo "Voar";
        }
    }



    $animal = new Animal();
    $animal->emitirSom();
    echo "\n";
    $animal->mover();
    echo "\n";
    $cachorro = new Cachorro();
    $cachorro->emitirSom();
    echo "\n";
    $cachorro->mover();
    echo "\n";
    $passaro = new Passaro();
    $passaro->emitirSom();
    echo "\n";
    $passaro->mover();
