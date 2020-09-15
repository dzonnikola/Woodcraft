<?php
// inicijalizujemo cas
session_start();
 
// da li je korisnik loginovan ako ne vrati ga nazad
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woodcraft - proizvodnja drveta</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sidebar.css">
<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        <a href="dobrodosli.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="korisnici.php" class="list-group-item list-group-item-action bg-light">Korisnici</a>
        <a href="proizvodi.php" class="list-group-item list-group-item-action bg-light">Proizvodi</a>
        <a href="narudzbenice.php" class="list-group-item list-group-item-action bg-light">Narudzbenice</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <a href="welcome.php" class="navbar-brand"><img class="img-fulid" src="../img/front-icon.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <h2>Pregled korisnika</h2>
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Odjava <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

  <div class="card mb-3">
    <div class="card-header">
      <form method="GET" action="crud/brisiKorisnika.php"> 
        <input type="submit" name="deleteUser" class="btn btn-danger pull-right" value="Obrisi korisnika"> 
        <input type="text" placeholder="ID proizvoda" name="id">
      </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Klijenta</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Username</th>
                        <th width="70">Email</th>
                        <th>Tip korisnika</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID Klijenta</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Username</th>
                        <th width="70">Email</th>
                        <th>Tip korisnika</th>

                    </tr>
                </tfoot>
                <tbody>
                        <tr>
                          <?php

                            $mysqli = new mysqli('localhost', 'root', '', 'woodcraft') or die($mysqli->error);
                            $result = $mysqli -> query("SELECT * FROM user");
                            if($result->num_rows>=1)
                            {
                              $message="";
                              while($row=$result->fetch_assoc())
                              {
                              $message.="<tr>".
                              "<td>".$row['id']."</td>".
                              "<td>".$row['ime']."</td>".
                              "<td>".$row['prezime'].'</td>'.
                              "<td>".$row['username']."</td>".
                              "<td>".$row['email']."</td>".
                              "<td>".$row['type']."</td>";
                              }
                              echo $message;
                            }
                          ?>
                        </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
</body>
</html>