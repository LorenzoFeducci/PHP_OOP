<?php
    class Voto implements JsonSerializable{
        protected $materia = "";
        protected $valore = 6;
        protected $descrizione = "";

        public function __construct($materia, $valore, $descrizione){
            $this->materia = $materia;
            $this->valore = $valore;
            $this->descrizione = $descrizione;
        }

        public function jsonSerialize(): array {
            return[
                'materia' => $this->materia,
                'valore' => $this->valore,
                'descrizione' => $this->descrizione
            ];
        }
    }
?>