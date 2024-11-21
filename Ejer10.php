<!DOCTYPE html>
<html>
<head>
    <title>Dividir Array en Dos Partes con Suma Igual</title>
</head>
<body>
    <h1>Dividir Array en Dos Partes con Suma Igual</h1>

    <?php
    $array = [1, 3, 3, 8, 4, 3, 2, 3, 3];

    $totalSum = array_sum($array);

    $derSum = 0;

    for ($i = 0; $i < count($array); $i++) {
        $derSum += $array[$i];

        if ($derSum == $totalSum - $derSum) {
            $part1 = array_slice($array, 0, $i + 1);
            $part2 = array_slice($array, $i + 1);

            echo "<h2>Array dividido en dos partes:</h2>";
            echo "Parte 1: <br>";
            echo implode(", ", $part1) . "<br>";
            echo "Parte 2: <br>";
            echo implode(", ", $part2) . "<br>";

            break;
        }
    }

    if ($derSum != $totalSum - $derSum) {
        echo "<h2>No se encontró una división válida.</h2>";
    }
    ?>

</body>
</html>
