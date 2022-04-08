
<?php

$nome = "David Ferreira de Almeida";
$comentario = "<p><strong>David Ferreira</strong> - Confira um exemplo em <a href='http://www.google.com'>Google</a></p>";

echo strlen($nome), "\n";                        // Tamanho da string
echo substr($nome, 0, 4), "\n";                  // Particiona a string
echo strtolower($nome), "\n";                    // Minuscula
echo strtoupper($nome), "\n";                    // Maiuscula
echo strip_tags($comentario, "<strong>"), "\n";  // Remove tags HTML de uma string. Estou permitindo a tag <strong>

$mensagem = "David Ferreira";
$procurar = "David";
$substituir = "João";
echo str_replace($procurar, $substituir, $mensagem), "\n";  // Diferencia maiúsculas e minúsculas
echo str_ireplace("dAviD", $substituir, $mensagem), "\n";   // NÃO diferencia maiúsculas e minúsculas

$nomeArray = explode(separator: " ", string: $nome);  // Quebra a string e devolve um array delimitado pelas
echo var_dump($nomeArray), $nomeArray[1], "\n";
