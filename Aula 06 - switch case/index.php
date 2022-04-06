
<?php

$dia = 2;

switch ($dia) {
    case 1:
        $msg = "dia 1";
        break;
    case 2:
        $msg = "dia 2";
        break;
    case 3:
        $msg = "dia 3";
        break;
    case 4:
        $msg = "dia 4";
        break;
    case 5:
        $msg = "dia 5";
        break;
    case 6:
        $msg = "dia 6";
        break;
    default:
        $msg = "não encontrado";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch case</title>
<head>
    <p>
        Olá, hoje é o <?=$msg;?>
    </p>
<body>

</body>
</html>
