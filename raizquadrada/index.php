<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raiz quadrada</title>
</head>

<body>
    <?php 
    $num = $_GET["num"] ?? 0;     
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="sal" value="<?=$num?>" step="0.01">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $rquad = sqrt($num);
            $rcub = $num ** (1/3);

            echo "<ul><li> Raiz quadrada:". number_format($rquad, 3, ",","."). "</li> <li> Raiz cúbica:". number_format($rcub, 3, ",",".") . "</li></ul>"     
        ?>
    </section>

</body>

</html>