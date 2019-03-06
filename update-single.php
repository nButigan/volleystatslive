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

                        

						<li><a href="search.php">Pretraživanje</a></li>

						<li class="current"><a href="update.php">Ažuriranje</a></li>

                        <li><a href="delete.php">Brisanje</a></li>

                    </ul>

                </nav>

             </div>

        </header>



<?php



require "config.php";

require "common.php";

if (isset($_POST['submit'])) {

  try {

    $connection = new PDO($dsn, $username, $password, $options);

    $user =[

      "korisnickoIme" => $_POST['korisnickoIme'],

      "korisnik_uloga" => $_POST['korisnik_uloga'],

	  "lozinka" => $_POST['lozinka']

    ];



    $sql = "UPDATE korisnik 

            SET korisnickoIme = :korisnickoIme, 

              korisnik_uloga = :korisnik_uloga,  

			  lozinka = :lozinka

            WHERE korisnickoIme = :korisnickoIme";

  

  $statement = $connection->prepare($sql);

  $statement->execute($user);
  //$result = $statement->fetchAll();

  } catch(PDOException $error) {

      echo $sql . "<br>" . $error->getMessage();

  }

}

  

if (isset($_GET['korisnickoIme'])) {

  try {

    $connection = new PDO($dsn, $username, $password, $options);

    $korisnickoIme = $_GET['korisnickoIme'];

    $sql = "SELECT * FROM korisnik WHERE korisnickoIme = :korisnickoIme";

    $statement = $connection->prepare($sql);

    $statement->bindValue(':korisnickoIme', $korisnickoIme);

    $statement->execute();

    

    $user = $statement->fetch(PDO::FETCH_ASSOC);

  } catch(PDOException $error) {

      echo $sql . "<br>" . $error->getMessage();

  }

  

} 

else {

    echo "Greška!";

    exit;

}

?>



<?php if (isset($_POST['submit']) && $statement) : ?>

	<blockquote><?php echo escape($_POST['korisnickoIme']); ?> uspješno ažurirano</blockquote>

<?php endif; ?>



<h2>Ažurirajte korisnika</h2>



<form method="post">

    <?php foreach ($user as $key => $value) : ?>

      <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>

	    <input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo escape($value); ?>" <?php echo ($key === 'korisnickoIme' ? 'readonly' : null); ?>>

    <?php endforeach; ?> 

    <input type="submit" name="submit" value="Submit">

</form>

</body>

</html>