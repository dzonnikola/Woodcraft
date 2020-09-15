
<?php
// inicijalizujemo cas
session_start();

$connect = mysqli_connect("localhost", "root", "", "woodcraft");

if(isset($_POST["add_to_cart"])){
  AddToCart();
}


function AddToCart()
{
    if(isset($_SESSION["shopping_cart"]))
        {
          $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
            if(!in_array($_GET["id"], $item_array_id))
            {
              $item_array = array(
              'item_id'   =>  $_GET["id"],
              'item_name'   =>  $_POST["hidden_name"],
              'item_price'    =>  $_POST["hidden_price"],
              'item_quantity'   =>  $_POST["quantity"]
              );
              array_push($_SESSION['shopping_cart'], $item_array);
            }
            else
            {
            echo '<script>alert("Proizvod je vec dodat!")</script>';
            }
        }
        else
        {
          $item_array = array(
          'item_id'   =>  $_GET["id"],
          'item_name'   =>  $_POST["hidden_name"],
          'item_price'    =>  $_POST["hidden_price"],
          'item_quantity'   =>  $_POST["quantity"]
          );
          $_SESSION["shopping_cart"][0] = $item_array;
        }
}

if(isset($_GET["action"])){
  RemoveFromCart();
}

function RemoveFromCart(){
    if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
          if($values["item_id"] == $_GET["id"])
        {
          unset($_SESSION["shopping_cart"][$keys]);
            echo '<script>alert("Ukolonjeno iz korpe!")</script>';
            echo '<script>window.location="shop.php"</script>';
        }
      }
    }
}



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
              <a class="page-scroll" href="html/login.html">Prijava</a>
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
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Dobrodosli na stranicu nase prodavnice!</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Pogledajte nasu siroku ponudu!</p>
              <a href="#" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Vidi ponudu</a>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End -->


        <section class="section" id="katalog" style="padding-top: 150px;">
        <div class="container">
          <div class="bordert m-auto mw-5 "></div>
          <div class="row">
            <?php
              $query = "SELECT * FROM proizvod ORDER BY id ASC";
              $result = mysqli_query($connect, $query);
              if(mysqli_num_rows($result) > 0)
              {
                while($row = mysqli_fetch_array($result))
                {
              ?>
            <div class="col-lg-3 col-md-3 col-xs-12">
              <form method="POST" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                  <img src="productimage/<?php echo $row["slika"]; ?>" class="img-responsive" /><br /> <br>

                  <h6 style="color: #e67326;"><?php echo $row["naziv"]; ?></h6>

                  <h5 class="text-danger">Cena: <?php echo $row["cena"]; ?> RSD</h5>

                  <h5 class="text-danger">Jedinična mera: <?php echo $row["jedMera"]; ?></h5>

                  <input type="text" name="quantity" value="1" class="form-control" style="border-color: black; border-radius: 10px; color: black;" />

                  <input type="hidden" name="hidden_name" value="<?php echo $row["naziv"]; ?>" />

                  <input type="hidden" name="hidden_price" value="<?php echo $row["cena"]; ?>" />

                  <input type="submit" name="add_to_cart" style="margin-top:5px; background-color: #0671ba; border-radius: 10px;" class="btn btn-info" value="Dodaj u korpu" />
                </div>
                <br>
              </form>
            </div>
            <?php
                }
              }
            ?>
          </div>

            <div style="clear:both"></div>
            <br />
            <h3>Detalji porudzbine</h3>
            <div class="table-responsive">
              <table class="table table-bordered">
                <tr>
                  <th width="40%">Naziv proizvoda</th>
                  <th width="10%">Kolicina</th>
                  <th width="20%">Jedinicna cena</th>
                  <th width="15%">Ukupno</th>
                  <th width="5%">Izmeni</th>
                </tr>
                <?php
                if(!empty($_SESSION["shopping_cart"]))
                {
                  $total = 0;
                  foreach($_SESSION["shopping_cart"] as $keys => $values)
                  {
                ?>
                <tr>
                  <td><?php echo $values["item_name"]; ?></td>
                  <td><?php echo $values["item_quantity"]; ?></td>
                  <td><?php echo $values["item_price"]; ?> RSD</td>
                  <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>RSD</td>
                  <td><a href="shop.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="btn btn-danger">Ukloni</span></a></td>
                </tr>
                <?php
                     $total = $total + ($values["item_quantity"] * $values["item_price"]);
                     $GLOBALS['total'] = $total;
                  }
                ?>
                <tr>
                  <td colspan="3" align="right">Total</td>
                  <td align="right"><?php echo number_format($total, 2); ?> RSD</td>
                  <td><a href="posaljiNarudzbenicu.php" class="btn btn-info">Završetak kupovine</td>
                </tr>
                <?php
                }
                ?>              
              </table>
            </div>
          </div>
        </div>
        <br />
      </section>
      

    <?php include "html/contact.html" ?> 

    <?php include "html/jsbundle.html" ?>

  </body>

</html>