<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 24</title>
</head>
<body>
    <?php 
        function search($key, $array, $position = 0){
            if ($position >= count($array)){
                echo 'NO ENCONTRADO';
            }else{
                if (array_keys($array)[$position] === $key){
                    echo 'ENCONTRADO';
                    var_dump($array[$key]);
                }else{
                    search($key, $array, $position + 1);
                }
            }
        }
    ?>
    <?php
        $alimentos = ['carne' => [],'pescado' => ['azul' => ['atun','sardinas'],'blanco' => ['rosada','merluza']],'vegetales' => ['hojas' => ['col', 'acelga', 'chard', 'espinaca', 'lechuga'],'raices' => ['rabano', 'berzas', 'patata', 'remolacha'],'otras' => ['brocoli', 'habichuelas verdes', 'maiz', 'tomates']],'granos' => ['pan', 'arroz', 'avena'],'legumbres' => ['habas', 'lentejas', 'guisantes'],'frutas' => ['manzana', 'frambuesa', 'pera', 'platano'],'dulces' => ['galletas', 'brownie', 'tarta', 'pastel'],];
        echo '<p>'.search('pescado', $alimentos).'</p>';
        echo '<p>'.search('agua', $alimentos).'</p>';
    ?>
</body>
</html>