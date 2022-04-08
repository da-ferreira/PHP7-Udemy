
<?php

$arr = [];

for ($i = 0; $i <= 30; $i++) {
    $arr[] = $i;
}

for ($i = 0; $i < count($arr); $i++) {
    echo "arr[$i] = {$arr[$i]}\n";
}

echo var_dump($arr);  // Informações sobre a variável $arr
