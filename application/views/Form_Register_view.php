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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Form_register_style.css') ?>">
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">OHM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li>
                        <a class="btn btn-outline-dark btn-floating m-1" href="<?php echo base_url() ?>index.php/Ohm_HomePage_Controllers/index" role="button">ACCUEIL</a>
                    </li>
                    <li>
                        <a class="btn btn-outline-dark btn-floating m-1" href="<?php echo base_url() ?>index.php/Connexion_Client_Controllers/index" role="button">CONNEXION</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- FIN NAVBAR-->
<h3>Création compte client</h3>
    <div class=" container-fluid">
  
    <body>
        <div class="container containerProfil" id="profil">
<!-- Form pour créer un compte -->
            <div class="container Form">
                <form method="post" action="<?php echo base_url(); ?>index.php/Form_Register_controllers/validation">
                    <div class="form-group">
                        <label>Nom : </label>
                        <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" placeholder="Nom"/>
                        <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                    </div>

                    <div class="form-group">
                        <label>Prénom : </label>
                        <input type="text" name="user_firstname" class="form-control" value="<?php echo set_value('user_firstname'); ?>" placeholder="Prenom"/>
                        <span class="text-danger"><?php echo form_error('user_firstname'); ?></span>
                    </div>

                    <div class="form-group">
                        <label>E-mail : </label>
                        <input type="text" name="user_mail" class="form-control" value="<?php echo set_value('user_mail'); ?>" placeholder="Mail"/>
                        <span class="text-danger"><?php echo form_error('user_mail'); ?></span>
                    </div>

                    <div class="form-group">
                        <label>Mot de passe : </label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" placeholder="Mot de passe"/>
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>

                    <div class="form-group">
                        <label>Ville : </label>
                        <input type="text" name="user_city" class="form-control" value="<?php echo set_value('user_city'); ?>" placeholder="Ville" />
                        <span class="text-danger"><?php echo form_error('user_city'); ?></span>
                    </div>

                    <div class="form-group">
                        <label>Code Postal : </label>
                        <input type="text" name="user_zipCode" class="form-control" value="<?php echo set_value('user_zipCode'); ?>" placeholder="Code Postal"/>
                        <span class="text-danger"><?php echo form_error('user_zipCode'); ?></span>
                    </div>

                    <div class="form-group">
                        <label>N° et Rue : </label>
                        <input type="text" name="user_adresse" class="form-control" value="<?php echo set_value('user_adresse'); ?>" placeholder="Adresse"/>
                        <span class="text-danger"><?php echo form_error('user_adresse'); ?></span>
                    </div>

                    <div class="form-group">
                        <label>Telephone : </label>
                        <input type="text" name="user_tel" class="form-control" value="<?php echo set_value('user_tel'); ?>" placeholder="telephone"/>
                        <span class="text-danger"><?php echo form_error('user_tel'); ?></span>
                    </div>

                    <div class="form-group">
                        <label>Date de naissance : </label>
                        <input type="date" name="user_birthday" class="form-control" value="<?php echo set_value('user_birthday'); ?>" placeholder="Date de naissance" />
                        <span class="text-danger"><?php echo form_error('user_birthday'); ?></span>
                    </div>

                    <div class="form-group">
                        <label>Date d'obtention du permis : </label>
                        <input type="date" name="user_drivingLicence" class="form-control" value="<?php echo set_value('user_drivingLicence'); ?>" placeholder="Date d'obtention du permis"/>
                        <span class="text-danger"><?php echo form_error('user_drivingLicence'); ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="register" value="Register" class="btn" id="btnLogin"/>
                    </div>
                </form>
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
            <a class="btn btn-outline-light btn-floating m-1" href="<?php echo base_url() ?>index.php/Form_Register_controllers/index" role="button"></a>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>

</html>