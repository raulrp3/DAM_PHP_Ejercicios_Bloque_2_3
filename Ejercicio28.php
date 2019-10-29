<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 28</title>
</head>
<body>
    <?php
        function getMDate(){
            date_default_timezone_set('Europe/Madrid');
            $date = date('Y-m-d H:i');
            return $date;
        }

        function getIP(){
            $ip = $_SERVER['REMOTE_ADDR'];
            return $ip;
        }

        function getLanguage(){
            $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5);
            return $language;
        }

        function getBrowser(){
            if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
                return 'Internet explorer';
            elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== FALSE)
                return 'Microsoft Edge';
            elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE)
                return 'Internet explorer';
            elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
                return "Opera Mini";
            elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') || strpos($_SERVER['HTTP_USER_AGENT'], 'OPR') !== FALSE)
                return "Opera";
            elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
                return 'Mozilla Firefox';
            elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
                return 'Google Chrome';
            elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
                return "Safari";
            else
                return 'No hemos podido detectar su navegador';
        }
    ?>
    <?php
        $file = fopen('log.txt', 'w');
        fwrite($file, getMDate().' | '.getIP().' | '.getBrowser().' | '.getLanguage());
        fclose($file);
    ?>
</body>
</html>