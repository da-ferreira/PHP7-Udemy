
<?php

$nomesFuncionarios = ["Valentina", "Fernanda", "Pedro"  , "Lucas", "Marcos", "Joana"];

$nome = filter_input(INPUT_POST, "nome_usuario", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email_usuario", FILTER_SANITIZE_STRING);

$funcionario = "";
$funcionarioCod = filter_input(INPUT_POST, "nome_funcionario", FILTER_SANITIZE_NUMBER_INT);

if ($funcionarioCod) {
    $funcionario = $nomesFuncionarios[$funcionarioCod];
}

/*
if (isset($_POST['nome_usuario'])) {  // Se essa variável existe
    $nome = $_POST['nome_usuario'];
}

if (isset($_POST['email_usuario'])) {
    $email = $_POST['email_usuario'];
}

if (isset($_POST['nome_funcionario'])) {
    $funcionario = $nomesFuncionarios[$_POST['nome_funcionario']];
}
*/

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>
        body {
            font: normal 1.2em Arial;
        }

        ul {
            list-style: none;
        }

        input, select {
            padding: 5px;
            margin: 5px;
        }

        button {
            width: 100px;
            height: 40px;
            border-radius: 10px;
        }

        hr {
            margin: 10px 0px 10px 0px;
        }
    </style>
<head>

<body>
    <form action="." method="POST">  <!-- Os dados são enviados para a mesma página -->
        <ul>
            <li>Nome: <input type="text" name="nome_usuario" /></li>
            <li>Email: <input type="email" name="email_usuario" /></li>
            <li>
                Funcionário:

                <select name="nome_funcionario">
                    <?php
                    for ($i = 0; $i < count($nomesFuncionarios); $i++) {
                        ?>
                        <option value="<?= $i; ?>"><?= $nomesFuncionarios[$i]; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </li>
            <li>
                <button type="submit" name="botao_enviar">Cadastrar</button>
            </li>
        </ul>
    </form>
    <hr>  <!-- Linha horizontal -->

    <p>Nome: <?= $nome; ?></p>
    <p>Email: <?= $email; ?></p>
    <p>Funcionário: <?= $funcionario; ?></p>
</body>
</html>
