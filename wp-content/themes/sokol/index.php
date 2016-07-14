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
            <div class="col-12 grid slider">
                <div class="col-12 image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider.png"/>
                </div>
                <div class="col-12 grid-center caption">
                    <div class="col-8 text">
                        En cada caso particular, nuestro compromiso personal y<br>
                        nuestra trayectoria profesional acompañan a cada uno de nuestros clientes.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <?php get_footer(); ?>
    </div>
</body>
</html>
