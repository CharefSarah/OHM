<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OHM</title>
    <meta name="description" content="Site de location de voiture electrique">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/HomePage.css') ?>">
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand  navbar-" href="<?php echo base_url() ?>index.php/Ohm_HomePage_controllers/index">OHM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 110px;">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>index.php/Cars_controllers/index">LOCATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABONNEMENT</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto my-2 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="btn " href="<?php echo base_url() ?>index.php/Connexion_Client_controllers/index" role="button"> <img id="btnNav" src="<?php echo base_url('assets/img/compte.png') ?>"></a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/carousel2.png') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <button type="button" class="button btn ">RECHERCHE</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/carousel1.png') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <button type="button" class="button btn ">RECHERCHE</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/carousel3.png') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <button type="button" class="button btn ">RECHERCHE</button>
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

    <div>
        <div class=" form row justify-content-end">
            <div class="infos col-md-8">
                <h2 id="title"> RETROUVEZ NOS SERVICES DISPONIBLES</h2>
                <p class='text'>
                    OHM vous propose une large gamme de services de location de véhicules electrique.<br> Nous voulons vous aider dans vos déplacements et vous donner accès aux véhicules correspondant à vos besoins.<br> Retrouvez tous nos services, de la location en aller simple jusqu’à la réservation longue durée.
            </div>
            <div class="divform col-md-4">
                <div class="group ">
                    <input class='' type="date" placeholder="Input..." autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
                </div>
                <div class="group">
                    <input type="time" placeholder="Input..." autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
                </div>
                <div class="group">
                    <input type="date" placeholder="Input..." autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
                </div>
                <div class="group">
                    <input type="time" placeholder="Input..." autocomplete="off" /><span class="highlight"></span><span class="bar"></span>
                </div>
                <div class="d-flex justify-content-center mb-2">
                    <button type="button" class="button btn ">RECHERCHE</button>
                </div>
            </div>
        </div>

        <!--FOOTER-->
        <footer class="footer  text-white">
            <div class="container p-4">
                <section class="mb-4">
                    <div>
                        <a href="#!" role="button"><i class="neon1 icon_image bi bi-instagram"></i></a>
                        <a href="#!" role="button"><i class="neon2 icon_imagebi bi-facebook"></i></a>
                        <a href="#!" role="button"><i class="neon3 icon_imagebi bi-twitter"></i></a>
                        <a href="#!" role="button"><i class="neon4 icon_imagebi bi-youtube"></i></a>
                    </div>
                </section>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 item">
                        <ul>
                            <h3>Services</h3>
                            <li><a href="#">Espace agent</a></li>
                            <li><a href="#">Mention légales</a></li>
                            <li><a href="#">Conditions particulière de ventes</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4  item">
                        <h3>About</h3>
                        <p id="textabout">
                            OHM est un service de location de voitures<br>
                            100% electrique, nos batterie testée et vérifiée<br>
                            OHM est une filiale de LOCA-AUTO.<br>
                            © 2021 Copyright<br> SARAH CHAREF<br>
                            <a class="btn btn-outline-light btn-floating m-1" href="<?php echo base_url() ?>index.php/legalmention_controllers/index" role="button"></a>
                        </p>
                    </div>
                    <div class="carte col-md-4 item text">

                    </div>
                </div>
            </div>

    </div>

    </footer>

</body>

</html>