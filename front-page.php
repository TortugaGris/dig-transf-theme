<?php get_header(); ?>
<section class="position-relative">
    <?php if ( is_active_sidebar( 'hero_section' ) ) : ?>
        <?php dynamic_sidebar( 'hero_section' ); ?>
    <?php else : ?>
        <h1 class="text-center"> Impulsa tu crecimiento e ingresos </h1>
        <p class="text-center fs-4">Somos tu compañero de crecimiento. Especializads en Ventas B2B, Marketing y Finanzas Corporativas</p>
        <div class="d-flex justify-content-center">
            <a href="/" class="btn btn-primary fw-bold">Agenda tu reunión</a>
        </div>
    <?php endif; ?>
</section>

<section class="container py-5">
    <?php if ( is_active_sidebar( 'benefits_section' ) ) : ?>
        <?php dynamic_sidebar( 'benefits_section' ); ?>
    <?php else : ?>
        <h2 class="text-center fw-bold">
            Hacemos que startups y empresas <br/><b class="text-secondary">CREZCAN</b><br/> en ingresos y cantidad de clientes
        </h2>
    <?php endif; ?>
    <div class="d-flex gap-5 mt-5">
        <a class="px-4 py-1 shadow rounded-3 flex-grow-1 text-dark row">
            <div class="col-3 d-flex align-items-center"> 
                <i class="fa-solid fa-magnifying-glass fs-1 text-secondary"></i>
            </div> 
            <div class="col-9"> 
                <h3 class="text-secondary fs-4 fw-bold">Encuentra</h3>
                <p class="mb-0 text-center text-dark">Más clientes</p>
            </div> 
        </a>
        <a class="px-4 py-1 shadow rounded-3 flex-grow-1 text-dark row">
            <div class="col-3 d-flex align-items-center"> 
                <i class="fa-solid fa-bolt fs-1 text-secondary"></i>
            </div> 
            <div class="col-9"> 
                <h3 class="text-secondary fs-4 fw-bold">Cierra</h3>
                <p class="mb-0 text-center text-dark">Más ofertas</p>
            </div> 
        </a>
        <a class="px-4 py-1 shadow rounded-3 flex-grow-1 text-dark row">
            <div class="col-3 d-flex align-items-center"> 
                <i class="fa-solid fa-rocket fs-1 text-secondary"></i>
            </div> 
            <div class="col-9"> 
            <h3 class="text-secondary fs-4 fw-bold">Aumenta</h3>
            <p class="mb-0 text-center text-dark">Tus Ventas</p>
            </div> 
        </a>
        </a>
    </div>
</section>
<section class="container my-5">
    <?php if ( is_active_sidebar( 'services_section' ) ) : ?>
        <?php dynamic_sidebar( 'services_section' ); ?>
    <?php else : ?>
        <h2 class="fw-bold">Nuestros servicios</h2>
        <h3 class="fs-4">Entregamos servicios B2B adaptados a sus necesidades.</h3>
    <?php endif; ?>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Ventas</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Marketing</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Finanzas</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div id="carouselServices" class="p-3 carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselServices" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselServices" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselServices" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex gap-3">
                        <?php 
                        if(have_posts()):
                            while(have_posts()): the_post(); 
                                if(in_category('Ventas')): ?>
                                    <article class="rounded-4 border border-2 border-secondary p-4 d-flex flex-column" style="width:350px; height:450px;">
                                        <div><?php the_content()?></div>
                                        <div class="flex-grow-1 d-flex justify-content-end align-items-end">
                                            <a class="btn btn-primary">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                        <?php 
                                endif;
                            endwhile; 
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="p-3">
            <?php 
            if(have_posts()):
                while(have_posts()): the_post(); 
                    if(in_category('Marketing')): ?>
                        <article class="rounded-4 border border-2 border-secondary p-4 d-flex flex-column" style="width:350px; height:450px;">
                            <div><?php the_content()?></div>
                            <div class="flex-grow-1 d-flex justify-content-end align-items-end">
                                <a class="btn btn-primary">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>
            <?php 
                    endif;
                endwhile; 
            endif;
            ?>
        </div>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="p-3">
            <?php 
            if(have_posts()):
                while(have_posts()): the_post(); 
                    if(in_category('Finanzas')): ?>
                        <article class="rounded-4 border border-2 border-secondary p-4 d-flex flex-column" style="width:350px; height:450px;">
                            <div><?php the_content()?></div>
                            <div class="flex-grow-1 d-flex justify-content-end align-items-end">
                                <a class="btn btn-primary">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>
            <?php 
                    endif;
                endwhile; 
            endif;
            ?>
        </div>
      </div>
    </div>
