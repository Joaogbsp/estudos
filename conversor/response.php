<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>
    <main>
        <?php
        //DEFINE AS DATAS RELACIONADAS ÁS COTAÇÕES (ÍNICIO - FIM)
        $incio = date("m-d-Y", strtotime("-7 days"));
        $fim =  date("m-d-Y");
        //TRAZ AS INFORMAÇÕES DIRETAMENTE DA API DO BANCO CENTRAL
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $incio.'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $urleur = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'EUR\'&@dataInicial=\''.$incio.'\'&@dataFinalCotacao=\''. $fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        //CONSOME AS API'S E TRAZ AS COTAÇÕES
        $dadoseur = json_decode(file_get_contents($urleur), true);
        $dados = json_decode(file_get_contents($url), true);
        
        //CÓDIGO PARA CALCULAR AS COTAÇÕES
        $real = $_GET["valorbrl"];
        $cotacao = $dados["value"][0]["cotacaoCompra"]; 
        $cotacaoeuro = $dadoseur["value"][0]["cotacaoCompra"];
        $valorConvertido = $real / $cotacao;
        $valorConvertidoEuro = $real / $cotacaoeuro;
        
        //DEFINE O PADRÃO DE FORMATAÇÃO DA MOEDA (Biblioteca int)
        $padraoBRL = numfmt_create("pt-br", NumberFormatter::CURRENCY);
        $padraUSD = numfmt_create("en-US", NumberFormatter::CURRENCY);
        $padraoEUR = numfmt_create("fr-FR", NumberFormatter::CURRENCY);
        
        //PRINTA O RESPECTIVO RESULTADO FORMATADO
        echo "<p>Seus " . numfmt_format_currency($padraoBRL, $real, "BRL") . " equivalem a " . numfmt_format_currency( $padraUSD, $valorConvertido, "USD") . " e " . numfmt_format_currency($padraoEUR, $valorConvertidoEuro, "EUR") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)"> Voltar </button>
    </main>

</body>

</html>