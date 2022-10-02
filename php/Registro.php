<?php
require_once 'Usuarios.php';
$u = new Usuario();
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="../css/Registro.css">
</head>

<body>

    <div id="main-registro">
        <h1>Cadastre-se</h1>

        <form method="POST">

            <div class="full-box">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="Digite seu e-mail" maxlength="40">
            </div>
            <div class="half-box spacing">
                <label for="name">Nome</label>
                <input type="text" name="nome" placeholder="Digite o seu nome" maxlength="30">
            </div>
            <div class="half-box">
                <label for="lastname">Sobrenome</label>
                <input type="text" name="sobrenome" placeholder="Digite o seu Sobrenome" maxlength="30">
            </div>
            <div class="half-box spacing">
                <label for="password">Senha</label>
                <input type="password" name="senha" placeholder="Digite a sua Senha" maxlength="15">
            </div>
            <div class="half-box">
                <label for="passconfirmation">Confirme a sua Senha</label>
                <input type="password" name="confsenha" placeholder="Confirme a sua Senha" maxlength="15">
            </div>

            <div class="full-box">
                <input type="submit" id="btn-submit" value="Registrar">
            </div>

            <a href="Login.php">Já possui Cadastro? <strong>Entrar</strong></a>

        </form>
    </div>

    <?php
    //verificar se clicou no botao
    if (isset($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $sobrenome = addslashes($_POST['sobrenome']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarSenha = addslashes($_POST['confsenha']);
        //verificar se esta preenchido
        if (!empty($nome) && !empty($sobrenome) && !empty($email) && !empty($senha) && !empty($confirmarSenha)) {
            $u->conectar("tela_login", "localhost", "root", "");
            if ($u->msgErro == "") //se esta tudo ok
            {
                if ($senha == $confirmarSenha) {
                    if ($u->cadastrar($nome, $sobrenome, $email, $senha)) {
    ?>
                        <div id="msg-sucesso">
                            Cadastrado com sucesso! Acesse para entrar!
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="msg-erro">
                            Email ja cadastrado!
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="msg-erro">
                        Senha e confirmar senha não correspondem
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