
<?php
/*
for ($i = 1; $i <= 10; $i++) {  // Conta de 0 a 10
    echo $i, "\n";
}

$a = 9;
echo str_pad($a, 2, " ", STR_PAD_LEFT);  // Preenche com algum valor
*/
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
<head>

<body>
    <ul>
        <?php
        for ($i = 0; $i <= 10; $i++) {
            ?>

            <li>2 * <?=$i; ?> = <?=(2 * $i); ?> </li>

            <?php
        }
        ?>
    </ul>
</body>
</html>
