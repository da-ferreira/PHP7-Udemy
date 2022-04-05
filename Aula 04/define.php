<?php

define("MIN_AGE", 18);
define("MAX_AGE", 91);  // Constante chamada "MAX_AGE" com valor 91

$idade = 21;

if ($idade >= MIN_AGE && $idade <= MAX_AGE) {
    echo "Acesso liberado.\n";
} else {
    echo "Acesso negado.\n";
}

// Constante criada pelo proprio PHP
echo PHP_VERSION, "\n";
echo "{$argv[0]}, ", __FILE__, "\n";
