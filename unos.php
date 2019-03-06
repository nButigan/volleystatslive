<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>VolleyStatsLive | Unos</title>
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
                        <li class="current"><a href="unos.php">Unos</a></li>
						<li><a href="search.php">Pretraživanje</a></li>
						<li><a href="update.php">Ažuriranje</a></li>
                        <li><a href="delete.php">Brisanje</a></li>
                    </ul>
                </nav>
             </div>
        </header>
		
<section id="unos">          
    			<div class="unos-wrap">
    				<div class="unos-html">						
    					<div class="unos-htm">
                          <form action="unos1.php" method="POST">				
    						<div class="group">					
    							<label for="idu" class="label">ID utakmice</label>					
    							<input id="idu" name="id_utak" type="text" class="input">				
    						</div>				
    						<div class="group">					
    							<label for="domacin" class="label">Domaćin</label>				
    								<input id="domacin" type="text" name="domacin" class="input">			
    									</div>							
    										<div class="group">					
    											<label for="gost" class="label">Gost</label>				
    													<input id="gost" name="gost" type="text" class="input">				
    													</div>
											<div class="group">					
    							                <label for="kolo" class="label">Kolo</label>				
    								                     <input id="kolo" type="text" name="kolo" class="input">			
    									                 </div>
											<div class="group">					
    											<label for="datum" class="label">Datum</label>				
    													<input id="datum" name="datum" type="text" class="input">				
    													</div>	
											<div class="group">					
    											<label for="rezd" class="label">Domaćin rezultat</label>				
    													<input id="rezd" name="rez_dom" type="text" class="input">				
    													</div>
											<div class="group">					
    											<label for="rezg" class="label">Gost rezultat</label>				
    													<input id="rezg" name="rez_gost" type="text" class="input">				
    													</div>				
											<div class="group">					
    											<label for="set1d" class="label">Set 1 domaćin</label>				
    													<input id="set1d" name="set1_dom" type="text" class="input">				
    													</div>	
											<div class="group">					
    											<label for="set2d" class="label">Set 2 domaćin</label>				
    													<input id="set2d" name="set2_dom" type="text" class="input">				
    													</div>		
											<div class="group">					
    											<label for="set3d" class="label">Set 3 domaćin</label>				
    													<input id="set3d" name="set3_dom" type="text" class="input">				
    													</div>
											<div class="group">					
    											<label for="set4d" class="label">Set 4 domaćin</label>				
    													<input id="set4d" name="set4_dom" type="text" class="input">				
    													</div>	
											<div class="group">					
    											<label for="set5d" class="label">Set 5 domaćin</label>				
    													<input id="set5d" name="set5_dom" type="text" class="input">				
    													</div>	
											<div class="group">					
    											<label for="set1g" class="label">Set 1 gost</label>				
    													<input id="set1g" name="set1_gost" type="text" class="input">				
    													</div>	
											<div class="group">					
    											<label for="set2g" class="label">Set 2 gost</label>				
    													<input id="set2g" name="set2_gost" type="text" class="input">				
    													</div>		
											<div class="group">					
    											<label for="set3g" class="label">Set 3 gost</label>				
    													<input id="set3g" name="set3_gost" type="text" class="input">				
    													</div>		
											<div class="group">					
    											<label for="set4g" class="label">Set 4 gost</label>				
    													<input id="set4g" name="set4_gost" type="text" class="input">				
    													</div>		
											<div class="group">					
    											<label for="set5g" class="label">Set 5 gost</label>				
    													<input id="set5g" name="set5_gost" type="text" class="input">				
    													</div>		
											<div class="group">					
    											<label for="boddom" class="label">Bodovi domaćin</label>				
    													<input id="boddom" name="bod_dom" type="text" class="input">				
    													</div>		
											<div class="group">					
    											<label for="bodgost" class="label">	Bodovi gost</label>				
    													<input id="bodgost" name="bod_gost" type="text" class="input">				
    													</div>				
    													<div class="group">					
    														<input type="submit" class="button" value="Unos">			
    															</div>
                                                                </form>				
    															<div class="hr">
    																
    															</div>						
                                                         </div>		
                                                     </div>
                                                   </div>
                                                 </div>        
                                               </section>   
                                             <footer>            <p>VolleyStatsLive, Copyright &copy; 2018</p>        </footer>   
                                           </body>
                                         </html>
	