<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" type="text/css" href="../css/Contato.css">
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
                <a class="btn-menu" href="Registro.php">
                    Cadastrar
                </a>
            </div>
            <!--menu-->
        </div>
        <!--center-->
    </header>

    <section class="main">
        <div class="center">

            <div class=" diferenciais">
            </div>
            <div class="diferencial-single">
                <i class="fas fa-anchor"></i>
                <h2>Ajude-nos mandando o seu Feedback</h2>
                <p>Estamos aqui para te ouvir</p>
                <p>Sua opinião é muito importante para a nossa Equipe</p>
                <p>Envie seu Feedback e ajude-nos a melhorar o nosso projeto</p>
            </div>

            <div id="main-contato">
                <h1>Fale Conosco</h1>
                <form method="POST">
                    <div class="half-box spacing">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" placeholder="Digite o seu nome" maxlength="30">
                    </div>

                    <div class="full-box">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="Digite seu e-mail" maxlength="40">
                    </div>

                    <div class="field">
                        <textarea name="message" placeholder="Digite sua mensagem aqui."></textarea>
                    </div>

                    <div class="full-box">
                        <input type="submit" id="btn-submit" value="Enviar">
                    </div>
                </form>
            </div>



        </div>
        <!--center-->
    </section>
    <!--main-->


</body>

</html>