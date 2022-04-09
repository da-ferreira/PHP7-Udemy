
<?php

function ler(string $caminhoArquivo)
{
    $arquivo = fopen($caminhoArquivo, "r");
    $texto = fread($arquivo, filesize($caminhoArquivo));
    fclose($arquivo);
    return $texto;
}
