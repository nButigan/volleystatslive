<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width">

        <title>VolleyStatsLive | Administrator</title>

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

                        <li><a href="update.php">Ažuriranje</a></li>

						<li class="current"><a href="delete.php">Brisanje</a></li>

                    </ul>

                </nav>

             </div>

        </header>

		

<?php







require "config.php";

require "common.php";



if (isset($_GET["korisnickoIme"])) {

  try {

    $connection = new PDO($dsn, $username, $password, $options);

  

    $korisnickoIme = $_GET["korisnickoIme"];



    $sql = "DELETE FROM korisnik WHERE korisnickoIme = :korisnickoIme";



    $statement = $connection->prepare($sql);

    $statement->bindValue(':korisnickoIme', $korisnickoIme);

    $statement->execute();



    $success = "Korisnik je izbrisan";

  } catch(PDOException $error) {

    echo $sql . "<br>" . $error->getMessage();

  }

}



try {

  $connection = new PDO($dsn, $username, $password, $options);



  $sql = "SELECT * FROM korisnik";



  $statement = $connection->prepare($sql);

  $statement->execute();



  $result = $statement->fetchAll();

} catch(PDOException $error) {

  echo $sql . "<br>" . $error->getMessage();

}

?>

        

<h2>Izbrišite korisnika</h2>



<?php if ($success) echo $success; ?>



<table>

  <thead>

    <tr>

      <th>Korisničko ime</th>

      <th>Uloga</th>

      <th>Briši</th>

    </tr>

  </thead>

  <tbody>

  <?php foreach ($result as $row) : ?>

    <tr>

      <td><?php echo escape($row["korisnickoIme"]); ?></td>

      <td><?php echo escape($row["korisnik_uloga"]); ?></td>

      <td><a href="delete.php?korisnickoIme=<?php echo escape($row["korisnickoIme"]); ?>">Briši</a></td>

    </tr>

  <?php endforeach; ?>

  </tbody>

</table>

</body>

</html>