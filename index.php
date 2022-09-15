<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Wukong Tattoo Studio</title>
        <!-- CDN Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/857f3fe573.js" crossorigin="anonymous"></script>
        <!-- Custom Favicon -->
        <link rel="shortcut icon" href="IMG/FAVICON.png" type="image/x-icon">
    </head>
    <body>
        <!-- Header with Navbar -->
        <header class="header">
            <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
                <div class="container">
                    <a href="index.php" class="navbar-brand">WUKONG TATTOO STUDIO</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Menu de navegación -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#artist">NUESTRO ARTISTA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#gallery">PROYECTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#cotizaciones">COTIZAR PROCEDIMIENTO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Jumbotron -->
        <section class="jumbotron" id="home">
            <h1 class="display-4">WUKONG TATTOO STUDIO</h1>
            <p class="lead">Bienvenidos a nuestro sitio web oficial.</p> 
            <hr class="my-4">
            <p>Haz clic abajo para contactarme vía WhatsApp <i class="fa fa-hand-point-down" area-hidden="true"></i></p>
            <a class="btn btn-primary btn-lg" href="https://wa.link/5p1bay" role="button" target="_blank">IR A WHATSAPP <i class="fa fa-envelope"></i></a>
        </section>
        <div class="container">
            <section id="services">
                <!-- Home -->
                <h1 class="text-center">Nuestros servicios: </h1>
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="IMG/TATUAJES.jpg" class="d-block w-100" alt="Imagen ejemplo Tatuaje">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>TATUAJES</h5>
                                <p>Plasmamos en tu piel tus ideas.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="IMG/PERFORACIONES.jpg" class="d-block w-100" alt="Imagen ejemplo Perforación">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>PERFORACIONES</h5>
                                <p>Adornamos tu cuerpo con estilo.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="IMG/JOYERIA.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>VENTA DE JOYERÍA</h5>
                                <p>Gran variedad de joyería de calidad.S</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </section>
            <br>
            <!-- Artist's Section -->
            <section id="artist">
                <h1 class="text-center">Nuestro artista</h1>
                <br>
                <div class="container-fluid artist-description d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <img src="IMG/artist.jpg" class="img-fluid" alt="Nuestro Artista">
                        </div>
                        <div class="artist-presentation col-12 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Nombre del artista</h5>
                                    <p class="card-text">Hola mi nombre es Fulanito, sigueme en mis redes sociales: <i class="fa fa-hand-point-down" area-hidden="true"></i></p>
                                    <a href="#" class="btn btn-primary d-block" type="button">Instagram <i class="fa fa-instagram"></i></a>
                                    <br>
                                    <a href="#" class="btn btn-primary d-block" type="button">Facebook <i class="fa fa-facebook"></i></a>
                                    <br>
                                    <a href="#" class="btn btn-primary d-block" type="button">WhatsApp <i class="fa fa-whatsapp"></i></a>
                                    <br>
                                    <a href="#" class="btn btn-primary d-block" type="button">Tik Tok <i class="fab fa-tiktok"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <!-- Gallery Section -->
            <section id="gallery">
                <h1 class="text-center">Algunos de nuestros proyectos: </h1>
                <div class="linea"></div>
                <div class="contenedor-imagenes">
                    <div class="imagen">
                        <img src="IMG/1.jpg" alt="Proyecto 1">
                        <div class="overlay">
                            <a href="#" target="_blank">
                                <h2>Ver trabajo</h2>
                            </a>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="IMG/2.jpg" alt="Proyecto 2">
                        <div class="overlay">
                            <a href="#" target="_blank">
                                <h2>Ver trabajo</h2>
                            </a>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="IMG/3.jpg" alt="Proyecto 3">
                        <div class="overlay">
                            <a href="#" target="_blank">
                                <h2>Ver trabajo</h2>
                            </a>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="IMG/4.jpg" alt="Proyecto 4">
                        <div class="overlay">
                            <a href="#" target="_blank">
                                <h2>Ver trabajo</h2>
                            </a>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="IMG/5.jpg" alt="Proyecto 5">
                        <div class="overlay">
                            <a href="#" target="_blank">
                                <h2>Ver trabajo</h2>
                            </a>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="IMG/6.jpg" alt="Proyecto 6">
                        <div class="overlay">
                            <a href="#" target="_blank">
                                <h2>Ver trabajo</h2>
                            </a>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="IMG/7.jpg" alt="Proyecto 7">
                        <div class="overlay">
                            <a href="#" target="_blank">
                                <h2>Ver trabajo</h2>
                            </a>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="IMG/8.jpg" alt="Proyecto 8">
                        <div class="overlay">
                            <a href="#" target="_blank">
                                <h2>Ver trabajo</h2>
                            </a>
                        </div>
                    </div>
                    <div class="imagen">
                        <img src="IMG/9.jpg" alt="Proyecto 9">
                        <div class="overlay">
                            <a href="#" target="_blank">
                                <h2>Ver trabajo</h2>
                            </a>
                        </div>
                    </div>
                </div> 
            </section>
            <br>
            <!-- Form Section -->
            <section id="cotizaciones">
                <h1 class="text-center">Sección de cotizaciones</h1>
                <p class="text-center">Estimado cliente, por favor complete este formulario: </p>
                <form id="formulario" action="mail.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre del cliente: </label>
                        <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Ingresar Nombre" aria-describedby="nombreCliente" required>
                        <small id="nombreDelCliente" class="form-text text-muted">Ingresa tu nombre.</small>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo electrónico: </label>
                        <input type="email" class="form-control" id="correoCliente" name="correoCliente" placeholder="Ingresar Correo" aria-describedby="correoCliente" required>
                        <small id="correoDelCliente" class="form-text text-muted">Ingresa tu correo.</small>
                    </div>
                    <div class="form-group">
                        <label for="celular">Número de celular: </label>
                        <input type="text" class="form-control" id="numeroCelular" name="numeroCelular" placeholder="Ingresar Número de Celular (3XXXXXXXXX)" aria-describedby="numeroCelular" required>
                        <small id="numeroDelCliente" class="form-text text-muted">Ingresa tu número de celular.</small>
                    </div>
                    <div class="form-group">
                        <label for="procedimiento">Procedimiento: </label>
                        <select class="custom-select" name="procedimientoCliente" id="procedimientoCliente" required>
                            <option value="Default" selected>Seleccione el procedimiento: </option>
                            <option value="Piercing" name="Piercing">Piercing</option>
                            <option value="Tatuaje" name="Tatuaje">Tatuaje</option>
                        </select>
                        <small id="procedimientoDelCliente" class="form-text text-muted">Selecciona el procedimiento que quieres realizarte.</small>
                    </div>
                    <input type="submit" value="Cotizar" name="enviar" class="btn btn-primary d-block" id="boton" href="google.com"/>
                </form>
            </section>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    </body>
</html>