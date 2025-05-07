<?php
    class Animal{
        protected string $nome;
        protected int $idade;

        public function emitirSom(){
            echo 'Estou emitindo som';
        }

        public function mover(){
            echo 'Estou me movendo';
        }
    }

    class Cachorro extends Animal{
        public function emitirSom()
        {
            echo 'Latir';
        }
        public function mover(){
            echo 'Caminhar';
        }
    }

    class Passaro extends Animal{
        public function emitirSom()
        {
            echo 'Cantar';
        } 
        public function mover(){
            echo 'Voar';
        }
    }

?>