<?php
$korisnickoIme = filter_input(INPUT_POST, 'korisnickoIme');
 $lozinka = filter_input(INPUT_POST, 'lozinka');
 if (!empty($korisnickoIme)){
if (!empty($lozinka)){
$host = "localhost";
$dbusername = "id7774308_users_login";
$dbpassword = "k7i7k9o7";
$dbname = "id7774308_korisnici_prijava";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO korisnik (korisnickoIme, lozinka)
  values ('$korisnickoIme','$lozinka')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Password should not be empty";
  die();
}
 }
 else{
  echo "Username should not be empty";
  die();
 }
 ?>