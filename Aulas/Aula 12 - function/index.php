
<?php

/**
 * Soma dois números
 *
 * @param integer $n1 Primeiro valor a ser somado
 * @param integer $n2 Segundo valor a ser somado (com valor padrão = 0)
 * @return integer Soma de $n1 e $n2
 */
function somar(int $n1, int $n2 = 0)
{
    return $n1 + $n2;
}

function exibirNome(string $nome)
{
    echo "Meu nome é {$nome}\n";
}

exibirNome("David");
echo somar(10);
