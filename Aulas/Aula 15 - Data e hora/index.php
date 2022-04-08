
<?php

/*
    d =  dia em número (08) | D = dia por nome da semana em inglês abreviado (Fri)
    m =  mês em número (04) | M = mês por nome em inglês abreviado (Apr)
    y =  ano abreviado (22) | Y = ano inteiro (2022)

    Outros parâmetros: https://www.php.net/manual/pt_BR/function.date.php
*/

date_default_timezone_set('America/Sao_Paulo');  //  A hora é a data são pega do servidor. Da pra mudar isso

echo date("D/M/Y"), "\n";
echo date("h:i:s"), "\n";
echo date("Y-m-d h:i:s"), "\n";  // Data e hora do padrão MySQL (ingles)
