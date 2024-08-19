<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <?php
        $nome = "Joao";
        $sobrenome = "Pacheco";
        $apelido = "Pasexo";
        const PAIS = "Brasil";
        

        date_default_timezone_set("America/Sao_Paulo"); //GMT-3
        echo "Hoje é dia \t" . date("d/M/Y");
        echo "\nA hora atual é \t" . date("G:i:s");
        echo "\t Meu nome é $nome \t \"$apelido\" \t$sobrenome! e moro no " . PAIS;
    ?>
</body>
</html>