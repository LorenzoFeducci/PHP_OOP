<?php
    public class Alunno{
        protected $nome;
        protected $cognome;
        protected $eta;

        public function getNome(){
            return $this->$nome;
        }

        public function getCognome(){
            return $this->$cognome
        }

        public function getEta(){
            return $this->$eta;
        }

        public setNome($nome){
            $this->$nome=$nome
        }

        public setCognome($cognome){
            $this->$cognome=$cognome
        }

        public setEta($eta){
            $this->$eta=$eta
        }

        
    }
?>