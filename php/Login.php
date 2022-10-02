<?php
require_once 'Usuarios.php';
$u = new Usuario();
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="../css/Login.css">

</head>

<body>

    <div id="main-login">
        <h1>Entrar</h1>

        <form method="POST">

            <div class="full-box">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail">
            </div>
            <div class="half-box spacing">
                <label for="password">Senha</label>
                <input type="password" name="senha" id="password" placeholder="Digite a sua Senha">
            </div>
            <div class="full-box">
                <input type="submit" id="btn-submit" value="Entrar">
            </div>

            <a href="Registro.php">Ainda não possui Cadastro? <strong>Cadastre-se Já</strong></a>

        </form>
    </div>

    <?php
    if (isset($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if (!empty($email) && !empty($senha)) {
            $u->conectar("tela_login", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($u->logar($email, $senha)) {
                    header("location: http://192.168.15.9/");
                } else {
    ?>
                    <div class="msg-erro">
                        Email e/ou senha estão incorretos!
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="msg-erro">
                    <?php echo "Erro: " . $u->msgErro; ?>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="msg-erro">
                Preencha todos os campos!
            </div>
    <?php
        }
    }
    ?>

</body>

</html>