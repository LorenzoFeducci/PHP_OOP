<?php
    class Veicolo{
        private $marca;
        private $anno;

        public function __construct($marca, $anno){
            $this->marca = $marca;
            $this->anno = $anno;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getAnno(){
            return $this->anno;
        }
    }
?>