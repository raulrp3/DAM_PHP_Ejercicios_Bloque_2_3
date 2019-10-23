<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 26</title>
</head>
<body>
    <?php
        $array = [];

        for ($i = 0; $i < 10; $i++){
            array_push($array, rand(0, 100));
        }

        echo '<p>Array original.</p>';
        var_dump($array);

        echo '<p>Array ordenado</p>';

        usort($array, function($a, $b){
            return $a <=> $b;
        });

        var_dump($array);
    ?>
</body>
</html>