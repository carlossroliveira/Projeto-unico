<!-- Contato -->
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

            <!-- Mensagem de e-mail enviado -->
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
            
        </section>