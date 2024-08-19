<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias Ponderadas</title>
</head>

<body>
    <?php 
    $valor1 = $_GET["val1"] ?? 0;
    $peso1 = $_GET["peso1"] ?? 1;
    $valor2 = $_GET["val2"] ?? 0;
    $peso2 = $_GET["peso2"] ?? 1;  
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="val1">1º Valor</label>
            <input type="number" name="val1" id="val1" value="<?=$valor1?>" step="0.01">
            <label for="num">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="num">2º Valor</label>
            <input type="number" name="val2" id="val2" value="<?=$valor2?>" step="0.01">
            <label for="num">2º Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $maritmetica = ($valor1 + $valor2)/ 2;
            $mponderada = (($valor1 * $peso1) + ($valor2 * $peso2))/ ($peso1 + $peso2);

            echo "<ul><li> A Média Aritmética Simples entre os valores: ". number_format($valor1, 2, ",",".")." e ". number_format($valor2, 2,",","."). " é igual a: ". number_format($maritmetica, 2, ",","."). "</li> <li>A Média Aritmética Ponderada com pesos: ". number_format($peso1, 2, ",",".") ." e ". number_format($peso2, 2, ",",".") . " é igual a: ". number_format($mponderada, 2, ",",".") . "</li></ul>"     
        ?>
    </section>

</body>

</html>