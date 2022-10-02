<?php
session_start();
unset($_SESSION['id_usuario']);
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Glove</title>

    <link rel="stylesheet" type="text/css" href="../css/Home.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Smart Glove</h2>
            </div>
            <!--logo-->
            <div class="menu">
                <a href="Home.php">
                    Home
                </a>
                <a href="Sobre.php">
                    Sobre
                </a>
                <a href="Contato.php">
                    Contato
                </a>
                <a class="btn-menu" href="Login.php">
                    Login
                </a>
            </div>
            <!--menu-->
        </div>
        <!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="main-cta">
                <h2>Smart Glove</h2>
                <p>Comece a Usar Agora Mesmo</p>
                <a href="Registro.php"><button>Cadastrar</button></a>
            </div>

            <div class="diferenciais">
                <div class="diferencial-single">
                    <i class="fas fa-anchor"></i>
                    <h2>1 Passo</h2>
                    <p>Faça o seu Cadastro</p>
                </div>
                <div class="diferencial-single">
                    <i class=""></i>
                    <h2>2 Passo</h2>
                    <p>Coloque a Luva e faça um Gesto</p>
                </div>
                <div class="diferencial-single">
                    <i class=""></i>
                    <h2>3 Passo</h2>
                    <p>Pronto! Tradução Feita com Sucesso</p>
                </div>
            </div>

        </div>
        <!--center-->
    </section>
    <!--main-->

    <section class="sobre">
        <div class="center">
            <div class="chamada-sobre">
                <h2>Sobre a Smart Glove</h2>
                <p>Criada com o intuito de melhorar as relações e interações sociais de deficientes auditivos, afônicos,
                    cegos e de pessoas que não possuem o conhecimento da linguagem de sinais ou seja as libras.</p>
            </div>
            <div class="conteudo-sobre">
                <p>Priorizando Sempre a Praticidade e o seu conforto respeitando as limitações e as capacidades de cada
                    um. Basta se cadastrar, colocar a Smart Glove, fazer o gesto desejado e pronto será traduzido, de
                    maneira simples e fácil.</p>
                <p>Feita para ajudá-lo(a) a compreender mais sobre a linguagem de sinas, libras, ajudando em sua
                    comunicação e entendimento dessa linguagem, incluindo mais pessoas à este mundo, tornando-o mais
                    dinâmico, prático e inclusivo</p>
            </div>
        </div>
    </section>



    <script src="https://kit.fontawesome.com/16544f2865.js" crossorigin="anonymous"></script>

</body>

</html>