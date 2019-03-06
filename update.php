<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>VolleyStatsLive | Ažuriranje</title>
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
                        <li><a href="stats.php">Statistika</a></li>
                        <li><a href="unos.php">Unos</a></li>
						<li><a href="search.php">Pretraživanje</a></li>
						<li class="current"><a href="update.php">Ažuriranje</a></li>
                        <li><a href="delete.php">Brisanje</a></li>
                    </ul>
                </nav>
             </div>
        </header>


<?php

try {
  require "config.php";
  require "common.php";

  $connection = new PDO($dsn, $username, $password, $options);

  $sql = "SELECT * FROM korisnik";

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
		
		
		$korisnickoIme=mysqli_real_escape_string($con,$_POST['korisnickoIme']); 
		$korisnik_uloga=mysqli_real_escape_string($con,$_POST['korisnik_uloga']);
		$lozinka=mysqli_real_escape_string($con,$_POST['lozinka']);
		$sql="UPDATE FROM korisnik WHERE korisnickoIme='$korisnickoIme'";
		
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
		$count=mysqli_num_rows($result);
		
		
	}


?>

        
<h2>Ažuriranje korisnika</h2>

<table>
  <thead>
    <tr>
      <th>Korisnik</th>
	  <th>Lozinka</th>
      <th>Uloga</th>
    </tr>
  </thead>
    <tbody>
    <?php foreach ($result as $row) : ?>
      <tr>
        <td><?php echo escape($row["korisnickoIme"]); ?></td>
		<td><?php echo escape($row["lozinka"]); ?></td>
        <td><?php echo escape($row["korisnik_uloga"]); ?></td>
       <td><a href="update-single.php?korisnickoIme=<?php echo escape($row["korisnickoIme"]); ?>">Edit</a></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>