<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'Alunno.php';
    $studenti = [
        new Alunno ("gianni", "bianchi", 36),
        new Alunno ("elia", "bianchi", 39),
        new Alunno ("luigi", "bianchi", 15),

    ];
        
        foreach($studenti as $studente){
            $studente ->toString();
        }
    ?>
</body>
</html>