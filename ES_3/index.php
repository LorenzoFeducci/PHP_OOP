<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'Studente.php';
        $studenti = [
            new Studente("enrico", "bili", "1"),
            new Studente("mario", "gialo", "2"),
            new Studente("mattia", "triti", "3"),
        ];

        foreach($studenti as $studente){
            $studente->presentati();
        }
    ?>
</body>
</html>