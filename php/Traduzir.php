<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("location: Login.php");
    exit;
}
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Glove</title>

    <link rel="stylesheet" type="text/css" href="../css/Traduzir.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


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
                <a class="btn-menu" href="Home.php">
                    Encerrar Sessão
                </a>
            </div>
            <!--menu-->
        </div>
        <!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="main-cta">
                <h2>Tradução</h2>
                <p>Comece a Usar Agora Mesmo</p>
                <a href="""><button>Traduzir</button></a>
            </div>

            <div class=" diferenciais">
            </div>
            <div class="diferencial-single">
                <i class="fas fa-anchor"></i>
                <h2>A</h2>
                <p></p>
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

        </div>
    </section>


    <script src="https://kit.fontawesome.com/16544f2865.js" crossorigin="anonymous"></script>

</body>

</html>