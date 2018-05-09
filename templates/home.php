<?php
    /* Template Name: Principal */ 
    get_header();
?>

    <section id="amparo">
        <div class="contenedor">
            <?php echo do_shortcode('[rev_slider alias="principal"]'); ?>
           
        </div>
    </section>

    <section id="mcl" class="template-section">

        <div class="flex">
            <div class="columna">
                <article class="quienes-somos">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MCL.png" alt="MCL">

                    <a href="/acerca-de-mcl/"><h2>Magna Carta Lex</h2></a>

                    <p class="justify">Somos una firma de abogadas y abogados especializada en amparo, así como en derechos humanos y en temas constitucionales y referentes a las soberanías de los Estados, en México y/o en los diversos mecanismos internacionales, como por ejemplo la Corte Internacional de Justicia, la Comisión Interamericana de Derechos Humanos o la Corte Interamericana de Derechos Humanos, que trata a sus clientas y clientes de manera personalizada, en un entorno de familiaridad.</p>

                    <p class="justify">Nuestros productos y servicios jurídicos pasan por un riguroso proceso de perfeccionamiento que tiene como destino la excelencia.</p>
                </article>



            </div>
            <div class="columna"></div>
        </div>


    </section>

    <section id="pro" class="template-section padding-50">
        <a href="/pro-bono-y-equidad-de-genero/"><h2 class="text-center">
            <i>Pro bono </i>y equidad de género
        </h2></a>
        <p class="sup">Creemos en la constante necesidad de impulsar el estado de las cosas hacia adelante, y en la equidad de género, que, en lo que nos compete, desemboca en la autonomía de las personas respecto a la plena defensa de sus derechos y en el trato equitativo a quienes forman parte de nuestra firma.</p>
        <p class="inf">Trabajamos bajo el principio referente a que la mejor forma de ayudarnos, es ayudando a los demás. Por eso, cuando tomamos un caso <i>pro bono</i> (voluntariamente y sin retribución monetaria), más que defender a una persona en particular, pretendemos impactar positivamente a todas las personas en general. </p>

        <img class="center" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mcl/equidadGenero.png" alt="balanza con hombre y mujer frente a la ciudad">
    </section>

  

     <section id="blog" class="template-section padding-50">
        <a href="/blog"><h2 class="text-center margin-bot">Blog</h2></a>
        <div class="contenedor">
        	<?php echo do_shortcode ('[vc_row][vc_column][mk_blog style="grid" post_count="-1" exclude_post_format=""][/vc_column][/vc_row]'); ?>
        </div>

    </section>

    <section id="suscribir" class="template-section padding-100">
        <div class="flex">
            <div class="columna"></div>
            <div class="columna">
                <h2 class="text-center">Suscríbase a nuestro blog</h2>
                <!-- Begin MailChimp Signup Form -->

                <div id="mc_embed_signup">
                    <form action="https://magnacartalex.us12.list-manage.com/subscribe/post?u=e942e1e67e8f86d86b4fddbf5&amp;id=d8127974f7" method="post" name="mc-embedded-subscribe-form" target="_blank">
                        <div id="mc_embed_signup_scroll">

                            <div class="mc-field-group">
                                <input type="email" value="" name="EMAIL" class="email" placeholder="Instroduzca su correo electrónico">
                            </div>                         
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e942e1e67e8f86d86b4fddbf5_d8127974f7" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Suscribirme" name="subscribe" id="mc-embedded-subscribe" class="boton azul"></div>
                        </div>
                    </form>
                </div>
                <!--End mc_embed_signup-->
            </div>
        </div>
    </section>


    <?php 
    get_footer();
?>
