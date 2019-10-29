<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 32</title>
</head>
<body>
    <?php
        function read($max){
            $file = fopen('file.txt', 'r');

            for($i = 0; $i < $max; $i++){
                yield fgets($file);
            }

            fclose($file);
        }
    ?>
    <?php
        foreach(read(10) as $item){
            echo $item;
        }
    ?>
</body>
</html>