

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../styles/style.css">
    <title>Ex1</title>
</head>
<body>
    <header>
        <h1>Exercício 1</h1>
    </header>

    <main>

    <h3>para esse primeiro exercício, vamos calcular a seguinte fórmula: (x² + y²) / (x + y).</h3>

    <img src="../../../styles/ex_01.png" alt="primeiro exercício" class="img_ex1">

    <br>

    <?php

    // (x² + y²) / (x + y)

    function calcular_formula($x, $y) {
    if (($x + $y) == 0) {
        return "Aqui não realizamos continhas divididas por zero amigo, volte ao seu lazer.";
    }

    $resultado = (pow($x, 2) + pow($y, 2)) / ($x + $y);
    return $resultado;
    }

    $x = 10;
    $y = 5;

    echo "Valor de x: $x<br>";
    echo "Valor de y: $y<br>";
    echo "Resultado da continha: " . calcular_formula($x, $y);
    ?>  

    </main>

    
</body>
</html>