<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>Agropecuario.</title>
</head>

<body>
    <!--========================================================== -->
    <!-- ENCABEZADO -->
    <!--========================================================== -->
    <header class="container-fluid bg-primary d-flex justify-content-center">
        <p class="text-light mb-0 p-2 fs-6">Contactanos 555-555</p>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light p-3" id="menu">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="fs-5 text-primary fw-bold">Agropecuario.</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#equipo">Equipo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#seccion-contacto">Contactanos</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="email" placeholder="Correo Electronico" aria-label="Suscribete">
                    <button class="btn btn-primary btn-primary-outline-success" type="button">Información</button>
                </form>
            </div>

        </div>
    </nav>

    <!--========================================================== -->
    <!-- SLIDER DE IMAGENES-->
    <!--========================================================== -->

    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="/img/fondo1.jpg" class="d-block w-100" alt="">
            </div>


            <div class="carousel-item" data-bs-interval="3000">
                <img src="/img/fondo4.jpg" class="d-block w-100" alt="...">
            </div>


            <div class="carousel-item" data-bs-interval="3000">
                <img src="/img/fondo3.jpg" class="d-block w-100" alt="...">
            </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <!--========================================================== -->
    <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
        <h1 class="p-3 fs-2 border-top border-3">Nuestra empresa es única para todas tus necesidades.<span class="text-primary"> Agropecuarios</span></h1>
        <p class="p-3  fs-4">
            <span class="text-primary">Agropecuario.</span> es la empresa donde te ayudamos establecer tus negocios ganaderos.
        </p>
    </section>
    <br><br><br><br><br><br><br><br>

    <!--========================================================== -->
    <!-- SECCION ACERCA DE NOSOTROS-->
    <!--========================================================== -->

    <section>
        <div class="container w-50 m-auto text-center border-top border-2" id="equipo">
            <h1 class="mb-5 fs-2">Somos un equipo pequeño con <span class="text-primary">resultados Grandes</span>.</h1>
            <p class="fs-4 ">Siempre buscamos las personas adecuadas para que trabajen con nosotros. Si te sientes listo para este reto, te esperamos para que te unas a nosotros.</p>
        </div>
    </section>
    <div class="container text-center" id="centrador">
        <img id="imagen" src="/img/equipo1.jpg" height="200">
    </div>
    <br><br><br><br><br><br><br><br>
    <!--========================================================== -->
    <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->

    <div class="container w-50 m-auto text-center border-top border-2" id="equipo">
        <h1 class="mb-5 fs-2">Nuestros <span class="text-primary">Servicios</span>.</h1>
    </div>

    <section class="w-100">
        <div class="row w-75 mx-auto" id="servicios-fila-1">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                <img id="imagen" src="./img/maquinaria.jpg" alt="desarrollo" width="180" height="160" class="rounded">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Prestamos de maquinaria</h3>
                    <p class="px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam esse neque maiores consequatur facilis amet sed rem ut nobis nihil in, laudantium earum commodi ipsam eaque animi dolorum deleniti error!</p>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                <img id="imagen" src="./img/agricultores.jpg" alt="concepto" width="180" height="160" class="rounded">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Agricultores expertos</h3>
                    <p class="px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam earum, pariatur neque accusantium blanditiis provident dolorum veniam laboriosam nesciunt dicta cum! Hic at quis iusto distinctio libero cupiditate perspiciatis eos.</p>
                </div>
            </div>
        </div>

        <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
                <img id="imagen" src="./img/fertilizar.jpg" alt="comunicaciones" width="180" height="160" class="rounded">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Fertilización con drones</h3>
                    <p class="px-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum officia saepe quas sit cupiditate fugit non similique sapiente, voluptatibus dolorem. Cupiditate, quod! Dolor quos sequi possimus voluptatum ut reiciendis praesentium!</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                <img id="imagen" src="./img/veterinarios.jpg" alt="seo" width="180" height="160" class="rounded">

                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Veterinarios expertos en ganaderia</h3>
                    <p class="px-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum ad quibusdam alias maxime, dolor quae exercitationem laudantium, laboriosam quis ullam facilis eum officia dolorem reprehenderit accusamus possimus, nulla vel beatae?</p>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br>

    <!--========================================================== -->
    <!-- Productos -->
    <!--========================================================== -->

    <section>
        <div class="container w-50 m-auto text-center border-top border-2" id="equipo">
            <h1 class="mb-5 fs-2">Lo que <span class="text-primary">Ofrecemos</span>.</h1>
            <div class="row mt-4 ml-4 mb-4">
                <div class="col">
                    <img class="rounded-circle" src="/img/maiz.jpg" alt="Aliado" height="100">
                    <h4 class="font-weight-bold mt-4">Maíz</h4>

                </div>
                <div class="col">
                    <img class="rounded-circle" src="/img/trigo.jpg" alt="Aliado" height="100">
                    <h4 class="font-weight-bold mt-4">Trigo</h4>

                </div>
                <div class="col">
                    <img class="rounded-circle" src="/img/arroz.jpg" alt="Aliado" height="100">
                    <h4 class="font-weight-bold mt-4">Arroz</h4>

                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br>

    <!--========================================================== -->
    <!-- Aliados -->
    <!--========================================================== -->

    <section>
        <div class="container w-50 m-auto text-center border-top border-2" id="equipo">
            <h1 class="mb-5 fs-2"> <span class="text-primary">Aliados</span>.</h1>
            <div class="row mt-4 ml-4 mb-4">
                <div class="col">
                    <img class="rounded-circle" src="/img/aliado1.jpg" alt="Aliado" height="236">
                    <h4 class="font-weight-bold mt-4">LOR AGRICOLA</h4>
                    <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                        animata corpora quaeritis. Summus brains sit​​.</p>
                </div>
                <div class="col">
                    <img class="rounded-circle" src="/img/aliado2.jpg" alt="Aliado" height="236">
                    <h4 class="font-weight-bold mt-4">AGRICOLAS UNIDOS</h4>
                    <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                        animata corpora quaeritis. Summus brains sit​​.</p>
                </div>
                <div class="col">
                    <img class="rounded-circle" src="/img/aliado3.jpg" alt="Aliado" height="236">
                    <h4 class="font-weight-bold mt-4">AGAVE</h4>
                    <p>Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering
                        animata corpora quaeritis. Summus brains sit​​.</p>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br><br><br>

    <!--========================================================== -->
    <!-- clientes -->
    <!--========================================================== -->

    <section>
        <div class="container w-50 m-auto text-center border-top border-2" id="equipo">
            <h1 class="mb-5 fs-2">Nuestros <span class="text-primary">clientes</span>.</h1>
            <div class="row mt-4 ml-4 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit adipisci temporibus tenetur magnam fugiat vel eos iusto deleniti, aperiam iste assumenda alias. Architecto eos quas quos repellat magni consequatur quae?</p>
            </div>
        </div>
    </section>
    <div class="container text-center" id="equipo">
        <img id="imagen" src="/img/clientes.jpg" height="200">
    </div>
    <br><br><br><br><br><br><br><br>

    <!--========================================================== -->
    <!-- Ganaderia -->
    <!--========================================================== -->

    <section>
        <div class="container w-50 m-auto text-center border-top border-2" id="equipo">
            <h1 class="mb-5 fs-2">Ganaderia<span class="text-primary">.</span></h1>
            <div class="row mt-4 ml-4 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit adipisci temporibus tenetur magnam fugiat vel eos iusto deleniti, aperiam iste assumenda alias. Architecto eos quas quos repellat magni consequatur quae?</p>
            </div>
        </div>
    </section>
    <div class="container text-center" id="equipo">
        <img id="imagen" src="/img/ganaderia.jpg" height="200">
    </div>
    <br><br><br><br><br><br><br><br>

    <!--========================================================== -->
    <!-- Cultivos -->
    <!--========================================================== -->

    <section>
        <div class="container w-50 m-auto text-center border-top border-2" id="equipo">
            <h1 class="mb-5 fs-2">Cultivos<span class="text-primary">.</span></h1>
            <div class="row mt-4 ml-4 mb-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit adipisci temporibus tenetur magnam fugiat vel eos iusto deleniti, aperiam iste assumenda alias. Architecto eos quas quos repellat magni consequatur quae?</p>
            </div>
        </div>
    </section>
    <div class="container text-center" id="equipo">
        <img id="imagen" src="/img/cultivos.jpg" height="200">
    </div>
    <br><br><br><br><br><br><br><br>

    <!--========================================================== -->
    <!-- ubicados -->
    <!--========================================================== -->

    <div id="local" class="border-top border-2">
        <div class="mapa"> </div>
        <div>
            <div class="wrapper-local">
                <h2>Ubicado en Medellín, Antioquia</h2>
                <h2 class="text-primary mb-4" id="typewriter"></h2>
                <p class="fs-5 text-body">Elijimos Medellín para nuestra oficina con el objetivo de estar cerca a nuestros clientes. ¡Visitennos y no se arrepentiran!</p>
                <section class="d-flex justify-content-start" id="numeros-local">
                </section>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>

    <!--========================================================== -->
    <!-- SECCION CONTACTOS-->
    <!--========================================================== -->

    <section id="seccion-contacto" class="border-bottom border-secondary border-2">
        <div id="bg-contactos">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#1b2a4e" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
            </svg>
        </div>


        <!--========================================================== -->
        <!-- CONTENEDOR DEL FORMULARIO -->
        <!--========================================================== -->

        <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
            <div class="text-center mb-4" id="titulo-formulario">
                <div><img src="./img/support.png" alt="" class="img-fluid ps-5"></div>
                <h2>Contactanos</h2>
                <p class="fs-5">Estamos aqui para hacer realidad de tus proyectos</p>
            </div>




            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
            </div>


            <div class="mb-3">
                <input type="input" class="form-control" id="name" name="name" placeholder="John Doe">
            </div>


            <div class="mb-3">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono">
            </div>

            <div class="mb-3">
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class=" btn btn-primary w-100 fs-5">Enviar Mensaje</button>
            </div>


        </div>
    </section>


    <!--========================================================== -->
    <!--FOOTER-->
    <!--========================================================== -->


    <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">Agropecuario. &copy; Todos Los Derechos Reservados 2022</p>
        <div id="iconos">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>
</body>

</html>