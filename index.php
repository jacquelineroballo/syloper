<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Syloper Prueba Técnica</title>
</head>
<body>
    <!-- Header -->
        <a href="#" id="top"><img src="img/flecha.png"  height="20" width="20" class="animated zoomIn"></a>
    <header>
        <nav class="navbar position-absolute fixed-top navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- Navbar Responsive -->
                <button class="navbar-toggler pt-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Links -->
                <a class="navbar-brand" href="#">
                    <img src="img/logoBlanco.png" alt="logo" height="80" class="logo">
                </a>
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
                    <img src="img/wspBlanco.png" alt="whatsapp" height="30" class="pr-3">
                </a>
            </div>
        </nav>
    </header>
    <!--endHeader -->
    <!-- Hero -->
    <main class="hero rgba-black-strong">
        <div class="hero-content container">
            <h1 class="hero-title text-uppercase px-3">
                Encontrá tu propiedad</h1>
            <div class="inputs container">
                <input type="text" name="propiedad" placeholder="TIPO DE PROPIEDAD" size="27">
                <input type="text" name="dormitorios" placeholder="DORMITORIOS" size="27">
            </div>
            <a href="busqueda.php"><input type="submit" value="BUSCAR" class="btn-danger buscar p-1 m-4"></a>
        </div>
        
    </main>
    <!-- end Hero -->
    <!-- Introduction Text -->
    <section class="container-fluid introText">
        <p class="text-center">
            En Syloper nos adecuamos permanentemente las nuevas tendencias y modalidades <br>del negocio inmobiliario. Nuestro equipo capacitado se especializa en la venta de <br> propiedades, brindando confianza, visión profesional y compromiso.
        </p>
    </section>
    <!-- Three Images -->
    <section class="container pt-2">
        <div class="row my-5">
            <div class="col-md-4 col-xs-12 pb-4 px-4">
                <div class="view overlay zoom">
                    <img src="img/propiedades.png" class="img-fluid" alt="Propiedades">
                </div>
            </div>
            <div class="col-md-4 col-xs-12 pb-4 px-4">
                <div class="view overlay zoom">
                    <img src="img/terrenos.png" class="img-fluid" alt="Terrenos">
                </div>
            </div>
            <div class="col-md-4 col-xs-12 pb-4 px-4">
                <div class="view overlay zoom">
                    <img src="img/emprendimientos.png" class="img-fluid" alt="Emprendimientos">
                </div>
            </div>
        </div>
    </section>
    <!-- end Three Images -->
    <!-- Propiedades -->
    <section class="container">
        <h1 class="text-uppercase text-center tit pb-5">Encontrá tu propiedad</h1>
        <div class="row pb-3">
            <div class="col-md-3 col-xs-12 px-4">
                <img src="img/edificio.png" class="img-fluid" alt="Edificio">
                <figcaption class="figure-caption pb-5">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
            </div>
            <div class="col-md-3 col-xs-12 px-4 mb-4">
                <img src="img/edificio.png" class="img-fluid" alt="Edificio">
                <figcaption class="figure-caption">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
            </div>
            <div class="col-md-3 col-xs-12 px-4 hide">
                <img src="img/edificio.png" class="img-fluid" alt="Edificio">
                <figcaption class="figure-caption">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
            </div>
            <div class="col-md-3 col-xs-12 px-4 hide">
                <img src="img/edificio.png" class="img-fluid" alt="Edificio">
                <figcaption class="figure-caption">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
            </div>
        </div>
    </section>
    <!-- end Propiedades -->
    <!-- Form -->
    <section class="container" id="contacto">
        <h2 class="text-uppercase text-center tit mb-5">Contacto</h3>
            <div class="row mx-3">
                <div class="col-md-5">
                    <form action="" class="contact">
                        <input type="text" name="nombre" id="" placeholder="NOMBRE Y APELLIDO" class="form-control mb-2">
                        <input type="text" name="email" id="" placeholder="E-MAIL" class="form-control mb-2">
                        <input type="text" name="telefono" id="" placeholder="TELÉFONO" class="form-control mb-2">
                    </form>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <textarea class="form-control rounded-0" id="" rows="5" placeholder="DEJANOS TU MENSAJE" required></textarea>
                    </div>
                    <input type="submit" value="ENVIAR" class="float-right btn-danger enviar">
                </div>
            </div>
    </section>
    <!--end Form -->
    <!--Footer-->
    <footer class="page-footer text-center text-md-left mt-5">
        <div class="container-fluid myFooter pt-5 pb-5">
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
    <!--end Footer-->
    <a href="#top"></a>
    


    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js   "></script>
    <script type="text/javascript" src="bootstrap/js/mdb.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/style.js"></script>