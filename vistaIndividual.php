<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="lightbox/lightbox.css">
    <link rel="stylesheet" href="css/individual.css">
    <title>Búsqueda de Propiedades</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
            <div class="container">
                <!-- Navbar Responsive -->
                <button class="navbar-toggler pt-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:black;"></i></span>
                </button>
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="img/logoNegro.png" alt="logo" height="80" class="logo">
                </a>
                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto text-uppercase">
                        <li class="nav-item pr-5">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-5" href="busqueda.php">Propiedades</a>
                        </li>
                        <li class="nav-item pr-5 mr-5">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
                <a href="https://web.whatsapp.com" target="#" class="mr-auto wsp">
                    <img src="img/wspVerde.png" alt="whatsapp" height="30" class="pr-3">
                </a>
            </div>
        </nav>
    </header>
    <!-- end Header-->
    <!--Main-->
    <main class="container">
        <p class="text-uppercase font-weight-bold my-2" style="font-size: 1.8em; color: #D21226;">Salta 3505 - 08 04 - 2 dormitorios </p>
        <p class="medium text-uppercase text-muted">Venta <span>|</span> <strong>Usd 120.000</strong></p>
        <hr>
        <div class="row pt-4">
            <div class="col-md-8 col-sm-12 col-lg-8">
                <div class="view overlay zoom">
                    <a data-lightbox="image1" href="img/galeria/image.jpg"><img src="img/galeria/image.jpg" alt="" class="img-fluid" title="Propiedad 1"></a>
                </div>
                <article class="images">
                    <a data-lightbox="imagen1" href="img/galeria/image1.jpg" title="Propiedad 2"><img src="img/galeria/chica1.jpg" alt="" class="margen img-fluid"></a>
                    <a data-lightbox="imagen1" href="img/galeria/image2.jpg" title="Propiedad 3"><img src="img/galeria/chica2.jpg" alt="" class="margen img-fluid"></a>
                    <a data-lightbox="imagen1" href="img/galeria/image3.jpg" title="Propiedad 4"><img src="img/galeria/chica3.jpg" alt="" class="margen img-fluid"></a>
                    <a data-lightbox="imagen1" href="img/galeria/image4.jpg" title="Propiedad 5"><img src="img/galeria/chica4.jpg" alt="" class="margen img-fluid"></a>
                </article>
            </div><!-- end col8 -->
            <div class="col-md-4 col-sm-12 col-lg-4">
                <form action="" class="contact">
                    <p class="text-uppercase font-weight-bold my-2" style="font-size: 1.5em; color: #D21226;">¿Mas información?</p>
                    <p class="text-uppercase font-weight-bold my-2" style="font-size: 1.2em; color: #D21226;">Escribinos</p>
                    <input type="text" name="nombre" placeholder="NOMBRE Y APELLIDO" class="form-control mb-2">
                    <input type="text" name="email" placeholder="E-MAIL" class="form-control mb-2">
                    <input type="text" name="telefono" placeholder="TELÉFONO" class="form-control mb-2">
                    <textarea class="form-control rounded-0" rows="8" placeholder="DEJANOS TU MENSAJE" required></textarea>
                    <input type="submit" value="ENVIAR" class="float-right btn-danger enviar py-1">
                </form>
            </div>
        </div> <!-- end row -->
    </main><!-- end container -->
    <!-- After gallery -->
    <section class="container pt-5 text-muted">
        <p class="text-uppercase font-weight-bold">Características</p>
        <hr size="5" width="730" align="left">
        <div class="row">
            <div class="col-md-4 font-weight-bold">
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline">Baños: 1</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline">Ambientes : 3</p>
            </div>
            <div class="col-md-4 font-weight-bold">
                <i class="fas fa-angle-right text-danger"></i> Dormitorios: 2
            </div>
        </div>
        <hr size="5" width="730" align="left">
    </section><!-- Características -->
    <section class="container pt-5 text-muted">
        <p class="text-uppercase font-weight-bold">Superficies</p>
        <hr size="5" width="730" align="left">
        <div class="row">
            <div class="col-md-4 font-weight-bold">
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Semicubierta: 12.50 M2</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline">Total: 76.50 M2</p>
            </div>
            <div class="col-md-4 font-weight-bold">
                <i class="fas fa-angle-right text-danger"></i> Cubierta: 64.00 M2
            </div>
        </div>
    </section><!-- Superficies-->
    <section class="container pt-5 text-muted font-weight-bold">
        <p class="text-uppercase">Descripción</p>
        <hr size="5" width="730" align="left">
        <div class="row">
            <div class="col-md-8 text-justify">
                <p>Terminaciones: Aberturas de aluminio y DVH. Puertas de seguridad en ingreso. Puerta interiores de madera en PVC. Paredes y cielorraso de yeso. Pisos y revestimientos de pocelanato. Alacenas y bajomesadas de diseño con zócalos de aluminio. Mesadas de mármol. Conexiones para estufa en living y dormitorios. Preinstalación para aire acondicionado. Calefón o termotanque. Griferías de primera línea. Inodoro, bidet y bañera de primera línea y vanitory completo. Placares con interior terminado. Vaccaro, Cristian Nahuel CI Mat: 1863</p>
            </div>
        </div>
    </section><!-- Descripción -->
    <section class="container pt-5 text-muted">
        <p class="text-uppercase font-weight-bold">Superficies</p>
        <hr size="5" width="730" align="left">
        <div class="row">
            <div class="col-md-3 font-weight-bold">
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Agua corriente</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Electricidad</p>
            </div>
            <div class="col-md-3 font-weight-bold">
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Cloaca</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Agua potable</p>
            </div>
            <div class="col-md-3 font-weight-bold">
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Gas natural</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Alumbrado púbico</p>
            </div>
        </div>
    </section><!-- Servicios-->
    <section class="container pt-5 text-muted">
        <p class="text-uppercase font-weight-bold">Adicionales</p>
        <hr size="5" width="730" align="left">
        <div class="row">
            <div class="col-md-3 font-weight-bold">
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Internet</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Cocina</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Parrilla</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> En construcción</p>
            </div>
            <div class="col-md-3 font-weight-bold">
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Cable</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Living Comedor</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Solarium</p>
            </div>
            <div class="col-md-3 font-weight-bold">
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline"> Balcón</p><br>
                <i class="fas fa-angle-right text-danger"></i>
                <p class="d-inline mb-5"> Preinstalacion de <br>A/A</p>
            </div>
        </div>
        <button type="button" class="btn-flat btn-danger btn-block mt-5 p-2 text-uppercase font-weight-bold"><a href="busqueda.php" class="text-decoration-none text-light">Ver más propiedades de este emprendimiento</a></button>
    </section><!-- Adicionales -->
    <section class="container pt-5">
        <p class="text-uppercase font-weight-bold text-muted">Ubicación</p>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.6611875351678!2d-60.67150358525451!3d-32.93354877855444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7ab54639738f3%3A0x752c0d801130f25d!2sSalta%203503%2C%20S2002JLD%20Rosario%2C%20Santa%20Fe!5e0!3m2!1ses-419!2sar!4v1605801566919!5m2!1ses-419!2sar" width="1100" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section><!-- Ubicación -->
    <section class="container">
        <hr>
        <p class="text-uppercase font-weight-bold my-2 pt-5 pb-3 text-center" style="font-size: 1.8em; color: #D21226;">Contacto</p>
            <div class="row mx-3">
                <div class="col-md-6">
                    <form action="" class="contact">
                        <input type="text" name="nombre" placeholder="NOMBRE Y APELLIDO" class="form-control mb-2">
                        <input type="text" name="email" placeholder="E-MAIL" class="form-control mb-2">
                        <input type="text" name="telefono" placeholder="TELÉFONO" class="form-control mb-2">
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea class="form-control rounded-0" rows="5" placeholder="DEJANOS TU MENSAJE"></textarea>
                    </div>
                    <input type="submit" value="ENVIAR" class="float-right btn-danger enviar">
                </div>
            </div><!-- Form -->
    </section>


    <!-- Scroll to top-->
    <img src="img/flechaBlanca.png" id="top" class="animated zoomIn rounded-pill" style="background-color: rgb(210, 18, 38); position: fixed; bottom: 40px; right: 20px; padding: 15px;" height="40">
    <!-- end Scroll to top -->

    <!-- footer -->
    <footer class="page-footer text-center text-md-left mt-5">
        <div class="container-fluid pt-5 pb-5" style="background: #333535; font-weight: 200; font-size: 0.8rem;">
            <div class="row" id="contacto">
                <div class="col-md-3">
                    <img src="img/logoBlanco.png" alt="footer" height="80" class="mt-2">
                </div>
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase pt-2" style="font-size: 1em;">Contacto</h5>
                    <hr class="white mt-1 mb-2">
                    <ul class="list-unstyled footerText">
                        <li>(0341) 341 1621341</li>
                        <li>Dorrego 1000, Piso 1</li>
                        <li>Rosario, Santa Fe</li>
                        <li>info@syloper.com</li>
                    </ul>
                </div>
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase pt-2" style="font-size: 1em">Seguinos</h5>
                    <hr class="white mt-1 mb-2">
                    <img src="img/twitter.png" alt="twitter" height="30" class="my-2">
                    <img src="img/facebook.png" alt="facebook" height="30" class="my-2 pl-1">
                </div>
                <div class="col-md-2 mx-auto">
                    <h5 class="text-uppercase pt-2" style="font-size: 1em">Menú</h5>
                    <hr class="white mt-1 mb-2">
                    <ul class="list-unstyled text-uppercase footerText">
                        <li><a href="">Home</a></li>
                        <li><a href="busqueda.php">Propiedades</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/mdb.min.js"></script>
    <script src="lightbox/lightbox.js"></script>
    <script type="text/javascript" src="bootstrap/js/style.js"></script>
</body>

</html>