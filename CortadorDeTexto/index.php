<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumir Texto</title>
</head>

<body>
    <main>
        <?php 
        
        include_once 'helpers.php';

        $texto = htmlspecialchars($_GET['texto']) ?? '';
        $limite = intval($_GET['limite']) ?? 0;
         
        
        ?>
        <h1>Resumidor de Texto</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="texto">Texto</label>
            <input type="text" name="texto" id="texto" value="<?=$texto?>">
            <label for="limite">Qual o limite de caracteres?</label>
            <input type="number" name="limite" id="limite" value="<?=$limite?>">
            <input type="submit" value="Enviar">


        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        if($texto && $limite > 0){
            echo "<p>" . resumirTexto($texto, $limite) . "<p>"; 
        }  else {
            echo "Insira um texto e um limite de caracteres válidos. <p>";
        }
        ?>
    </section>
</body>

</html>