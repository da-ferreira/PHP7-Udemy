
<?php

$salario = 1567.90;
$valorAjustado = 0;

function ajustarSalario(float $salario, float &$valorAjuste)
{
    // A variável é recebida por referencia (&). O & vai somente dentro do parametro da função
    $valorAjuste = 300;
    return ($salario + $valorAjuste);
}

$salario = ajustarSalario($salario, $valorAjustado);
echo "O valor ajustado é de R$ {$salario}, com aumento de R$ {$valorAjustado}";
