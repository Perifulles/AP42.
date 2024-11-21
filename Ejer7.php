<!DOCTYPE html>
<html>
<head>
    <title>Desplazar ceros al final</title>
</head>
<body>
    <h1>Desplazar ceros al final del array</h1>

    <?php
    $array = [2, 5, 7, 0, 4, 0, 7, -5, 8, 0];

    $noCeros = [];
    $ceros = 0;
    
    foreach ($array as $valor) {
        if ($valor != 0) {
            $noCeros[] = $valor;
        } else {
            $ceros++;
        }
    }

    for ($i = 0; $i < $ceros; $i++) {
        $noCeros[] = 0;
    }

    echo "<h2>Array después de desplazar ceros:</h2>";
    var_dump($noCeros);
    ?>

</body>
</html>
