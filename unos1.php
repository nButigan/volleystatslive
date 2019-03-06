<?php
$id_utak = filter_input(INPUT_POST, 'id_utak');
 $domacin = filter_input(INPUT_POST, 'domacin');
 $gost = filter_input(INPUT_POST, 'gost');
 $kolo = filter_input(INPUT_POST, 'kolo');
 $datum = filter_input(INPUT_POST, 'datum');
 $rez_dom = filter_input(INPUT_POST, 'rez_dom');
 $rez_gost = filter_input(INPUT_POST, 'rez_gost');
 $set1_dom = filter_input(INPUT_POST, 'set1_dom');
 $set2_dom = filter_input(INPUT_POST, 'set2_dom');
 $set3_dom = filter_input(INPUT_POST, 'set3_dom');
 $set4_dom = filter_input(INPUT_POST, 'set4_dom');
 $set5_dom = filter_input(INPUT_POST, 'set5_dom');
 $set1_gost = filter_input(INPUT_POST, 'set1_gost');
 $set2_gost = filter_input(INPUT_POST, 'set2_gost');
 $set3_gost = filter_input(INPUT_POST, 'set3_gost');
 $set4_gost = filter_input(INPUT_POST, 'set4_gost');
 $set5_gost = filter_input(INPUT_POST, 'set5_gost');
 $bod_dom = filter_input(INPUT_POST, 'bod_dom');
 $bod_gost = filter_input(INPUT_POST, 'bod_gost');
 
 if (!empty($id_utak)){
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
  $sql = "INSERT INTO utakmice (id_utak,domacin,gost,kolo,datum,rez_dom,rez_gost,set1_dom,set2_dom,set3_dom,set4_dom,set5_dom,set1_gost,set2_gost,set3_gost,set4_gost,set5_gost,bod_dom,bod_gost)
  values ('$id_utak','$domacin','$gost','$kolo','$datum','$rez_dom','$rez_gost','$set1_dom','$set2_dom','$set3_dom','$set4_dom','$set5_dom','$set1_gost','$set2_gost','$set3_gost','$set4_gost','$set5_gost','$bod_dom','$bod_gost')";
  if ($conn->query($sql)){
    header('Location: stats.php');
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
 }
 ?>