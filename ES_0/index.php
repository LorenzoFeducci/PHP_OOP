<?php
    include ('config.php');
    include ('functions.php');
    header("Content-Type: application/json");

    //require 'Voto.php';
    //require 'Alunno.php';
    //require_once 'Indirizzo.php';


    //require_once automatico
    $subdir = ["models", "includes"];

    spl_autoload_register($autoload);

    //Serializazione JSON
    $alunni = [];
    $alunno1 = new Alunno("gianni", "bianchi", 36);
    $alunno2 = new Alunno("elia", "bianchi", 39);
    $alunno3 = new Alunno("luigi", "bianchi", 15);
    $alunni = array($alunno1, $alunno2, $alunno3);

    $json = json_encode($alunni);

    //Deserializzazione JSON

    //$json = json_encode($studenti);
    //echo $json;
    $alunni2 = json_decode($json, true);
    $alunni = [];
    foreach($alunni2 as $alunno){
        $a = new Alunno($alunno['nome'], $alunno['cognome'], $alunno['eta']);
        $alunni []=$a;
    }
    $voto1 = new Voto("Storia", 7.5, "Buona interrogazione");
    $voto2 = new Voto("Informatica", 5.5, "Può fare di più");
    $alunni[1] -> setVoto($voto1);
    $alunni[1] -> setVoto($voto2);

    $indirizzo1 = new Indirizzo("Firenze", "Firenze", "Via della moneta", 25);
    $indirizzo2 = new Indirizzo("AAAA", "AAAA", "AAAA", 25);
    $alunni[1] -> setIndirizzo($indirizzo1);
    $alunni[2] -> setIndirizzo($indirizzo2);



    //Riserializzazione JSON
    echo json_encode($alunni);

    //file_put_contents("alunni.json", $json);
?>