</section>
<section class="container my-5">
    <?php if ( is_active_sidebar( 'about_us_section' ) ) : ?>
        <?php dynamic_sidebar( 'about_us_section' ); ?>
    <?php else : ?>
        <div class="row">
            <div class="col-6">
                <h2 class="fw-bold">Sobre nosotros</h2>
                <h3 class="fs-4">No solo realizamos ventas, creamos historias de crecimiento</h3>
                <p>
                    Como servicio de subcontratación de primer nivel, somos un equipo multidiciplinario enfocado en impulsar tu 
                    crecimiento a través de las ventas B2B, el Marketing y las Finanzas.
                </p>
                <p>
                    Somos un equipo compromentido de explorar a quienes les encanta trabajar para construir hojas de ruta de 
                    crecimiento colaborativo.
                </p>
                <a class="btn btn-primary fw-bold">Conoce al equipo</a>
                <a><i></i></a>
                <a><i></i></a>
                <a><i></i></a>
            </div>
            <div class="col-6">
                <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/team.png" alt=""/>
            </div>
        </div>
    <?php endif; ?>
</section>
<section class="my-5 container">
    <?php if ( is_active_sidebar( 'success_cases_section' ) ) : ?>
        <?php dynamic_sidebar( 'success_cases_section' ); ?>
    <?php else : ?>
        <div class="container mb-4">
            <h2 class="fw-bold text-center">Casos de éxito</h2>
            <h3 class="fs-5 text-center">Tu historia puede ser como una de estas</h3>
        </div>
    <?php endif; ?>
    <article class="bg-secondary text-light p-5 row">
        <div class="col-3">
            <div class="d-flex flex-column align-items-center">
                <img class="img-fluid mb-3" src="<?php echo get_template_directory_uri();?>/img/client-logo-1.png" width="113px" alt=""/>
                <div>
                    <a href="/" class="btn btn-primary fw-bold fs-4">Sitio web</a>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div>
                <h3 class="fs-5 fw-bold">Analytics FC</h3>
                <h4 class="fs-6 fw-bold">Industria: : Inteligencia de datos</h4>
                <h4 class="fs-6 fw-bold">Target : Global</h4>
                <p>
                    Analytics FC es el punto de encuentro entre el fútbol y los datos. Con un conjunto de servicios que 
                    van desde el scouting a la consultoría y los inversores, están empoderando a los jugadores clave del 
                    deporte. En 2022, Analytics FC y Saravá unieron sus fuerzas y empezaron a trabajar en Latinoamérica. 
                    Ahora estamos preparados y les ayudamos a dar grandes pasos en Arabia Saudí.
                </p>
            </div>
        </div>
    </article>
</section>
<section class="container my-5">
    <?php if ( is_active_sidebar( 'working_with_us_section' ) ) : ?>
        <?php dynamic_sidebar( 'working_with_us_section' ); ?>
    <?php else : ?>
        <h2 class="fw-bold mb-4 text-center">Ya creciendo con nosotros</h2>
        <div class="d-flex justify-content-center">
            <img src="<?php echo get_template_directory_uri();?>/img/client-logo-1-white.png" alt=""/>
        </div>
    <?php endif; ?>
</section>
<section class="my-5">
    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/bg-img.png" alt=""/>
</section>
<section class="container">
    <div class="bg-secondary text-light p-5 rounded-3 row">
        <?php if ( is_active_sidebar( 'videocall_section' ) ) : ?>
            <?php dynamic_sidebar( 'videocall_section' ); ?>
        <?php else : ?>
            <div class="col">
                <h2 class="fs-1 fw-bold">Hablemos!</h2>
                <p>Las grandes ideas suelen comenzar con un café</p>
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <a class="btn btn-primary fw-bold">Agenda una videollamada</a>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="container my-5">
    <div class="row">
        <div class="col d-flex flex-column justify-content-center">
            <?php if ( is_active_sidebar( 'contact_section' ) ) : ?>
                <?php dynamic_sidebar( 'contact_section' ); ?>
            <?php else : ?>
                <h2 class="fw-bold fs-1">Póngase en contacto con nosotros</h2>
                <h3 class="fs-4"> Si lo prefiere, déjenos su e-mail y nos pondremos en contacto con usted enseguida.</h3>
            <?php endif; ?>
        </div>
        <div class="col">
            <form class="shadow p-3">
                <div class="my-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" id="name" class="form-control"/>
                </div>
                <div class="my-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control"/>
                </div>
                <div class="my-3">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="tel" id="phone" class="form-control"/>
                </div>
                <div class="my-3">
                    <label for="buisness" class="form-label">Empresa</label>
                    <input type="tel" id="buisness" class="form-control"/>
                </div>
                <div class="d-flex justify-content-end my-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>
<section style="margin-top: 300px;">
    <?php if ( is_active_sidebar( 'email_section' ) ) : ?>
        <?php dynamic_sidebar( 'email_section' ); ?>
    <?php else : ?>
        <div class="position-relative">
            <div class="text-light container py-5">
                <h2 class="fs-1 fw-bold mb-4" style="width: 425px;">Estamos a un correo electrónico de distancia</h2>
                <a class="btn btn-primary fw-bold">Empecemos</a>
            </div>
            <img class="img-fluid position-absolute bottom-0 start-0" src="<?php echo get_template_directory_uri();?>/img/bg-last.png" alt="" style="z-index:-1;"/>
        </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>
