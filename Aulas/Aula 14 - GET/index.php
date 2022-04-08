
<?php

$nomesFuncionarios = ["Valentina", "Fernanda", "Pedro"  , "Lucas", "Marcos", "Joana"];

$nome = filter_input(INPUT_GET, "nome_usuario", FILTER_UNSAFE_RAW);
$email = filter_input(INPUT_GET, "email_usuario", FILTER_VALIDATE_EMAIL);

$funcionario = "";
$funcionarioCod = filter_input(INPUT_GET, "nome_funcionario", FILTER_SANITIZE_NUMBER_INT);

if ($funcionarioCod) {
    $funcionario = $nomesFuncionarios[$funcionarioCod - 1];
}


/*
$nome = $_GET['nome_usuario'];  // Pega a QueryString com a chave 'nome'
$email = $_GET['email_usuario'];
$funcionario = $_GET['nome_funcionario'];

echo "{$nome}, {$email}";
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
    <form action="." method="GET">
        <ul>
            <li>Nome: <input type="text" name="nome_usuario" /></li>
            <li>Email: <input type="email" name="email_usuario" /></li>
            <li>
                Funcionário:

                <select name="nome_funcionario">
                    <?php
                    for ($i = 0; $i < count($nomesFuncionarios); $i++) {
                        ?>
                        <option value="<?= ($i + 1); ?>"><?= $nomesFuncionarios[$i]; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </li>
            <li>
                <button type="submit" name="botao_enviar">Cadastrar</button>
                <a href="http://localhost/PHP - Udemy/Aula 14 - GET/" target="_self">Atualizar</a>

            </li>
        </ul>
    </form>
    <hr>  <!-- Linha horizontal -->

    <p>Nome: <?= $nome; ?></p>
    <p>Email: <?= $email; ?></p>
    <p>Funcionário: <?= $funcionario; ?></p>
</body>
</html>

