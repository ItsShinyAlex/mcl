<?php
    /* Template Name: Contacto */ 
    get_header();
?>

<section id="contacto">
    <div class="flex">
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto/contacto.png" alt="notas de contácto">
            <h2>¿En qué podemos ayudarle?</h2>
            <form action="">
                <input type="text" placeholder="Su nombre">
                <input type="text" placeholder="Su correo electrónico">
                <input type="text" placeholder="Su mensaje">
                <input type="checkbox" required>Al marcar esta caja y enviar el mensaje haciendo clic en “Enviar”,
                usted confirma que ha leído y acepta nuestro <span class="purpleText">aviso de privacidad</span>
                y los términos del <span class="purpleText">aviso legal</span>.
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div class="columna">
            <h1>Contáctenos</h1>
            contacto@magnacartalex.com
            +52 (55) 9000 2393
            +52 (55) 7332 1461
            @magnacartalex
            DD31575A
            015573321461
            
            <h2 class="blue-contact">Oficina principal</h2>
            <p>Torre World Trade Center CDMX
            Montecito 38
            Piso 32, oficina 7
            Colonia Nápoles
            Demarcación territorial Benito Juárez 
            Ciudad de México
            Código postal 03810
            Estados Unidos Mexicanos</p>
            
            <h2 class="blue-contact">Resto de México</h2>
            <p>Magna Carta Lex cuenta con relaciones con
            despachos jurídicos, que, en su caso, nos
            permiten tramitar y llevar asuntos en el
            resto de la república mexicana.</p>

        </div>
    </div>
</section>

<section id="contacto-bot">
    <div class="flex">
        <div class="columna">
            <p><span class="purpleText">Aviso legal:</span> los mensaje enviados a través de nuestro sitio web y/o cualquier otro medio que usted ocupe para contactarnos, no implican alguna clase de vinculación contractual, en ese sentido, rogamos se abstenga de enviarnos información privada, confidencial y/o secreta antes de que así haya sido acordado, ya que, de lo contrario, si no se establece un vínculo contractual con usted, eso no impedirá, en su caso, que una o más personas físicas o morales nos autoricen en una o más controversias en conexión con la cuestión a estudio o con una o más cuestiones relacionadas. Parte de la información contenida en este sitio web, en nuestro blog y en nuestras redes sociales o plataformas electrónicas o cibernéticas, pretende ser ilustrativa o de carácter académico o es producto de la manifestación de las ideas, ateniéndonos a la libertad de su difusión por cualquier medio de expresión, de acuerdo con lo dispuesto por el artículo 6 de la Constitución Política de los Estados Unidos Mexicanos; y parte podría considerarse publicidad de abogadas y abogados. No se pueden garantizar los mismos resultados en todos los casos. De darse alguna discrepancia, deberá atenderse a la versión en español de este sitio web. </p>
        </div>
        <div class="columna">                    
            <h2 class="blue-contact">Resto del mundo</h2>
            <p>Magna Carta Lex cuenta con relaciones con 
            despachos jurídicos, que, en su caso, nos 
            permiten tramitar y llevar asuntos en las 
            partes del mundo relevantes para el ejercicio 
            de nuestras áreas de práctica. </p>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>
