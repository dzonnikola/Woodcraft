<?php
include 'shop.php';

session_start();


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	echo '<script>alert("Da bi ste nastavili kupovinu, prvo se ulogujte!")</script>';
    header("location: login.php");
    exit;
}

	$con = new mysqli('localhost', 'root', '', 'woodcraft') or die(mysqli_error);

	try{

		$username = $_SESSION['username'];

		$querySelect = "SELECT * FROM user WHERE username = '$username' LIMIT 1";

		$res = mysqli_query($con, $querySelect);

		$row = mysqli_fetch_assoc($res);


		$NarudzbenicaId = rand(1, 1000);
		$get_id = rand(1001,2000);
		$get_cart = $total;
		$get_user = $row["id"];

		$query = "INSERT INTO narudzbenica(NarudzbenicaId, BrojNarudzbine, Vrednost, IdKorisnika) VALUES ('$NarudzbenicaId','$get_id', '$get_cart', '$get_user')" or die(mysqli_error);

		if(mysqli_query($con, $query)){
	    	echo '<script>alert("Narudzbenica uspesno kreirana! Broj vase narudzbenice :'. $NarudzbenicaId.'")</script>';
	    	echo '<scipt>window.location="index.php"</script>';

	    	unset($_SESSION["shopping_cart"]);
		}
		else{
			echo '<script>alert("Neuspešno kreiranje narudzbenice, pokusaj ponovo!")</script>';
			echo '<scipt>window.location="shop.php"</script>';
		}

	}
	catch (Exception $e) {
		echo "Greska : " . $e->getMessage();
	}

?>