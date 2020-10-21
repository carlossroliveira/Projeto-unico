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
    <link rel="stylesheet" href="estilo/style.css">

</head>


<!-- 21/09/2020 subindo para Github -->

<body class="body-principal">

    <!-- Cima -->
    <header class="header-principal sticky fixed-top menu">
        <nav class="navbar navbar-expand-md container nav-principal">

            <a class="container-img-desktop" href="#">
                <img class="logo-desktop" src="./img/logo/LOGO.png" alt="logo-desktop">
            </a>
            <a class="container-img-mobile" href="#">
                <img class="logo-mobile" src="./img/logo/LOGO-MOBILE.png" alt="logo-mobile">
            </a>

            < <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
                <span class="mobile-btn "></span>
                </button>

                <div class="collapse navbar-collapse menu-principal" id="navbarNavAltMarkup">
                    <div class="navbar-nav menu-nav">
                        <a class="nav-item nav-link" href="#inicio">Inicio</a>
                        <a class="nav-item nav-link" href="#servicos">Serviços</a>
                        <a class="nav-item nav-link" href="#horario">Horário</a>
                        <a class="nav-item nav-link" href="#contato">Contato</a>
                        <a class="nav-item nav-link" href="#duvida">Duvida</a>
                        <div class="iconeBotaoInterno">
                            <div class="iconeRedes">
                                <a href="https://www.instagram.com/barbeariaw.tom/?hl=pt-br" target="_blank"><i
                                        class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>

                            <div class="iconeRedes">
                                <a href="https://www.facebook.com/washington.monalisa" target="_black"><i
                                        class="fa fa-facebook-official" aria-hidden="true"></i></a>
                            </div>

                            <div class="iconeRedes">
                                <a href="https://api.whatsapp.com/send?phone=5571986938094&text=Seja%20Bem%20Vindo"
                                    target="_blank""><i class=" fa fa-whatsapp" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

        </nav>
    </header>

    <!-- meio -->
    <main class="main-principal">

        <!-- Parallax -->
        <section class="parallax pi" id="inicio">

            <div class="titulo-parallax">
                <h1 class="tituloP">Barbearia W.Tom</h1>
            </div>

        </section>
        <!--  Servicos  -->
        <section id="servicos">
            <div class="container">
                <div class="separador-02"></div>
            </div>
            <h1 class="titulo-slick">Serviços</h1>

            <!-- Carousek -->
            <div class="responsive container carousel slick-principal">
                <div>
                    <img class="img-slick" src="./img/servicos/barba.png" alt="">
                    <h2 class="titulo-slick01">Barba</h2>
                </div>
                <div>
                    <img class="img-slick" src="./img/servicos/Cabelo.png" alt="">
                    <h2 class="titulo-slick01">Cabelo</h2>
                </div>
                <div>
                    <img class="img-slick" src="./img/servicos/Relaxamento.png" alt="">
                    <h2 class="titulo-slick01">Coloração</h2>
                </div>
                <div>
                    <img class="img-slick" src="./img/servicos/Sobrancelha.png" alt="">
                    <h2 class="titulo-slick01">Sobrancelha</h2>
                </div>
                <div>
                    <img class="img-slick" src="./img/servicos/tesoura.png" alt="">
                    <h2 class="titulo-slick01">Tesoura</h2>
                </div>
            </div>
        </section>
        <!-- horario -->
        <section id="horario">
            <div class="container">
                <div class="separador-01"></div>
            </div>
            <h1 class="table-titulo">Horário de atendimento</h1>

            </div>
            <div class="container animate__animated animate__bounceInRight">
                <table class="table table table-hover table-dark">
                    <tbody class="">
                        <tr>
                            <th scope="row">Segunda-Feira</th>
                            <td class="table-text" colspan="4">Fechado</td>
                        </tr>
                        <tr>
                            <th scope="row">Terça-Feira</th>
                            <td>07:00</td>
                            <td>12:00</td>
                            <td>13:00</td>
                            <td>17:30</td>
                        </tr>
                        <tr>
                            <th scope="row">Quarta-Feira</th>
                            <td>08:00</td>
                            <td>12:00</td>
                            <td>13:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Quinta-Feira</th>
                            <td>07:00</td>
                            <td>12:00</td>
                            <td>13:00</td>
                            <td>17:30</td>
                        </tr>
                        <tr>
                            <th scope="row">Sexta-Feira</th>
                            <td>08:00</td>
                            <td>12:00</td>
                            <td>13:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Sábado</th>
                            <td>07:00</td>
                            <td>12:00</td>
                            <td>13:00</td>
                            <td>17:30</td>
                        </tr>
                        <tr>
                            <th scope="row">Domingo</th>
                            <td class="table-text" colspan="4">Fechado</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>
        <!-- Contato -->
        <!-- <section class="section-contato" id="contato">
            <div class="container">
                <div class="form-principal">
                    <h1 class="titulo-contato">Contato</h1>
                    <div class="d-flex">
                        <div class="p-2 flex-fill animate__animated animate__slideInLeft">
                            <h3>
                                Fale conosco
                            </h3>

                            <form class="formulario">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome (obrigatório)</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="nome">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">E-mail (Obrigatório)</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="nome@exemplo.com">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Assunto</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Menssagem</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        rows="10"></textarea>
                                </div>
                                <input class="botaoEnviar" type="submit">
                            </form>
                        </div>
                        <div class="p-2 flex-fill animate__animated animate__slideInUp">
                            <div class="contato-parte2">
                                <h3>Contato</h3>
                                <div>
                                    <ul>
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <div class="end">
                                                Rua Athayde Seixas n° 14-E Garcia <br> Salvador-BA-CEP: 00000-000
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <div class="end">
                                                (71) 00000-0000 <br> (71) 00000-0000
                                            </div>

                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <div class="end">
                                                Emailseraaqui@hotmail.com
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <iframe class="map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d790.9551622547732!2d-38.508189470856095!3d-12.990850192646931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7160497b6b38db7%3A0xed21c14d78f0aadf!2sRua%20Athayde%20Seixas%2C%2014%20-%20Garcia%2C%20Salvador%20-%20BA%2C%2040100-260!5e1!3m2!1spt-BR!2sbr!4v1596140209810!5m2!1spt-BR!2sbr"
                                width="100%" height="63%" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="section-contato" id="contato">
            <div class="container">
                <div class="form-principal">
                    <h1 class="titulo-contato">Contato</h1>
                    <div class="d-flex">
                        <div class="p-2 flex-fill animate__animated animate__slideInLeft">
                            <h3>
                                Fale conosco
                            </h3>

                            <form class="formulario" method="POST">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome (obrigatório)</label>
                                    <input type="text" name="nome" class="form-control" id="exampleFormControlInput1"
                                        placeholder="nome">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">E-mail (Obrigatório)</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="nome@exemplo.com">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Assunto</label>
                                    <input type="text" name="assunto" class="form-control" id="exampleFormControlInput1"
                                        placeholder="assunto">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">menssagem</label>
                                    <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1"
                                        rows="10" placeholder="Mensagem"></textarea>
                                </div>
                                <input class="botaoEnviar" type="submit" name="Reservar">
                                <div class="loading"></div>
                            </form>
                        </div>
                        <div class="p-2 flex-fill animate__animated animate__slideInUp">
                            <div class="contato-parte2">
                                <h3>Contato</h3>
                                <div>
                                    <ul>
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <div class="end">
                                                Rua Athayde Seixas n° 14-E Garcia <br> Salvador-BA-CEP: 00000-000
                                            </div>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <div class="end">
                                                (71) 00000-0000 <br> (71) 00000-0000
                                            </div>

                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <div class="end">
                                                Emailseraaqui@hotmail.com
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <iframe class="map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d790.9551622547732!2d-38.508189470856095!3d-12.990850192646931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7160497b6b38db7%3A0xed21c14d78f0aadf!2sRua%20Athayde%20Seixas%2C%2014%20-%20Garcia%2C%20Salvador%20-%20BA%2C%2040100-260!5e1!3m2!1spt-BR!2sbr!4v1596140209810!5m2!1spt-BR!2sbr"
                                width="100%" height="63%" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mostrar">
        <?php include 'enviar.php'; ?>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {?>
        <script>
        $(document).ready(function() {
            swal("Sucesso", "Sua mensagem foi enviada", "success");
        });
        </script>
        <?php } ?>

        
    </div>

        <!-- Duvida -->
        <section id="duvida" class="animate__animated animate__backInLeft">
            <div class="duvida-pri">
                <h1 class="titulo-duvida">Dúvida</h1>
                <div class="container duvida-seg">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 seg-duvida">
                            <h2 class="texto-duvida">
                                Tenha acesso ao nosso Site por qualquer dispositivo Computador Tablet ou Celular
                            </h2>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <img class="img-duvida" src="./img/perfect.png" alt="imagem monitor">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="separador-03"></div>
            </div>
        </section>

    </main>

    <!-- baixo -->
    <footer class="footer-principal">
        <div class="container row footer-conteudo">

            <div class="col-lg-3 col-md-4 col-sm-6 conteudo-1">
                <p>
                    <i class="fas fa-home"></i> Rua Athayde Seixas - Garcia n° 14 E Salvador - Bahia - CEP: 00000-000
                    <br>
                    <i class="fas fa-envelope"></i> emailseraaqui@hotmail.com <br>

                    <i class="fas fa-mobile-alt"></i> (71) 00000-0000
                </p>
                <p id="proH" class="pro"><small> <i class="fa fa-copyright" aria-hidden="true"></i> 2020 W.Tom |
                        Desenvolvido por <br> <a href="#">Carlos
                            Oliveira</a> </small></p>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 conteudo-2">
                <h5>siga-nas redes</h5>
                <a href="https://www.facebook.com/washington.monalisa" target="_blank"><img class="rede-social"
                        src="./img/redes-s/facebook.png" alt="facebook"></a>

                <a href="https://www.instagram.com/barbeariaw.tom/?hl=pt-br" target="_blank"> <img class="rede-social"
                        src="./img/redes-s/instagram-esbocado.png" alt="Instagram"></a>

                <a href="https://api.whatsapp.com/send?phone=5571986938094&text=Seja%20Bem%20Vindo" target="_blank">
                    <img class="rede-social" src="./img/redes-s/whatsapp.png" alt="whatsapp"></a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 conteudo-3">
                <h5>informações</h5>
                <ul>
                    <li><a class="inf" href="#">Serviços</a></li>
                    <li><a class="inf" href="#">Horário</a></li>
                    <li><a class="inf" href="#">Contato</a></li>
                    <li><a class="inf" href="#">Duvida</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 conteudo-4">
                <h5>Formas de Pagamento</h5>
                <img class="img-pagamento" src="./img/pagamento/visa-icon-sm.png" alt="visa">
                <img class="img-pagamento" src="./img/pagamento/mastercard-icon-sm.png" alt="master card">
                <img class="img-pagamento" src="./img/pagamento/Cartão_Elo_.png" alt="Cartão Elo">
                <p>Pagamentos em até 2x em parcelas a partir de R$ 30,00.</p>
            </div>

            <div id="proS" class="mod"></div>
        </div>

        <a href="#top" class="up">
            <img class="seta" src="./img/envio.png" alt="seta">
        </a>

    </footer>

    <!--  <script type="module" src="./app.js/javaScript.js"></script> -->
    <!-- IMPORTACOES -->

    <script src="./bootstrap/js/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>


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