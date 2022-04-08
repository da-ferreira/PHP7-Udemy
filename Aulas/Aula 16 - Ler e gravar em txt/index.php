
<?php

function gravar(string $texto, string $caminhoArquivo)
{
    $arquivo = fopen("{$caminhoArquivo}", "a+");
    fwrite($arquivo, "{$texto} \n");
    fclose($arquivo);
}

function ler(string $caminhoArquivo)
{
    $arquivo = fopen($caminhoArquivo, "r");
    $texto = fread($arquivo, filesize($caminhoArquivo));
    fclose($arquivo);
    return $texto;
}

/*
for ($i = 0; $i < 5; $i++) {
    gravar(date("d/m/Y H:i:s"), "exemplo.txt");
    sleep(5);
}
*/

echo ler("exemplo.txt");
