<?php
session_start();
?>
<!DOCTYPE html>
<html>    
  <head>        
  	<meta charset="utf-8">        
  	  <meta name="viewport" content="width=device-width">        
  	    <title>VolleyStatsLive | Prijava</title>        
  	      <link rel="stylesheet" href="./loginstyle.css">    
  </head>    
  <body>       
   <header>           
    <div class="container">                
    	<div id="branding">                    
    		<h1><span class="highlight">Volley</span>Stats<span class="highlight">Live</span></h1>             
    		   </div>            
    		    <nav>                   
    		     <ul>                        
    		     	<li><a href="index.html">Naslovnica</a></li>                    
    		     	<li><a href="stats.html">Statistika</a></li>                      
    		     	<li><a href="livestats.html">Uživo</a></li>                      
    		     	<li class="current"><a href="prijava1.php">Prijava</a></li>         
    		     	<li><a href="vizija.html">Vizija</a></li>                    
    		     </ul>     
    		     </nav>             
    		 </div>        
    		</header>       
    		<section id="prijava">          
    			<div class="login-wrap">
    				<div class="login-html">		
    				<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
    				<label for="tab-1" class="tab">Prijava</label>		
    				<input id="tab-2" type="radio" name="tab" class="sign-up">
    				<label for="tab-2" class="tab">Registracija</label>		
    				<div class="login-form">			
    					<div class="sign-in-htm">
                        <form action="phpconnect.php" method ="POST">				
    					<div class="group">					
    						<label for="user" class="label">Korisničko ime</label>					
    						<input id="user" type="text" name="korisnickoIme" class="input">				</div>				
    						<div class="group">					
    							<label for="pass" class="label">Lozinka</label>					
    							<input id="pass" type="password" name="lozinka" class="input" data-type="password">				
    						</div>				
    						<div class="group">					
    							<input id="check" type="checkbox" class="check" checked>					
    							<label for="check"><span class="icon"></span>Ostanite prijavljeni</label>				
    						</div>				
    						<div class="group">					
    							<input type="submit" class="button" value="Prijava">				
    						</div>
                            </form>				
    						<div class="hr"></div>	
    						<div class="foot-lnk">					
    							<a href="#forgot">Zaboravljena lozinka ?</a>				
    						</div>			
    					</div>			
    					<div class="sign-up-htm">
                          <form action="registration.php" method="POST">				
    						<div class="group">					
    							<label for="user" class="label">Korisničko ime</label>					
    							<input id="user" name="korisnickoIme" type="text" class="input">				
    						</div>				
    						<div class="group">					
    							<label for="pass" class="label">Lozinka</label>				
    								<input id="pass" type="password" name="lozinka" class="input" data-type="password">			
    									</div>				
    									<!--<div class="group">					
    										<label for="pass" class="label">Ponovite lozinku</label>				
    											<input id="pass" type="password" class="input" data-type="password">			
    												</div> -->				
    												<!-- <div class="group">					
    													<label for="pass" class="label">Email Adresa</label>				
    														<input id="pass" type="text" class="input">				
    													</div> -->				
    													<div class="group">					
    														<input type="submit" class="button" value="Registracija">			
    															</div>
                                                                </form>				
    															<div class="hr">
    																
    															</div>				
    															<div class="foot-lnk">					
    																<label for="tab-1">Imate račun?</a>	
                                                             </div>			
                                                         </div>		
                                                     </div>
                                                   </div>
                                                 </div>        
                                               </section>   
                                             <footer>            <p>VolleyStatsLive, Copyright &copy; 2018</p>        </footer>   
                                           </body>
                                         </html>
