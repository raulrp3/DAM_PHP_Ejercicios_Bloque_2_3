<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 29</title>
</head>
<body>
    <?php
        function validatorEmail($email){
            preg_match('#^[a-zA-z0-9]+(?:[._-][a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:[._-][a-zA-Z0-9]+)*\.(?:com|es|net)$#', $email, $matches);
            return (count($matches) == 0) ? 'Email no válido.' : 'Email válido';
        }

        function validatorDNI($dni){
            preg_match('#^[0-9]{8}(?:-)?[A-Za-z]$#', $dni, $matches);
            return (count($matches) == 0) ? 'DNI no válido.' : 'DNI válido';
        }
    ?>
    <?php
        $users = array('IN2AR3_01' => array ('nombre' => "Alori, Kepa", 'email' =>
        "kepa--alor@gmail.com", 'dni' => "74512211A"),'IN2AR3_02' => array
        ('nombre' => "Sanchez, Pepe", 'email' => "pepe.san@gmail.com", 'dni' =>
        "7458558"),'IN2AR3_03' => array ('nombre' => "Soler, Alfredo", 'email' =>
        "alfredo13@hotmail.com", 'dni' => "A-1223344-A"));

        foreach($users as $item){
            echo '<p>'.$item['nombre'].'</p>'; 
            echo '<p>'.validatorEmail($item['email']).'</p>';
            echo '<p>'.validatorDNI($item['dni']).'</p>';
            echo '</br>';
        }
    ?>
</body>
</html>