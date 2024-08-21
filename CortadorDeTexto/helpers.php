<?php 

function resumirTexto (string $texto, int $limite): string{
    $textolimpo = trim($texto);
    if(mb_strlen($textolimpo) <= $limite){
        return $textolimpo;
    }
    $resumirtexto = mb_substr($textolimpo,0, mb_strrpos(mb_substr($textolimpo, 0, $limite), ' '));

    return $resumirtexto;
}