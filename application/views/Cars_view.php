<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OHM</title>
  <meta name="description" content="Site de location de voiture electrique">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/Cars.css') ?>">
</head>

<body>
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand  navbar-" href="<?php echo base_url() ?>index.php/Ohm_HomePage_controllers/index">OHM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>index.php/Ohm_HomePage_controllers/index">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">LOCATIONS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ABONNEMENT</a>
          </li>
          <li>
            <a class="btn btn-outline-dark " href="<?php echo base_url() ?>index.php/Connexion_Client_controllers/index" role="button">Compte</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--NAVBAR-->

  <h1 class="display-4">Tous les modèles</h1>
  <p class="lead mb-0">Selectionnez une voitures</p>
  <?php
  if ($fetch_data->num_rows() > 0) {
    foreach ($fetch_data->result() as $row) {
  ?>

      <div class="row">
        <div class="col-md-8 mx-auto">
          <ul class="list-group shadow">
            <li class="list-group-item">
              <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                <div class="media-body order-2 order-lg-1">
                  <h5 class="mt-0 font-weight-bold mb-2"> <?php echo $row->BRAND; ?>, <?php echo $row->MODEL; ?></h5>
                  <img src="<?php echo base_url('assets/img/doors.svg') ?>"> <?php echo $row->DOORS; ?>,<img src="<?php echo base_url('assets/img/places.svg') ?>"><?php echo $row->places; ?>,<img src="<?php echo base_url('assets/img/batteries.svg') ?>"> <?php echo $row->batteries; ?> <?php echo $row->TYPE; ?>.</p>
                  <div class="d-flex align-items-center justify-content-between mt-1">
                    <h6 class="font-weight-bold my-2"> <?php echo $row->PRICE; ?>€/Jours</h6>
                    <button type="button" class="btn btn-primary d-flex justify-content-end">Louer</button>

                  </div>
                </div><img class="imgcard" src="<?php echo base_url($row->PHOTO) ?>">
              </div>
            </li>
          </ul>
        </div>
      </div>
    <?php
    }
  } else {
    ?>
    <tr>
      <!-- Message si table vide -->
      <td colspan="5">No Data Found</td>
    </tr>
  <?php
  }
  ?>
  </div>
  </div>

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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>