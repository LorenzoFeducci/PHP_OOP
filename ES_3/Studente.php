<?php
    require 'Persona.php';
    class Studente extends Persona{
        private $matricola;

        public function __construct($nome, $cognome, $matricola){
            parent::__construct($nome, $cognome);
            $this->matricola = $matricola;
        }

        public function getMatricola(){
            return $this->matricola;
        }

        public function presentati(){
            return parent::presentati() . "MATRICOLA: " . $this->matricola . "";
        }
    }
?>