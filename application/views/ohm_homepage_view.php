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
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand  navbar-" href="#">OHM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 110px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LOCATIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABONNEMENT</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto my-2 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="btn " id="btnNav" href="<?php echo base_url() ?>index.php/Connexion_Client_controllers/index" role="button">Compte</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <!-- FIN NAVBAR-->
    <!-- SELECT-->

    <div class=" form row justify-content-end">
        <div class="col-md-6">
            <h1>blolobolo</h1>
        </div>
        <div class="col-md-2">
            <h2> fbloblobloblo</h2>
        </div>
        <div class=" col-md-4">
            <input type="date" class="form-control" id="inputEmail1" placeholder="Jour de départ">
            <input type="time" class="form-control" id="inputEmail4" placeholder="Heure de départ">
            <input type="date" class="form-control" id="inputEmail4" placeholder="Jour de retour">
            <input type="time" class="form-control" id="inputEmail4" placeholder="Heure de retour">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn" id="btnNav">Primary</button>
            </div>
        </div>
    </div>

    <!-- FIN NAVBAR-->
    <!-- CAROUSEL-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/carohm.png') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <button type="button" class="btn btn-primary">Primary</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/carohm.png') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption  d-md-block">
                    <button type="button" class="btn btn-primary">Primary</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/carohm.png') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <button type="button" class="btn btn-primary">Primary</button>
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
    <!-- CAROUSEL-->
    <!--ABOUT -->
    <div>
        <h2> fbloblobloblo</h2>
        <P class='text'> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
            repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
            eum harum corrupti dicta, aliquam sequi voluptate quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
            repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
            eum harum corrupti dicta, aliquam sequi voluptate quas. </P>
    </div>
    <!--ABOUT -->
    <!--FOOTER-->
    <footer class="bg-dark text-center text-white">
        <div class="container p-4">
            <section class="mb-4">
                <a href="#!" role="button"><i class="neon1 icon_image bi bi-instagram"></i></a>
                <a href="#!" role="button"><i class="neon2 icon_imagebi bi-facebook"></i></a>
                <a href="#!" role="button"><i class="neon3 icon_imagebi bi-twitter"></i></a>
                <a href="#!" role="button"><i class="neon4 icon_imagebi bi-youtube"></i></a>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
            </div>
            © 2021 Copyright SARAH CHAREF | OHM est une filiale de LOCA-AUTO
            <a class="btn btn-outline-light btn-floating m-1" href="<?php echo base_url() ?>index.php/legalmention_controllers/index" role="button"></a>
            <a class="btn btn-outline-light btn-floating m-1" href="<?php echo base_url() ?>index.php/Profil_Client_controllers/index" role="button"></a>
        </div>

    </footer>

</body>

</html>