<?php

	session_start();

	if(!isset($_SESSION['username']))
	{
		header("Location: login.php");
	}

	if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location: homepage.php");
		exit;
	}



?>



<!DOCTYPE html>
<html>
<head>
	<title>Ricerca allenatori</title>
	<link rel="stylesheet" type="text/css" href="allenatore.css">
	<script src="allenatore.js" defer="true"></script> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<header>
		<h1>Ricerca allenatori</h1>
	</header>
<body>
	
	<nav>
		<a href="homepage.php">Home</a>
		<a href="calciatore.php">Calciatori</a>
		<a href="squadra.php">Squadre</a>

		<div class="sezioneUtente">
  
    <?php
          session_start();
          if(isset($_SESSION['username']))
          {
             echo '<div class="username">Username: ';
             echo $_SESSION['username'];
             echo '</div>';
             echo '<a href="preferiti.php" class="preferiti-link">Preferiti</a>';
			 echo '<div class="contenitore-profilo">
             <a href="profilo.php">
               <img src="utente.png" class="immagineProfilo" alt="Immagine profilo">
             </a>
           </div>
           ';
             echo '</div>';
          }
    ?>
</div> 



		<form method="POST">
      
	  <?php 
            echo "<input type='submit' class='btn' name='logout' value='Logout'>";     
      ?>

      </form>
	</nav>

	<div class="d1">
	<div class="container">
		<h1 class="titolo">Allenatori rivoluzionari</h1>
		<p class="text">Johan Cruyff è considerato uno dei giocatori più influenti nella storia del calcio. Cruyff ha lasciato un'impronta indelebile nel mondo del calcio grazie al suo stile di gioco rivoluzionario e alla sua visione innovativa del calcio totale.
	
		</p>
		<img class="image" src="cruyff.jpg" alt="Immagine del paragrafo">
	</div>
</div>








	<section>
		<h2>Cerca allenatore</h2>
		<form id="ricerca" action="#" method="post">
			<input type="text" placeholder="Inserisci il nome dell'allenatore" name="allenatore" id="allenatore">
			<button type="submit" name="cerca">Cerca</button>
		</form>
	</section>


	




		<div id="risultato">


		</div>

</body>
</html>
