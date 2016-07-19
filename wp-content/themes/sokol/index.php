<?php
get_header();
?>
<body <?php body_class(); ?>>
<div id="main" class="clearfix wrapper">
  <header id="header" class="header">
    <div class="grid grid-middle">
      <div class="col-4 logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-claria-sokol.png"/>
      </div>
      <div class="col-8 grid-center grid-middle menu-wrapper">
        <ul class="menu col-11">
          <li><a href="#acerca-de">Inicio</a></li>
          <li><a href="#museos">Estudio</a></li>
          <li><a href="#exposiciones">Áreas del derecho</a></li>
          <li><a href="#equipo">Corresponsales</a></li>
          <li><a href="#lo-que-estamos-haciendo">Novedades</a></li>
          <li><a href="#prensa">Contacto</a></li>
        </ul>
      </div>
    </div>
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/notcompress/flia-icon.png">
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/notcompress/comercial-icon.png">
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/notcompress/notorial-icon.png">
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

    <section class="col-12 grid-center about block">
      <div class="col-12 grid-center banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/notcompress/banner-1.png">
      </div>
      <div class="col-11 grid-spaceBetween content">
        <div class="col-4">
          <img src="<?php echo get_template_directory_uri(); ?>/images/notcompress/about-img.png">
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
    <section class="col-12 grid-center family">
      <div class="col-12 grid-center banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/notcompress/banner-2.png">
      </div>
      <div class="col-12 grid pattern">
        <img src="<?php echo get_template_directory_uri(); ?>/images/notcompress/pattern-flia.png">
      </div>

    </section>
  </div>
</div>
<div class="wrapper">
  <?php get_footer(); ?>
</div>
</body>
</html>
