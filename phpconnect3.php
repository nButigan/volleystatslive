<?php
session_start();
require 'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$korisnickoIme=mysqli_real_escape_string($con,$_POST['korisnickoIme']); 
$lozinka1=mysqli_real_escape_string($con,$_POST['lozinka']); 
$lozinka=MD5($mypassword1);
 
$sql="SELECT * FROM korisnik WHERE korisnickoIme='$korisnickoIme' and lozinka='$lozinka1'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$_SESSION['userid']=$row['korisnik_uloga'];
//$_SESSION['role']=$row['role'];
$count=mysqli_num_rows($result);
if($count==1) {
			if ($row['korisnik_uloga']=="1")
			{ 
  
                               header('Location: admin.php');
                             
			}
			else if ($row['korisnik_uloga']=="2")
			{ 
                               $_SESSION['role']=$row['role']; 
                               header('Location: admin.php');
                             
 
			}
}
else {
	header('Location: prijava1.php');;
	}
 }

?>