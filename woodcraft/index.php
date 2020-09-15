<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>WoodCraft - proizvodnja drveta</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">  
  </head>
  <body>
    <!-- Header Section Start -->
    <header id="hero-area">    
      <!-- Navbar Start -->
    <?php include "html/header.html"?>

      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <?php  if (isset($_SESSION['username'])) : ?> 
              <h2> 
                  Zdravo <span style="color:#e2e2e2;";> <?php echo $_SESSION['username']; ?></span> 
              </h2> 
              <a href="logout.php"><p>Odjava?</p></a>
              <?php endif ?> <br>
              <h1>Dobrodošli na Woodcraft.rs</h1>
              <p>Sajt za prodaju drveta i drvene građe!</p>
              <a href="shop.php" class="btn btn-common">Pogledaj ponudu!</a>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 

          <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Naše usluge</h2>
          <hr class="lines">
          <p class="section-subtitle">U našoj ponudi usluga se nalazi proizvodnja drveta, drvenih lajsni i ostalih drvenih materijala! Uverite se i sami u naš kvalitet i budite deo našeg uspešnog poslovanja!</p>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lnr lnr-home"></i>
              </div>
              <h4>Proizvodnja drveta</h4>
              <p>Bavimo se proizvodnjom svih vrsta drva, mogućnost dostave drva u velikim količinama. Mogućnost korekcije cene na velike količine.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lnr lnr-crop"></i>
              </div>
              <h4>Proizvodnja drvenih lajsni</h4>
              <p>Bavimo se proizvodnjom svih vrsta drvenih lajsni, mogućnost izrade lajsni različitih dimenzija i oblika, po porudžbini kupca.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lnr lnr-construction"></i>
              </div>
              <h4>Drvena građa</h4>
              <p>Bavimo se proizvodnjom svih vrsta drvenih lajsni, po porudžbini kupca, takođe se bavimo proizvodnjom briketa i lajsni od MDF-a.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

       <!-- Features Section Start -->
    <section id="features" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">O nama</h2>
          <hr class="lines">
          <p class="section-subtitle">Iza sebe imamo niz zadovoljnih klijenata, uspešnih poslova i veoma pozitivna iskustva!<br> Budite i vi deo našeg uspešnog poslovanja!</p>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="container">
              <div class="row">
                 <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-rocket"></i>
                    </span>
                    <div class="text">
                      <h4>Uvek precizni</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-laptop-phone"></i>
                    </span>
                    <div class="text">
                      <h4>Uvek spremni za poslovanje</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-layers"></i>
                    </span>
                    <div class="text">
                      <h4>Velika ponuda lajsni</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-xs-12 box-item">
                    <span class="icon">
                      <i class="lnr lnr-cog"></i>
                    </span>
                    <div class="text">
                      <h4>Mogućnost nabavke na veliko</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section End -->    
    <?php include "html/contact.html" ?>   

    <?php include "html/jsbundle.html" ?>

  </body>

</html>