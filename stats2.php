<!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>VolleyStatsLive | Statistika</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><span class="highlight">Volley</span>Stats<span class="highlight">Live</span></h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Odjava</a></li>
                        <li class="current"><a href="stats2.php">Statistika</a></li>
                        <li><a href="unos2.php">Unos</a></li>
                    </ul>
                </nav>
             </div>
        </header>


<?php

try {
  require "config.php";
  require "common.php";

  $connection = new PDO($dsn, $username, $password, $options);

  $sql = "SELECT * FROM utakmice";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>
      
<?php
 
if (isset($_POST['submit'])) {
		
		require "common.php";
		require "phpconnect3.php";
		
		
		$id_utak=mysqli_real_escape_string($con,$_POST['id_utak']); 
		$domacin=mysqli_real_escape_string($con,$_POST['domacin']);
		$gost=mysqli_real_escape_string($con,$_POST['gost']);
		$kolo=mysqli_real_escape_string($con,$_POST['kolo']);
		$datum=mysqli_real_escape_string($con,$_POST['datum']);
		$rez_dom=mysqli_real_escape_string($con,$_POST['rez_dom']);
		$rez_gost=mysqli_real_escape_string($con,$_POST['rez_gost']);
		$set1_dom=mysqli_real_escape_string($con,$_POST['set1_dom']);
		$set2_dom=mysqli_real_escape_string($con,$_POST['set2_dom']);
		$set3_dom=mysqli_real_escape_string($con,$_POST['set3_dom']);
		$set4_dom=mysqli_real_escape_string($con,$_POST['set4_dom']);
		$set5_dom=mysqli_real_escape_string($con,$_POST['set5_dom']);
		$set1_gost=mysqli_real_escape_string($con,$_POST['set1_gost']);
		$set2_gost=mysqli_real_escape_string($con,$_POST['set2_gost']);
		$set3_gost=mysqli_real_escape_string($con,$_POST['set3_gost']);
		$set4_gost=mysqli_real_escape_string($con,$_POST['set4_gost']);
		$set5_gost=mysqli_real_escape_string($con,$_POST['set5_gost']);
		$bod_dom=mysqli_real_escape_string($con,$_POST['bod_dom']);
		$bod_gost=mysqli_real_escape_string($con,$_POST['bod_gost']);
		
		$sql="UPDATE FROM utakmice WHERE id_utak='$id_utak'";
		
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
		$count=mysqli_num_rows($result);
		
		
	}


?>

        
<h2>Rezultati</h2>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Kolo </th>
	  <th scope="col" >Datum</th>
      <th scope="col">Domaćin</th>
	  <th scope="col">Gost</th>
	  <th scope="col">Rezultat domaćin</th>
	  <th scope="col">Rezultat gost</th>
	  <th scope="col">1.set domaćin</th>
	  <th scope="col">2.set domaćin</th>
      <th scope="col">3.set domaćin</th>
	  <th scope="col">4.set domaćin</th>
	  <th scope="col">5.set domaćin</th>
      <th scope="col">1.set gost</th>
	  <th scope="col">2.set gost</th>
	  <th scope="col">3.set gost</th>
      <th scope="col">4.set gost</th>
	  <th scope="col">5.set gost</th>
	  <th scope="col">Bodovi domaćin</th>
	  <th scope="col">Bodovi gost</th>
    </tr>
  </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
      <tr>
        <td><?php echo escape($row["kolo"]); ?></td>
		<td><?php echo escape($row["datum"]); ?></td>
        <td><?php echo escape($row["domacin"]); ?></td>
		<td><?php echo escape($row["gost"]); ?></td>
		<td><?php echo escape($row["rez_dom"]); ?></td>
		<td><?php echo escape($row["rez_gost"]); ?></td>
		<td><?php echo escape($row["set1_dom"]); ?></td>
		<td><?php echo escape($row["set2_dom"]); ?></td>
        <td><?php echo escape($row["set3_dom"]); ?></td>
		<td><?php echo escape($row["set4_dom"]); ?></td>
		<td><?php echo escape($row["set5_dom"]); ?></td>
        <td><?php echo escape($row["set1_gost"]); ?></td>
		<td><?php echo escape($row["set2_gost"]); ?></td>
		<td><?php echo escape($row["set3_gost"]); ?></td>
        <td><?php echo escape($row["set4_gost"]); ?></td>
		<td><?php echo escape($row["set5_gost"]); ?></td>
		<td><?php echo escape($row["bod_dom"]); ?></td>
		<td><?php echo escape($row["bod_gost"]); ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
