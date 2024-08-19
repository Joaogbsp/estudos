<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo Idade</title>
</head>

<body>
    <?php 
    $anonasc = $_GET["anonasc"] ?? 0;
    $anodesejado = $_GET["anodesejado"] ?? 0;
    ?>
    <main>
        <h1>Calculando sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="idanonasc">Em que ano você nasceu?</label>
            <input type="number" name="anonasc" id="idanonasc" value="<?=$anonasc?>">
            <label for="idanodesejado">Quer saber sua idade em que ano? (Estamos em 2024)</label>
            <input type="number" name="anodesejado" id="idanodesejado" value="<?=$anodesejado?>">
            <input type="submit" value="Calcular Idade">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
        if ($anonasc >= 0){
            if ($anodesejado >= $anonasc){
                $idade = $anodesejado - $anonasc;
                echo "Quem nasceu em <strong>$anonasc</strong> vai ter <strong>$idade</strong> anos em <strong>$anodesejado</strong>";
            } else {
                echo "o ano desejado deve ser maior ou igual ao ano de nascimento";
            } 
        } else{
                echo "Erro, digite anos válidos.";
        }
        ?>
    </section>
</body>

</html>