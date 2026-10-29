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

    <img src="../../../styles/ex_1.png" alt="primeiro exercício" class="img_ex1">

    <p>Iniciamos o codigo com uma função chamada calcularFormula, ela vai receber 2 parametros, respectivamente X e Y.</p>
    <p>Após isso usaremos um "if" para confirmar que a pessoa não vai somar dois numeros que resultem em 0, caso isso aconteça o codigo morre.</p>
    <p>Importante falar do simbolo duplo de igual, que basicamente verifica se os valores são iguais. No caso ele vai verificar se a operação vai ser igual a 0, se for o if acontecerá.</p>
    <p>Se a operação resultar em 0 voltamos uma resposta informando o problema.</p>
    <p>Criamos uma variavel chamada resultado, e ela será igual a conta que nos foi informado para fazer.</p>
    <p>Para montar a conta, utilizamos pow (power do inglês, se for mais facil de lembrar) para potencializar os paramentros X + Y, para fazer isso declaramos o pow, abrimos um parênteses, e informamos respectivamente o numero poencializado(base) e a sua potência(expoente).</p>
    <p>Dividimos pelo proprio X + Y, e retornamos e resultado finalizado.</p>
    <p>Por fim declaramos os numeros para preencher tanto o X quanto Y.</p>
    <p>E finalizado! agora a parte mais facil é retornar os resultados visualmente por meio do echo, trazendo o valor do X, do Y, e do resultado final da continha!</p>

    <h4>Exercicio finalizado:   </h4>

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