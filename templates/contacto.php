<?php
    /* Template Name: Contacto */ 
    get_header();
?>

    <section id="contacto" class="template-section padding-50">
        <div class="contenedor">
            <div class="flex">
                <div class="columna">
                    <img class="contacto center" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/contacto.png" alt="notas de contácto">
                    <h1>¿En qué podemos ayudarle?</h1>
                    <?php echo do_shortcode('[caldera_form id="CF5ac382867c1bf"]'); ?>

                    <p class="text-justify-center aviso-legal"><strong>Aviso legal:</strong> los mensaje enviados a través de nuestro sitio web y/o cualquier otro medio que usted ocupe para contactarnos, no implican alguna clase de vinculación contractual, en ese sentido, rogamos se abstenga de enviarnos información privada, confidencial y/o secreta antes de que así haya sido acordado, ya que, de lo contrario, si no se establece un vínculo contractual con usted, eso no impedirá, en su caso, que una o más personas físicas o morales nos autoricen en una o más controversias en conexión con la cuestión a estudio o con una o más cuestiones relacionadas. Parte de la información contenida en este sitio web, en nuestro blog y en nuestras redes sociales o plataformas electrónicas o cibernéticas, pretende ser ilustrativa o de carácter académico o es producto de la manifestación de las ideas, ateniéndonos a la libertad de su difusión por cualquier medio de expresión, de acuerdo con lo dispuesto por el artículo 6 de la Constitución Política de los Estados Unidos Mexicanos; y parte podría considerarse publicidad de abogadas y abogados. No se pueden garantizar los mismos resultados en todos los casos. De darse alguna discrepancia, deberá atenderse a la versión en español de este sitio web. </p>

                </div>
                <div class="columna padding-60">
                    <h2>Contáctenos</h2>

                    <div class="info-contacto">
                        <div class="flex">
                            <div class="columna">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/contacto.svg" alt="">
                            </div>
                            <div class="columna">
                                <a href="mailto:contacto@magnacartalex.com">contacto@magnacartalex.com</a>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="columna">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/phone.svg" alt="">
                            </div>
                            <div class="columna">
                                <a href="tel:55 9000 2393">+52 (55) 9000 2393</a>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="columna">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/whatsapp.svg" alt="">
                            </div>
                            <div class="columna">
                                <a href="tel:55 9000 2393">+52 (55) 7332 1461</a>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="columna">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/telegram.svg" alt="">
                            </div>
                            <div class="columna">
                                <a href="tel:55 9000 2393">@magnacartalex</a>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="columna">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/BBM.svg" alt="">
                            </div>
                            <div class="columna">
                                <p>DD31575A</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="columna">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/confide.svg" alt="">
                            </div>
                            <div class="columna">
                                <p>015573321461</p>
                            </div>
                        </div>

                    </div>

                    <hr>

                    <div class="info-direccion">
                        <div class="flex">
                            <div class="columna">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/pointer.svg" alt="ubicacion">
                            </div>
                            <div class="columna">
                                <h3 class="blue-contact">Oficina principal</h3>
                                <p>Torre World Trade Center CDMX <br> Montecito 38 <br> Piso 32, oficina 7 <br> Colonia Nápoles <br> Demarcación territoral Benito Juárez <br> Ciudad de México <br> Código postal 03810 Estados Unidos Mexicanos</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="columna">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/pointer.svg" alt="ubicacion">
                            </div>
                            <div class="columna">
                                <h3 class="blue-contact">Resto de México</h3>
                                <p>Magna Carta Lex cuenta con relaciones con despachos jurídicos, que, en su caso, nos permiten tramitar y llevar asuntos en el resto de la república mexicana.</p>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="columna">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/pointer.svg" alt="ubicacion">
                            </div>
                            <div class="columna">
                                <h3 class="blue-contact">Resto del mundo</h3>
                                <p>Magna Carta Lex cuenta con relaciones con despachos jurídicos, que, en su caso, nos permiten tramitar y llevar asuntos en las partes del mundo relevantes para el ejercicio de nuestras áreas de práctica. </p>
                            </div>
                        </div>

                    </div>





                </div>
            </div>
        </div>
    </section>

    <?php 
    get_footer();
?>
