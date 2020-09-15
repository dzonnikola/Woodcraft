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
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="index.php" class="navbar-brand"><img class="img-fulid" src="img/logo-wood.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php">&larr; Nazad na početnu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="login.php">Prijava</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="registracija.php">Registracija</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="index.php">Nazad na početnu</a>
            </li>
            <li>
              <a class="page-scroll" href="login.php">Prijava</a>
            </li>
            <li>
              <a class="page-scroll" href="#features">Registracija</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Prijava</h1>
                <form action="loginProcess.php" method="POST">
                  <div class="form-group">
                    <label for="email">Email adresa</label>
                    <input type="username" name="username" class="form-control" placeholder="Vaš username">
                  </div>
                  <div class="form-group">
                    <label for="lozinka">Lozinka</label>
                    <input type="password" name="lozinka" class="form-control" placeholder="Vaša lozinka">
                  </div>
                  <button type="submit" name="login_button" id="login_button" class="btn btn-primary">Prijavi se</button>
                </form>
            </div>
          </div>
        </div> 
      </div>           
    </header>

    <?php include "html/jsbundle.html" ?>

  </body>

</html>