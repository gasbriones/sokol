<?php
get_header();
?>
<body <?php body_class(); ?>>
<div id="main" class="clearfix wrapper">
  <header id="header" class="header">
    <?php include "nav.php"?>
  </header>
  <div id="main" class="grid-center main">
    <section class="col-12 grid slider">
      <div class="col-12 image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/slider.png"/>
      </div>
      <div class="col-12 grid-center caption">
        <div class="col-8 text">
          En cada caso particular, nuestro compromiso personal y<br>
          nuestra trayectoria profesional acompañan a cada uno de nuestros clientes.
        </div>
      </div>
    </section>
    <section class="col-12 grid-center section-menu">
      <div class="col-10 grid-spaceBetween">
        <div class="col-3 section-row flia">
          <figure class="section-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/flia-icon.png">
          </figure>
          <h1 class="section-title">Derecho de familia</h1>
          <div class="section-content">
            <p>
              Brindamos asesoramiento efectivo
              para la resolución de conflictos
              familiares, minoridad, incapacidad,
              sicesiones.
            </p>
          </div>
          <div class="section-link">
            <button class="more-info-btn">más info</button>
          </div>
        </div>
        <div class="col-3 section-row comercial">
          <figure class="section-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/comercial-icon.png">
          </figure>
          <h1 class="section-title">Derecho comercial</h1>
          <div class="section-content">
            <p>
              Somos consultores y agregados del
              Ministerio de Trabajo, Empleo y
              Seguridad Social desde hace décadas,
              avocados a la defensa de los
              trabajodores y el respecto de sus
              derechos escenciales
            </p>
          </div>
          <div class="section-link">
            <button class="more-info-btn">más info</button>
          </div>
        </div>
        <div class="col-3 section-row notorial">
          <figure class="section-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/notorial-icon.png">
          </figure>
          <h1 class="section-title">Derecho Notorial</h1>
          <div class="section-content">
            <p>
              Llevamos adelante los reclamos a
              empresas de servicios públicos o
              privados con las que habitualmente
              tiene que lidiar los usuarios, haciendo
              un seguimiento minucioso de cada
              caso hasta su resolución.
            </p>
          </div>
          <div class="section-link">
            <button class="more-info-btn">más info</button>
          </div>
        </div>
      </div>
    </section>

    <section id="estudio" class="col-12 grid-center about block">
      <div class="col-12 grid-center banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner-1.png">
      </div>
      <div class="col-11 grid-spaceBetween content">
        <div class="col-4">
          <figure class="border-transparent-black">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about-img.png">
          </figure>
        </div>
        <div class="col-7">
          <h1 class="title">Estudio Jurídico Claria&Sokol y Asoc.</h1>
          <h2 class="sub-title">Quienes somos</h2>
          <div class="section-content">
            <p>
              Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un
              sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos
              normal de las letras
            </p>
            <p>
              Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de
              páginas web usan el Lorem Ipsum como su texto por defecto
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="areas-del-derecho" class="col-12 grid-center block right-area">
      <div class="col-12 grid-center banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner-2.png">
      </div>
      <div class="col-12 grid family">
        <div class="col-12 grid pattern">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pattern-flia.png">
        </div>
        <div class="col-11 grid-spaceBetween content">
          <div class="col-4 image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/flia-icon.png">
          </div>
          <div class="col-8">
            <h1 class="title">Derecho de Familia</h1>
            <div class="section-content">
              <p>
                Tenemos mucha experiencia en el derecho sucesorio y de familia.<br>
                Asesoramos a nuestros clientes no sólo en procesos sucesorios sino también en la negociación y
                elaboración de acuerdos particionarios, anticipos de herencia.<br>
                También asesoramos en divorcios, alimentos, adjudicación de bienes por disolución <br>
                de sociedad conyugal.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 grid commerce">
        <div class="col-12 grid pattern">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pattern-comerce.png">
        </div>
        <div class="col-11 grid-spaceBetween content">
          <div class="col-4 image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/comercial-icon.png">
          </div>
          <div class="col-8">
            <h1 class="title">Derecho Comercial</h1>
            <div class="section-content">
              <p>
                Asesoramos en materia comercial y societaria a personas físicas y a grandes empresas, pymes,<br>
                asistiéndolos en:<br>
              <ul>
                <li>Asesoramiento general empresario;</li>
                <li>Contratos comerciales;</li>
                <li>Contratos comerciales;</li>
                <li>
                  Derecho societario:
                  <ul>
                    <li>constitución de sociedades,</li>
                    <li>compraventa de paquetes accionarios,</li>
                    <li>acuerdos de accionistas,</li>
                    <li>
                      conflictos societarios, contratos colaboración, fusiones y escisiones, trámites y
                      presentaciones<br>
                      ante la Inspección General de Justicia,
                    </li>
                  </ul>
                </li>
                <li>Fideicomisos de administración y garantía,</li>
                <li>Contratos de financiamiento, Concursos, Quiebras y Acuerdos Extrajudiciales,</li>
                <li> Ejecuciones.</li>
              </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 grid notorial">
        <div class="col-12 grid pattern">
          <img src="<?php echo get_template_directory_uri(); ?>/images/pattern-notorial.png">
        </div>
        <div class="col-11 grid-spaceBetween content">
          <div class="col-4 image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/notorial-icon.png">
          </div>
          <div class="col-8">
            <h1 class="title">Derecho Notorial</h1>
            <div class="section-content">
              <p>
                Asesoramos en materia comercial y societaria a personas físicas y a grandes empresas, pymes,<br>
                asistiéndolos en:
              <p>
              <ul>
                <li>Compraventas</li>
                <li>Hipotecas</li>
                <li>Sociedades</li>
                <li>Poderes</li>
                <li>Actas Notariales</li>
                <li>Fideicomisos</li>
                <li>Donaciones</li>
                <li>Trámites urgentes</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="corresponsales" class="col-12 grid-center block correspondent">
      <div class="col-12 grid-center banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner-3.png">
      </div>
      <div class="col-11 grid-spaceBetween content">
        <div class="col-4">
          <figure class="border-transparent-black">
            <img src="<?php echo get_template_directory_uri(); ?>/images/correspondent-img.png">
          </figure>
        </div>
        <div class="col-7">
          <h1 class="title">Corresponsales</h1>
          <h2 class="sub-title">Quienes somos</h2>
          <div class="section-content">
            <p>
              Nuestra modalidad de trabajo es en equipo y personalizada, respondiendo a las necesidades de cada uno de
              nuestros clientes. Contamos con excelentes profesionales en las distintas áreas de derecho, y
              corresponsalías en cada jurisdicción de la Provincia de Buenos Aires, como así también en todo el país.
            </p>
            <p>
              Estudiamos exhaustivamente cada consulta y buscamos dar siempre una solución integradora con las distintas
              áreas jurídicas que manejamos, usando el mejor criterio y sentido común.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="contacto" class="col-12 grid-center block contact">
      <div class="col-12 grid-center banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/banner-4.png">
      </div>
      <div class="col-12 grid-center content">
        <div class="col-9 grid-spaceBetween">
          <div class="col-4">
            <h1 class="title">Oficina</h1>
            <ul class="data">
              <li class="gps">Lavalle 1145, Piso 10 - CABA</li>
              <li class="phones">4382-3986 / 4381-6960</li>
              <li class="email">elclaria9@gmail.com</br>
                drafernandasokol@gmail.com
              </li>
            </ul>
          </div>
          <div class="col-6">
            <figure class="border-transparent">
              <img src="<?php echo get_template_directory_uri(); ?>/images/notcompress/mapa.png">
            </figure>
          </div>
        </div>
      </div>
    </section>
    <section class="col-12 grid-center block form">
      <div class="col-8 grid content">
        <h1 class="title">Envianos tu consulta</h1>
        <h2 class="sub-title">Póngase en contacto con nosotros y despeje sus dudas.</h2>
        <form class="col-12 grid">
          <div class="col-12 grid-spaceBetween">
            <div class="col-6">
              <input type="text" />
            </div>
            <div class="col-6">
              <input type="text" class="right"/>
            </div>
          </div>
          <div class="col-12 grid-spaceBetween">
            <div class="col-6">
              <input type="text" />
            </div>
            <div class="col-6">
              <input type="text" class="right"/>
            </div>
          </div>
          <div class="col-12 grid">
            <textarea class="col-12"></textarea>
          </div>
          <div class="col-12">
            <input type="submit" class="right" value="Enviar consulta">
          </div>
        </form>
      </div>
    </section>
  </div>
</div>
<div class="wrapper">
  <?php get_footer(); ?>
</div>
</body>
</html>
