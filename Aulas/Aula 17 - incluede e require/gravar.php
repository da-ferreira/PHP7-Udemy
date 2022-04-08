
<?php

function gravar(string $texto, string $caminhoArquivo)
{
    $arquivo = fopen("{$caminhoArquivo}", "a+");
    fwrite($arquivo, "{$texto} \n");
    fclose($arquivo);
}
