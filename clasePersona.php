<?php

    class Persona{
        private $nombre;
        private $edad;


        public function __construct ($nombre,$edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
        }

        public function saludo(){
            return "buenos dias";
        }

        public function __toString(){
            return "yo soy ".$this->nombre;
        }


    }
