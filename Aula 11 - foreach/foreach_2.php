
<?php

$alunos = [
    'aluno1' => [
        'nome' => 'Julia',
        'nota' => 4
    ],
    'aluno2' => [
        'nome' => 'Roberta',
        'nota' => 8
    ],
    'aluno3' => [
        'nome' => 'Eduardo',
        'nota' => 10
    ],
    'aluno4' => [
        'nome' => 'Deldoro',
        'nota' => 0
    ],
    'aluno5' => [
        'nome' => 'Felipe',
        'nota' => 2
    ]
];

foreach ($alunos as $aluno) {
    foreach ($aluno as $chave => $valor) {
        echo "{$chave}: {$valor}\n";
    }
    echo "\n";
}
