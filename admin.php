<?php
session_start();
?>


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
                        <li class="current"><a href="index.html">Naslovnica</a></li>
                        <li><a href="stats.html">Statistika</a></li>
                        <li><a href="livestats.html">Uživo</a></li>
                        <li><a href="messages.html">Poruke</a></li>
						<li><a href="obavijsti.html">Obavijesti</a></li>
                        <li><a href="vizija.html">Vizija</a></li>
                    </ul>
                </nav>
             </div>
        </header>
        <?php if(isset($_SESSION['poruka_prijava']) && !empty($_SESSION['poruka_prijava'])):
		?><?php echo $_SESSION['poruka_prijava']; ?></h1>
        <?php $_SESSION['poruka_prijava'] = null; ?>
        <?php endif; ?>
		<section id="showcase">
            <div class="container">
                <h1>Administrator</h1>
            </div>
        </section>
        
        
        
        
        
        <footer>
            <a href="https://github.com/nButigan/volleystatslive"><img src="git.png" alt="git" style="float:left;width:69px;height:69px;border:10px;"></a>
            <a href="https://drive.google.com/drive/folders/1qQt1093EI5e-4UI0gDlUgbsVS-ZenMNl"><img src="laravel.png" alt="laravel" style="float:left;width:69px;height:69px;border:10px;"></a>
            <p>VolleyStatsLive, Copyright &copy; 2018</p>
        </footer>
    </body>
</html>