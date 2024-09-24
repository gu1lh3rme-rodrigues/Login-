<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas</title>
</head>
<body>
<?php
            if ($_POST) {
                $user = $_POST['user'];
                $senha = $_POST['senha'];

                $user_correta_hash = md5("ds12");
                $senha_correta_hash = md5("321");

                if (md5($user) == $user_correta_hash && md5($senha) == $senha_correta_hash) {
                    header("Location: index_array.php");
                    exit();
                } else {
                    echo "Credenciais Inválidas! <a href='index.php'>Tente novamente</a>";
                }
            }
            ?>
</body>
</html>
