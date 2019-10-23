<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 23</title>
</head>
<body>
    <?php
        function factorial($number){
            if ($number <= 1){
                return 1;
            }else{
                return $number * factorial($number - 1);
            }
        } 
    ?>
    <?php
        echo '<p>Factorial de 4.</p>';
        echo '<p>'.factorial(4).'</p>';
    ?>
</body>
</html>