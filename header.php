<?php require('function.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <title><?php //echo $title ?? "Accueil" ?></title> -->
  <title><?php echo empty($title) ? "acceuil" : $title ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- NAV BAR -->
  <header>

    <!-- debut navbar -->
    <nav class="navbar navbar-expand-lg bg-transparent text-uppercase position-absolute z-3 w-100 p-0">
      <div class="w-lg-90 w-100  mx-2 m-lg-auto d-lg-flex ">
        <a href="/index.html" class="w-25"><img class="img-fluid width-25" src="assets/img/logo_2.png" alt=""></a>
        <button class="navbar-toggler mt-3 btn-burger float-end" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse bg-dark navbar-collapse justify-content-around" id="navbarText">
          <ul class="navbar-nav sm-auto navbar-nav-scroll">
            <?php echo navlink("/404.php" , "l'équipe") ?> 
            <li class="nav-item dropdown">
              <a data-bs-toggle="dropdown" role="button" aria-expanded="false" class="nav navlien"
                href="/presentation.html">les activités</a>
              <ul class="dropdown-menu text-light bg-dark">
                <li><a class="dropdown-item text-light bg-dark activelien" href="/presentation.html">LE CYCLING</a></li>
                <li><a class="dropdown-item text-light bg-dark activelien" href="/presentation.html">LE TRAINING
                    FONCTIONNEL</a>
                </li>
                <li><a class="dropdown-item text-light bg-dark activelien" href="/presentation.html">LE CROSSFIT</a>
                </li>
                <li><a class="dropdown-item text-light bg-dark activelien" href="/presentation.html">PERSONNAL TRAINING
                    - COACH
                    PERSONNEL</a></li>
              </ul>
            </li>
            <?php echo navlink("/404.php" , "nos offres") ?> 
            <?php echo navlink("/404.php" , "planning") ?> 
            <?php echo navlink("/404.php" , "Contact") ?> 
            <?php echo navlink("/index.php" , "Pierre") ?> 
            <?php echo navlink("/404.php" , "planning") ?> 
          </ul>
          <a id="numberPhone" class="link ps-1" href="tel:060606060606"><img src="assets/img/facebook.png" alt="">05 59
            47 84 18</a>
          <!-- <span id="span" class="navbar-text">
          &#x260E;&#x260E;&#x260E;
        </span> -->

          <div class="img-logo mt-2 mt-lg-0">
            <!-- <div class="p- mx-5"> -->
            <img class="mx-2" width="20" height="20" src="assets/img/icons8-facebook-50.png" alt="">
            <img class="mx-2" width="20" height="20" src="assets/img/icons8-instagram-50.png" alt="instagram-new">
            <img class="mx-2" width="20" height="20" src="assets/img/icons8-tripadvisor-50.png" alt="tripadvisor">
            <!-- </div> -->
            <!-- <div class="vr"></div> -->
          </div>
          <div class="banderol"><a href="#">en</a></div>
        </div>

      </div>

    </nav>
    <!-- SLIDER -->
    <div id="carouselExampleCaptions" class="carousel caroussel responsive slide" data-bs-ride="carousel">
      <div class="carousel-indicators my-0 caroussel responsive">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner caroussel">
        <div class="carousel-item active position-relative">
          <img src="./assets/img/slider/slide_1.jpg" class="d-block w-100" alt="img1">
          <div class="carousel-caption w-75 p-0 position-absolute top-70 start-50 translate-middle">
            <p class="my-2">2 INSCRIPTIONS SIMULTANÉES = UN 3ÈME ABONNEMENT DE 6 MOIS OFFERT ! </p>
            <button type="button" class="btntt mt-5 btn-carousel btn btn-outline-light rounded-0 btn-lg border-2">Plus d'info</button>
          </div>
        </div>
        <div class="carousel-item  position-relative">
          <img src="assets/img/slider/slide_2.jpg" class="d-block w-100" alt="img2">
          <div class="carousel-caption w-75 p-0 position-absolute top-50 start-50 translate-middle">
            <p class="my-2">2 INSCRIPTIONS SIMULTANÉES = UN 3ÈME ABONNEMENT DE 6 MOIS OFFERT ! </p>
            <button type="button" class="btntt mt-5 button1 btn btn-outline-light rounded-0 btn-lg border-2">Plus d'info</button>
          </div>
        </div>
        <div class="carousel-item  position-relative">
          <img src="assets/img/slider/slide_3.jpg" class="d-block w-100" alt="img3">
          <div class="carousel-caption w-75 p-0 position-absolute top-50 start-50 translate-middle">
            <p class="my-2">2 INSCRIPTIONS SIMULTANÉES = UN 3ÈME ABONNEMENT DE 6 MOIS OFFERT ! </p>
            <button type="button" class="btntt mt-5 button1 btn btn-outline-light rounded-0 btn-lg border-2">Plus d'info</button>
          </div>
        </div>
      </div>
    </div>
  </header>