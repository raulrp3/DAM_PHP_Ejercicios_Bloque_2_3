<?php
    function headerMenu($title, $typeMenu){
        echo '<!DOCTYPE html>
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                        <title>'.$title.'</title>
                    </head>';

        echo '<header><h1>'.$title.'</h1></header>';

        $menu = ['Ejercicio 23', 'Ejercicio 24', 'Ejercicio 25'];
        echo '<p>Tipo de menu: '.$typeMenu.'</p><ul>';
        foreach($menu as $item){
            echo '<li><a href = "./'.preg_replace('# #', '', $item).'.php">'.$item.'</a></li>';
        }
        echo '</ul>';
    }

    function footer(){
        echo '<footer><p>Raúl Ramírez Pérez</p></footer>';
    }
?>