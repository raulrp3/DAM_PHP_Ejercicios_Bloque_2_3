<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 25</title>
</head>
<body>
    <?php
        function getMax($array, &$positionMax){
            $max = 0;
            $position = 0;
            $positionMax = 0;

            foreach($array as $item){
                if ($item > $max){
                    $max = $item;
                    $positionMax = $position;
                }
                $position++;
            }
            return $max;
        }

        function change($array, $max, $positionMax){
            $array[$positionMax] = $array[count($array) - 1];
            $array[count($array) - 1] = $max;

            return $array;
        }
    ?>
    <?php
        $array = [];

        for($i = 0; $i < 10; $i++){
            array_push($array, rand(0, 100));
        }
        
        $max = getMax($array, $positionMax);

        echo '<p>Array original.</p>';
        var_dump($array);

        $array = change($array, $max, $positionMax);

        echo '<p>Resultado</p>';
        var_dump($array);
    ?>
</body>
</html>