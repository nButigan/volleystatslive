<?php

session_start();
require 'config.php';

    $servername = "localhost";
    $username = "id7774308_users_login";
    $password = "k7i7k9o7";
    $dbname = "id7774308_korisnici_prijava";

 $db = mysqli_connect('localhost', 'id7774308_users_login', 'k7i7k9o7', 'id7774308_korisnici_prijava');
 
 if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
  
  if (isset($_POST['save'])) 
     {
		$korisnickoIme = $_POST['korisnickoIme'];
		$lozinka = $_POST['lozinka'];
		
		sql = " SELECT korisnickoIme,lozinka,korisnik_uloga FROM korisnik ";
		$result = mysqli_query($db, $sql);

       if (mysqli_num_rows($result)) 
	   {
		 
			$_SESSION['korisnickoIme'] = $korisnik['korisnickoIme'];
			$_SESSION['lozinka'] = $korisnik['lozinka'];
			$_SESSION['korisnik_uloga'] = $korisnik['korisnik_uloga'];
			if($_SESSION['korisnik_uloga']=='2')
				{
					$_SESSION['poruka_prijava'] = 'Uspješno ste prijavljeni!';
					header('Location: admin.php');
					exit();
				}
 			
 			else($_SESSION['korisnik_uloga']=='3')
 				{
 					$_SESSION['poruka_prijava'] = 'Uspješno ste prijavljeni!';
 					header('Location: welcome.php');
 					exit();
 				}
		
       }
       else 
	   {		   
		$_SESSION['poruka_prijava'] = 'Neispravno korisničko ime i/ili lozinka.';
	        header('Location: prijava1.php');
		exit();		   
	   }
/*session_start();
require 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	try
	{
		//Stvori novi PDO objekt
		$dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD, 
			[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]);

		//Pripremi novi PDO objekt	
		$stmt = $dbh->prepare('SELECT * FROM korisnik WHERE korisnickoIme = :korisnickoIme AND lozinka =:lozinka');

		//Izvrši SQL upit	
		$stmt->execute([
			':korisnickoIme' => $_POST['korisnickoIme'],
			':lozinka' => $_POST['lozinka'],
			':korisnik_uloga' => $_GET['korisnik_uloga']
		]);

		//Vrati rezultat upita
		$korisnik = $stmt->fetch();

		//Provjeri rezultat upita
		if(empty($korisnik))
		{

			//Korisnik s ovim pristupnim podacima ne postoji u bazi, prijava je neuspješna

			//Prikaži poruku o grešci
			$_SESSION['poruka_prijava'] = 'Neispravno korisničko ime i/ili lozinka.';

			//Preusmjeri na početnu stranicu
			header('Location: prijava1.php');
			exit();
		}
		else
		{
			//Korisnik s ovim pristupnim podacima postoji u bazi, prijava je uspješna


			//Postavi sesijske varijable
			//$_SESSION['IDkorisnik'] = $korisnik['IDkorisnik'];
			$_SESSION['korisnickoIme'] = $korisnik['korisnickoIme'];
			$_SESSION['lozinka'] = $korisnik['lozinka'];
			$_SESSION['korisnik_uloga'] = $korisnik['korisnik_uloga'];

			if($_SESSION['korisnik_uloga']=='2')
				{
					$_SESSION['poruka_prijava'] = 'Uspješno ste prijavljeni!';
					header('Location: admin.php');
					exit();
				}
 			
 			else($_SESSION['korisnik_uloga']=='3')
 				{
 					$_SESSION['poruka_prijava'] = 'Uspješno ste prijavljeni!';
 					header('Location: welcome.php');
 					exit();
 				}
 			

			//$_SESSION['poruka_prijava'] = 'Uspješno ste prijavljeni!';

			//Preusmjeri na početnu stranicu

			//header('Location: prijava1.php');
			//exit();
		}
	}
	catch(PDOException $e)
	{
		http_response_code(500);
		die($e->getMessage());
	}
}*/
/*
	catch(PDOException $e)
	{
		http_response_code(500);
		die($e->getMessage());
	}
	
	if($row['korisnicko_ime'] == $uname && $row['sifra'] == $pass){
		    if($r['naziv'] == 'korisnik'){
			header("refresh:1;url=welcome.html");
			exit();
		    }
		} else if($row2['korisnicko_ime'] == $uname && $row2['sifra'] == $pass){
		    if($rs['naziv'] == 'r'){
			header("refresh:1;url=../admin.html");
			exit();
		    }
		} */
} 

/*
require_once('config.php');
	//dohvaćaju se podaci iz hmtl forme 
	if(isset($_POST['korisnickoIme'])){
	//spremanje u varijable
		$uname = $_POST['korisnickoIme'];
		$pass = $_POST['lozinka'];
		
		//upit u kojem povlačimo iz baze korisničko ime i šifru gosta(kluba)
		$result = mysqli_query($conn,"select * from korisnik where korisnicko_ime='$uname' and sifra = '$pass' ") or die("Failed to query database.".mysqli_error());
		$row = mysqli_fetch_array($result);
		
		//dohvacam informacije o ulogama
		$query = "SELECT * FROM uloga u INNER JOIN guest g ON u.id_uloga = g.id_uloga ";
		$res = mysqli_query($conn, $query);
		$r = mysqli_fetch_array($res);
		
		//upit u kojem povlačimo iz baze korisničko ime i šifru admina
		$result2 = mysqli_query($conn,"select * from korisnik where korisnicko_ime='$uname' and sifra = '$pass' ") or die("Failed to query database.".mysqli_error());
		$row2 = mysqli_fetch_array($result2);
		
		//dohvacam informacije o ulogama
		$qry = "SELECT * FROM uloga u INNER JOIN admin a ON u.id_uloga = a.id_uloga ";
		$rslt = mysqli_query($conn, $qry);
		$rs = mysqli_fetch_array($rslt);
		
		//preostala uloga za provjeru
		$get = "SELECT * FROM uloga";
		$g = mysqli_query($conn, $get);
		$sup = mysqli_fetch_array($g);
		
		//provjera točnosti podataka
		if($row['korisnicko_ime'] == $uname && $row['sifra'] == $pass){
		    if($r['naziv'] == 'korisnik'){
			header("refresh:1;url=welcome.html");
			exit();
		    }
		} else if($row2['korisnicko_ime'] == $uname && $row2['sifra'] == $pass){
		    if($rs['naziv'] == 'r'){
			header("refresh:1;url=../admin.html");
			exit();
		    }
		}
	}
	
	$conn->close();
	*/
?>
