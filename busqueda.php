<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="lightbox">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="css/busqueda.css">
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
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pr-5" href="#">Propiedades</a>
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
        <h2 class="text-danger text-uppercase my-5 font-weight-bold">Propiedades en venta </h2>
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <p class="text-uppercase font-weight-bold subtitle">Búsqueda avanzada</p>
                <!--Filters-->
                <button type="button" class="btn-danger text-uppercase py-4 mb-3 font-weight-bold botonFiltro" data-toggle="collapse" data-target="#filtros">Filtros</button>
                <div id="filtros ">
                    <p class="title font-weight-bold text-uppercase pt-3">Precios</p>
                    <input type="radio" name="pesos" id="pesos">
                    <label for="defaultUnchecked" class="pr-3 font-weight-light">$</label>
                    <input type="radio" name="dolares" id="dolares">
                    <label for="defaultUnchecked" class="pr-3 font-weight-light">U$S</label><br>
                    <div class="aplicar">
                        <input type="text" name="desde" id="desde" placeholder="Desde $" class="form-input py-2">
                        <input type="text" name="hasta" id="hasta" placeholder="Hasta $" class="form-input py-2 ml-4">
                    </div>
                    <button type="button" class="btn-danger font-weight-bold py-2 mt-3 mb-2 text-uppercase botonAplicar" data-toggle="#" data-target="#aplicar" style="background-color: #D21226!important; width: 16rem;"><a href="vistaIndividual.php" class="text-decoration-none text-light">Aplicar</a></button>
                    <!-- Filtros en modo escritorio -->
                    <div class="d-none d-md-block ">
                        <p class="title font-weight-bold text-uppercase pt-3">Dormitorios</p>
                        <div class="leftFilters filtro">
                            <p><a data-filter=".monoambiente" class="text-dark text-decoration-none waves waves-effect">Monoambiente</a></p>
                            <p><a data-filter=".unDormitorio" class="text-dark text-decoration-none waves waves-effect">1 Dormitorio</a></p>
                            <p><a data-filter=".dosDormitorios" class="text-dark text-decoration-none waves waves-effect">2 Dormitorios</a></p>
                            <p><a data-filter=".tresDormitorios" class="text-dark text-decoration-none waves waves-effect">3 Dormitorios</a></p>
                            <p><a data-filter=".cuatroDormitorios" class="text-dark text-decoration-none waves waves-effect">4 Dormitorios</a></p>
                            <p><a data-filter=".cincoDormitorios" class="text-dark text-decoration-none waves waves-effect">5 Dormitorios</a></p>
                        </div>
                        <p class="title font-weight-bold text-uppercase pt-3">Tipo</p>
                        <div class="leftFilters">
                            <p><a href="" class="text-dark text-decoration-none waves waves-effect">Rosario <span>|</span> Centro</a></p>
                        </div>
                        <p class="title font-weight-bold text-uppercase pt-3">Localidad</p>
                        <div class="leftFilters">
                            <p><a href="" class="text-dark text-decoration-none waves waves-effect">Terreno</a></p>
                            <p><a href="" class="text-dark text-decoration-none waves waves-effect">Departamento</a></p>
                            <p><a href="" class="text-dark text-decoration-none waves waves-effect">Casa</a></p>
                        </div>
                    </div><!-- Filtros en modo escritorio -->
                    <!-- Filtros en mobile -->
                    <div class="d-block d-sm-none text-center">
                        <button type="button" class="btn btn-danger rounded-pill text-uppercase font-weight-bold" style="background-color: #D21226!important; padding: 1em; margin-top: 2em; margin-bottom: 2em;">Dormitorios</button>
                        <div class="button-group filter-button-group">
                            <div class="row iconosFiltros small">
                                <div class="col-12 d-flex">
                                    <button data-filter=".monoambiente">Monoambiente</button>
                                    <button data-filter=".undormitorio" class="mx-2">1 Dormitorio</button>
                                    <button data-filter=".dosdormitorios">2 Dormitorios</button>
                                </div>
                            </div>
                            <div class="row iconosFiltros small">
                                <div class="col-12 d-flex">
                                    <button data-filter=".tresdormitorios">3 Dormitorios</button><br>
                                    <button data-filter=".cuatrodormitorios" class="mx-2">4 Dormitorios</button>
                                    <button data-filter=".cincodormitorios">5 Dormitorios</button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger rounded-pill text-uppercase font-weight-bold" style="background-color: #D21226!important; padding: 1em; margin-top: 2em; margin-bottom: 2em;">Localidad</button>
                        <div class="button-group filter-button-group">
                            <div class="row iconosFiltros medium">
                                <div class="col-12 d-flex">
                                    <button data-filter=".rosario">Rosario</button>
                                    <button data-filter=".centro" class="mx-2">Centro</button>
                                    <button data-filter=".zonasur" class="mr-2">Zona Sur</button>
                                    <button data-filter=".zonanorte">Zona Norte</button>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger rounded-pill text-uppercase font-weight-bold" style="background-color: #D21226!important; padding: 1em 3em 1em; margin-top: 2em; margin-bottom: 2em;">Tipo</button>
                        <div class="button-group filter-button-group">
                            <div class="row iconosFiltros medium">
                                <div class="col-12 d-flex justify-content-between">
                                    <button data-filter=".terreno">Terreno</button>
                                    <button data-filter=".casa" class="mx-2">Casa</button>
                                    <button data-filter=".departamento" class="mr-2">Departamento</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Filters in mobile -->
                </div>
                <!-- fin Filters -->
            </div><!-- col-md-3-->
            <div class="col-md-3 col-xs-12 px-4 small">
                <div class="view overlay zoom">
                    <img src="img/edificio.png" class="img-fluid" alt="Edificio">
                </div>
                <figcaption class="figure-caption pb-3 pt-2">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
                <div class="view overlay zoom">
                    <img src="img/edificio.png" class="img-fluid " alt="Edificio">
                </div>
                <figcaption class="figure-caption pt-2">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
                <div class="view overlay zoom">
                    <img src="img/edificio.png" class="img-fluid pt-3" alt="Edificio">
                </div>
                <figcaption class="figure-caption pt-2">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
            </div>
            <div class="col-md-3 col-xs-12 px-4 mb-4 small">
                <div class="view overlay zoom">
                    <img src="img/edificio.png" class="img-fluid" alt="Edificio">
                </div>
                <figcaption class="figure-caption pt-2">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
                <div class="view overlay zoom">
                    <img src="img/edificio.png" class="img-fluid pt-3" alt="Edificio">
                </div>
                <figcaption class="figure-caption pt-2">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
                <div class="view overlay zoom">
                    <img src="img/edificio.png" class="img-fluid pt-3" alt="Edificio">
                </div>
                <figcaption class="figure-caption pt-2">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>

            </div>
            <div class="col-md-3 col-xs-12 px-4 small">
                <div class="view overlay zoom">
                    <img src="img/edificio.png" class="img-fluid" alt="Edificio">
                </div>
                <figcaption class="figure-caption pt-2">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
                <div class="view overlay zoom">
                    <img src="img/edificio.png" class="img-fluid pt-3" alt="Edificio">
                </div>
                <figcaption class="figure-caption pt-2">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
                <div class="view overlay zoom">
                    <img src="img/edificio.png" class="img-fluid pt-3" alt="Edificio">
                </div>
                <figcaption class="figure-caption pt-2">
                    Salta 5000 - 01 01 - 1 Dormitorio <br>
                    Santa Fe <span>|</span> Rosario <span>|</span> Centro
                    <hr class="my-2">
                    Venta u$s 120.000 <span>|</span> <i class="fas fa-home fa-xs"></i> 64.00 M2 <a href="vistaIndividual.php"><i class="fas fa-search text-danger float-right"></i></a>
                </figcaption>
            </div>
            <!-- end Propiedades -->
        </div>
        <!--row-->
    </main>
    <!-- end Filters-->
    <!-- Scroll to top-->
    <img src="img/flechaBlanca.png" id="top" class="animated zoomIn rounded-pill" style="background-color: rgb(210, 18, 38); position: fixed; bottom: 40px; right: 20px; padding: 15px;" height="40">
    <!-- end Scroll to top -->
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



    <script type="text/javascript">
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/mdb.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/style.js"></script>
    <script type="text/javascript" src="bootstrap/js/filtros.js"></script>
</body>

</html>