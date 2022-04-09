
<?php

include 'ler.php';          // Importa varias vezes (se o include for usado mais de uma vez no arquivo)
include_once 'gravar.php';  // Importa somente uma vez

//require 'ler.php';
//require_once 'gravar.php';

gravar("Include", "file.txt");
echo ler("file.txt");
