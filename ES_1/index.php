<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'Automobile.php';
        $automobili = [
            new Automobile("fiat", "2020", "3000"),
            new Automobile("audi", "2002", "F31"),
            new Automobile("ferrari", "2015", "RS54"),
        ];

        foreach($automobili as $automobile){
            $automobile->toString();
        }
    ?>
</body>
</html>