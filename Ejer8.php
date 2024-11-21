<!DOCTYPE html>
<html>
<head>
    <title>Transposición de Array Bidimensional</title>
</head>
<body>
    <h1>Transposición de Array Bidimensional</h1>

    <?php
    $array = [
        [1, 5, 8, 5],
        [7, 3, 2, 4],
        [1, 6, 2, 4]
    ];

    $pasada = [];

    foreach ($array as $fila) {
        foreach ($fila as $index => $valor) {
            $pasada[$index][] = $valor;
        }
    }

    var_dump($array);
    echo "</br>";

    echo "<h2>Array Transpuesto:</h2>";
    echo "<br>";
    var_dump($pasada);
    echo "<br>";
    ?>

</body>
</html>
