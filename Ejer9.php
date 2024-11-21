<!DOCTYPE html>
<html>
<head>
    <title>Buscar Pares con Diferencia</title>
</head>
<body>
    <h1>Buscar Pares de Números</h1>

    <form method="post">
        <label for="diferencia">Introduce la diferencia:</label>
        <input type="number" id="diferencia" name="diferencia" required>
        <input type="submit" value="Enviar">
</form>

    <?php
    $array = [1, 15, 39, 75, 92];

    if (isset($_POST["diferencia"])) {
        $diferencia = $_POST["diferencia"];
        }

        
        $pares = [];

        for ($i = 0; $i < count($array); $i++) {
            for ($j = $i + 1; $j < count($array); $j++) {
                if ($array[$j] - $array[$i] == $diferencia) {
                    $pares[] = [$array[$i], $array[$j]];
                }
            }
        }

        if (count($pares) > 0) {
            echo "<h2>Pares encontrados con una diferencia de $diferencia:</h2>";
            echo "<br";
            var_dump($pares);
            echo "</br";
        } else {
            echo "<h2>No se han encontrado pares con la diferencia de $diferencia.</h2>";
        }
    ?>

</body>
</html>
