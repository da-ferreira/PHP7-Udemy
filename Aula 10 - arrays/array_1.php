
<?php

//$nomes = array("Ana", "Julia", "Caio", "Gabi", "Felipi", 700, true, 1.3);
$nomes = ['Ana', 'Julia', 'Caio', 'Gabi', 'Felipi', 700, true, 1.3];  // Essa forma tmb funciona

for ($i = 0; $i < count($nomes); $i++) {
    echo "{$nomes[$i]}\n";
}

/* Array associativo (chave e valor) */

//$notas = ['aluno1' => 10, 'aluno2' => 5, 'aluno8' => 7];
$notas = array(
    'aluno1' => array('nome' => 'Júlia', 'nota' => 10),
    'aluno2' => 5,
    'aluno8' => 7
);  // Essa forma tmb funciona

echo "\n", $notas['aluno1']['nome'], "\n";
echo $notas['aluno2'], "\n";
