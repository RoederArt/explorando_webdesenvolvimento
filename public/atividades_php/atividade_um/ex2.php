<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../styles/style.css">
    <title>Ex2</title>
</head>
<body>
    <header>
        <h1>Exercício 2</h1>
    </header>

    <main>

    <h3>O segundo exercício pede para espelharmos uman string que o sistema receba, além disso deve exibir a quantidade de caracteres existentes na string original.</h3>

    <img src="../../../styles/ex_2.png" alt="segundo exercício" class="img_ex2">

    <?php

    function inverter_texto($texto){
        $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);
        $caracteres_invertidos = array_reverse($caracteres);
        $texto_invertido = implode('', $caracteres_invertidos);
        $quantidade_caracteres = mb_strlen($texto);
        return [
            "invertido" => $texto_invertido,
            "quantidade" => $quantidade_caracteres
        ];
    }

    $texto_usuario = "Programação em PHP! @2026 #ç~ã";
    echo "Texto original: $texto_usuario <br>";
    $resultado = inverter_texto($texto_usuario);

    echo "Texto invertido: " . $resultado["invertido"] . "<br>";
    echo "Quantidade de caracteres: " . $resultado["quantidade"] . "<br>";       

    ?>  

    </main>

    
</body>
</html>