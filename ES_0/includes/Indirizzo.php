<?php
    class Indirizzo implements JsonSerializable{
        protected $citta;
        protected $provincia;
        protected $via;
        protected $cap;

        public function __construct($citta, $provincia, $via, $cap){
            $this->citta = $citta;
            $this->provincia = $provincia;
            $this->via = $via;
            $this->cap = $cap;
        }

        public function jsonSerialize(): array {
            return[
                'citta' => $this->citta,
                'provincia' => $this->provincia,
                'via' => $this->via,
                'cap' => $this->cap
            ];
        }
    }
?>