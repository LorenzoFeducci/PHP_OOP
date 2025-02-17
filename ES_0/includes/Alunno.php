
<?php
     class Alunno implements JsonSerializable{
        protected $nome;
        protected $cognome;
        protected $eta;
        protected $voto = [];
        protected $indirizzo;

        public function __construct($nome, $cognome, $eta){
            $this->nome = $nome;
            $this->cognome = $cognome;
            $this->eta = $eta;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getCognome(){
            return $this->cognome;
        }

        public function getEta(){
            return $this->eta;
        }

        public function setNome($nome){
            $this->nome=$nome;
        }

        public function setCognome($cognome){
            $this->cognome=$cognome;
        }

        public function setEta($eta){
            $this->eta=$eta;
        }

        public function setVoto(Voto $voto){
            $this->voto[] = $voto;
        }

        public function setIndirizzo(Indirizzo $indirizzo){
            $this->indirizzo = $indirizzo;
        }

        public function toString(){
            echo "<p>NOME: " . $this->nome . " COGNOME: " . $this->cognome . " ETA: " . $this->eta . "</p>";
        }

        public function jsonSerialize(): array {
            return[
                'nome' => $this->nome,
                'cognome' => $this->cognome,
                'eta' => $this->eta,
                'voti' => $this->voto,
                'indirizzo' => $this->indirizzo
            ];
        }
    }
?>
