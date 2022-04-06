
<?php

$idade = 21;
$acesso = true;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if, else, elseif</title>
<head>

<body>
    <?php
    if ($idade >= 18 && $acesso) {
        ?>
        <h1 style="color: green;">Autorizado</h1>
        <?php
    } else {
        ?>
        <h1 style="color: red;">Negado</h1>
        <?php
    }
    ?>
</body>
</html>
