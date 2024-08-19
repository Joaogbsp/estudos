<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de Número Real</title>
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST["n"] ?? 0;
            
            echo" <p> Analisando o número " . number_format($num, 3, ",",".") . " informado pelo usuário<p>";        

            $int = (int)$num;
            $fra = $num - $int;

            echo "<ul>A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") ."</strong><li>";
            echo "<li> A parte fracionária do número é <strong>". number_format($fra, 3, ",", "." ) ."</strong><li>"
        ?>
    </main>
    <button onclick="javascript:history.go(-1)">Voltar</button>
    
</body>
</html>