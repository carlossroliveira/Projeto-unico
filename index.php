<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>w.tom</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/Favicon">
    <link rel="icon" type="image/png" sizes="32x32" href="img/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/Favicon/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- ANIMATE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <!-- ICONE -->
    <script src="https://kit.fontawesome.com/ebc6f6cdfd.js" crossorigin="anonymous"></script>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- ESTILO-CSS-COM-SASS -->
    <link rel="stylesheet" href="_estilo/style.css">

</head>

<!-- 21/09/2020 subindo para Github -->

<body class="body-principal">

    <?php 
        /* Topo */
        include "topo.php";
    ?>
    <!-- corpo -->
    <main class="main-principal">
    <?php 
        /* Parallax */
        include "parallax.php";
        /* Servicos */
        include "servicos.php";
        /* horario */
        include "horario.php";
        /* Contato */
        include "contato.php";
        /* Duvida */
        include "duvida.php";
    ?>
    </main>
    <?php 
        /* rodape */
        include "rodape.php";
    ?>

    <!-- IMPORTACOES bootstrap -->
    <script src="./bootstrap/js/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

    <!-- IMPORTACOES javascript -->
    <script src="./app.js/botaoTop.js"></script>
    <script src="./app.js/desenvolvedor.js"></script>
    <script src="./app.js/sticky.js"></script>
    <script src="./app.js/botaoMobile.js"></script>
    <script src="./app.js/digitar.js"></script>
    <script src="./app.js/scroll-suave.js"></script>
    <script src="./app.js/informacoes.js"></script>
    <script src="./app.js/ajax.js"></script>
    <script src="./app.js/sweetalert.js"></script>

    <!-- Slick -->
    <script src="./slick/slick/slick.min.js"></script>
    <script src="./app.js/carousel.js"></script>

    <!-- Mudar para active o menu de acordo com a área -->
    <script src="./app.js/menuTop.js"></script>

</body>
</html>