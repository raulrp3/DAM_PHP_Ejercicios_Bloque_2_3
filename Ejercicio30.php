<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 30</title>
</head>
<body>
    <?php
        function directoryIterator($route){
            if (is_dir($route)){
                $openRoute = opendir($route);
                
                while(($file = readdir($openRoute)) !== false){
                    $completeRoute = $route.'/'.$file;

                    if ($file != '.' && $file != '..'){
                        if (is_dir($completeRoute)){
                            yield '<p>'.$file.'</p>';
                            directoryIterator($completeRoute);
                        }else{
                            yield '<p>'.$file.'</p>';
                        }
                    }
                }

                closedir($openRoute);
            }else{
                echo '<p>No es una ruta válida.</p>';
            }
        }
    ?>
    <?php
        foreach(directoryIterator('./') as $item){
            echo $item;
        }
    ?>
</body>
</html>