<?php 
    include_once "envioformulario.php";
 ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BakinSweets</title>
    <meta name="description" content="Venta de dulces caseros">
    <meta name="keywords" content="dulces, sweets, galletas, cupcakes, tartas">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
                <a class="navbar-brand" href="index.html">Bakin<span>Sweets</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#pasteleria">La Pastelería</a></li>
                    <li><a href="#reposteros">Nuestros Reposteros</a></li>
                    <li><a href="#dulces">Nuestros Dulces</a></li>
                    <li><a href="#contacto">Contáctanos</a></li>
                    <li><a href="bakinsweets.php">Tienda</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Banner-->
    <div class="banner">
        <div class="bg-color">
            <div class="container">
                <div class="row">
                    <div class="banner-text text-center">
                        <div class="text-border">
                            <h2 class="text-dec">Pasión por el dulce</h2>
                        </div>
                        <div class="intro-para text-center quote">
                            <p class="big-text">Vive Ama . . . Hornea.</p>
                            <p class="small-text">No sólo los ingredientes hacen rico a un pastel. El amor con que se hace le da el toque especial.</p>
                        </div>

                        <a href="#pasteleria" class="mouse-hover">
                            <div class="mouse"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Banner-->
    <!--Cta-->
    <section id="cta-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Suscríbete a nuestra Newsletter</h2>
                    <p class="cta-2-txt">Apúntate a nuestra newsletter para recibir un email semanal y mantenerte al tanto de las últimas noticias y talleres de pastelería.</p>
                    <div class="cta-2-form text-center">
                        <form action="#" method="post" id="workshop-newsletter-form">
                            <input name="" placeholder="Introduce tu email" type="email">
                            <input class="cta-2-form-submit-btn" value="Suscríbete" type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Cta-->
    <!--pasteleria-->
    <section id="pasteleria" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>La Pastelería</h2>
                    <p>Ven a visitar nuestra pastelería, todo un deleite para los sentidos. </p>
                    <p>Especialistas en los siguientes productos:</p>
                    <hr class="bottom-line">
                </div>
                <div class="feature-info">
                    <div class="fea">
                        <div class="col-md-4">
                            <div class="heading pull-right">
                                <h4>Cupcakes</h4>
                                <p>Nuestros cupcakes favoritos son Guinness, Red Velvet, Devil's Food, Zanahoria, Tiramisú. Querrás probarlos todos.</p>
                            </div>
                            <div class="fea-img pull-left">
                                <i class="fas fa-chess-queen"></i>
                            </div>
                        </div>
                    </div>
                    <div class="fea">
                        <div class="col-md-4">
                            <div class="heading pull-right">
                                <h4>Galletas</h4>
                                <p>Porque en la variedad está el gusto: Doble chocolate, limón, crema de cacahuete, nutella, mantequilla, pasas y muchas más.</p>
                            </div>
                            <div class="fea-img pull-left">
                                <i class="fas fa-bowling-ball"></i>
                            </div>
                        </div>
                    </div>
                    <div class="fea">
                        <div class="col-md-4">
                            <div class="heading pull-right">
                                <h4>Tartas</h4>
                                <p>Ideales para un evento especial. Disponemos de varios tamaños y se pueden personalizar. Recomendamos Guinness, Red Velvet, Devil's Food y Calabaza.</p>
                            </div>
                            <div class="fea-img pull-left">
                                <i class="fas fa-birthday-cake"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ pasteleria-->
    <!--estadistica-->
    <section id="estadistica" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="orga-stru">
                            <h3>99%</h3>
                            <p>Dicen que sí!!</p>
                            <i class="fa fa-male"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="orga-stru">
                            <h3>0.1%</h3>
                            <p>Dicen que no!!</p>
                            <i class="fa fa-male"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="orga-stru">
                            <h3>0.9%</h3>
                            <p>Todavía no los probaron!!</p>
                            <i class="fa fa-male"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-info">
                        <hgroup>
                            <h3 class="det-txt"> ¿Os gustan nuestros postres?</h3>
                            <h4 class="sm-txt">(Opiniones de nuestros clientes)</h4>
                        </hgroup>
                        <p class="det-p">Hemos preguntado a nuestros clientes qué opinan sobre nuestros dulces y las estadística lo deja muy claro.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ estadistica-->
    <!--reposteros-->
    <!--reposteros-->
    <section id="reposteros" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Conócenos</h2>
                    <p>Conoce a los mejores reposteros que conforman nuestro equipo. </p>
                    <hr class="bottom-line">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="pm-staff-profile-container">
                        <div class="pm-staff-profile-image-wrapper text-center">
                            <div class="pm-staff-profile-image">
                                <img src="img/nick-karvounis-624439-unsplash.jpg" alt="" class="img-thumbnail img-circle" />
                            </div>
                        </div>
                        <div class="pm-staff-profile-details text-center">
                            <p class="pm-staff-profile-name">José Palacio</p>
                            <p class="pm-staff-profile-title">Repostero jefe</p>

                            <p class="pm-staff-profile-bio">Reconocido repostero, se formó en la Escuela de Hostelería AIALA del prestigioso Karlos Arguiñano. Tiene una trayectoria profesional que excede los 20 años de experiencia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="pm-staff-profile-container">
                        <div class="pm-staff-profile-image-wrapper text-center">
                            <div class="pm-staff-profile-image">
                                <img src="img/roman-kraft-56589-unsplash.jpg" alt="" class="img-thumbnail img-circle" />
                            </div>
                        </div>
                        <div class="pm-staff-profile-details text-center">
                            <p class="pm-staff-profile-name">Mónica Romero</p>
                            <p class="pm-staff-profile-title">Pastelera de vocación</p>

                            <p class="pm-staff-profile-bio">Nuestra pastelera más golosa se graduó Suma Cum Laude en la Escuela de Hostelería de París, con la especialidad en chocolate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="pm-staff-profile-container">
                        <div class="pm-staff-profile-image-wrapper text-center">
                            <div class="pm-staff-profile-image">
                                <img src="img/travis-grossen-552169-unsplash.jpg" alt="" class="img-thumbnail img-circle" />
                            </div>
                        </div>
                        <div class="pm-staff-profile-details text-center">
                            <p class="pm-staff-profile-name">Yvan Drago</p>
                            <p class="pm-staff-profile-title">Commis Chef</p>

                            <p class="pm-staff-profile-bio">La nueva adquisición de nuestro equipo promete mucho, te sorprenderán sus innovadoras creaciones. Un toque de aire fresco llegado desde Dubrovnik. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ reposteros-->
    <!--Testimonial-->
    <section id="testimonial" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2 class="white">Mira lo que nuestros clientes comentan</h2>
                    <p class="white">Las opiniones de nuestros clientes son nuestra mejor garantía. <br>Aquí tienes una muestra de sus comentarios.</p>
                    <hr class="bottom-line bg-white">
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="text-comment">
                        <p class="text-par">"Increíbles pasteles que te endulzan hasta el día más amargo"</p>
                        <p class="text-name">Amparo García - Clienta habitual</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="text-comment">
                        <p class="text-par">"Nunca te cansarás de los dulces de esta pastelería, siempre tienen algo nuevo que probar"</p>
                        <p class="text-name">Karlos Arguiñano - Experto catador</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Testimonial-->
    <!--Dulces-->
    <section id="dulces" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Nuestros Dulces</h2>
                    <p>Aquí tienes una selección de nuestros dulces más populares para ir abriendo boca.</p>
                    <hr class="bottom-line">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/cupcakes/cupcakesChoco.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Cupcake Chocolate</h3>
                            <p>Espectacular cupcakes de chocolate con frosting y almendra caramelizada.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/galletas/galletaBrownie.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Galleta Brownie</h3>
                            <p>Disfruta de lo mejor de las galletas y el brownie en uno.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/tartas/nutella.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Tarta nutella</h3>
                            <p>Deliciosa tarta de nutella con cobertura de crema de avellana.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/cupcakes/cupcakeLimon.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Cupcake Limón</h3>
                            <p>Exquisitas delicias de limón en forma de cupcake.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/galletas/galletaChocolates.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Galleta 3 chocolates</h3>
                            <p>Galletas con chips de chocolate blanco, con leche y negro.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                        <img src="img/tartas/cheesecake.jpg" class="img-responsive">
                        <figcaption>
                            <h3>Cheesecake</h3>
                            <p>Tarta de requesón con coulis de frutos rojos.</p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="header-section text-center">
                    <p>Si quieres ver todos nuestros dulces o hacer un pedido, te invitamos a pasar a nuestra tienda online.</p>
                    <div class="col-xs-12">
                        <!-- Button -->
                        <a href="bakinsweets.php" id="accesoTienda" name="accesoTienda" class="form contact-form-button light-form-button oswald light">ACCEDER A LA TIENDA</a>
                    </div>
                    <hr class="bottom-line">
                </div>
            </div>
        </div>
    </section>
    <!--/ Dulces-->
    <!--Contacto-->
    <section id="contacto" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="header-section text-center">
                    <h2>Contacta con nosotros</h2>
                    <p>Si quieres ponerte en contacto con nosotros, <br>déjanos tus datos en este formulario y te contestaremos en la mayor brevedad posible.</p>
                    <hr class="bottom-line">
                </div>
                <div id="mensaje"><?=$mensaje ?></div>
                <form action="index.php" method="post" role="form">
                    <div class="col-md-6 col-sm-6 col-xs-12 left">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control form" id="nombre" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por favor, introduce al menos 4 caracteres" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" data-rule="email" data-msg="Por favor, introduce un email válido" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor, introduce al menos 8 caracteres" />
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 right">
                        <div class="form-group">
                            <textarea class="form-control" name="comentario" rows="5" data-rule="required" data-msg="Por favor, escríbenos algo" placeholder="Mensaje"></textarea>
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <!-- Button -->
                        <button type="submit" id="enviarcomentario" name="enviarcomentario" class="form contact-form-button light-form-button oswald light">ENVIAR EMAIL</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <!--/ Contacto-->

    <!--Footer-->
    <footer id="footer" class="footer">
        <div class="container text-center">
            <!-- End newsletter-form -->
            <ul class="social-links">
                <li><a href="#link"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#link"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#link"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#link"><i class="fab fa-pinterest"></i></a></li>
                <li><a href="#link"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
            ©2018 BakinSweets. Todos los derechos reservados.
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
        -->
                Diseñado por <a href="https://bootstrapmade.com/">BootstrapMade.com</a> y personalizada por Joyjos y MRomero.
            </div>
        </div>
    </footer>
    <!--/ Footer-->

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

</body>

</html>
