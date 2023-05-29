
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
	}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Trova i topscorer di ogni stagione</title>
	<link rel="stylesheet" type="text/css" href="calciatore.css">
	<script src="calciatori.js" defer="true"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<header>
		<h1>Trova i topscorer di ogni stagione</h1>
	</header>
<body>
	
	<nav>
		<a href="homepage.php">Home</a>
		<a href="allenatore.php">Allenatori</a>
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

		

        <div class="container">
  <div class="section">
  <h2>I due extraterrestri</h2>
    <p>Nell'ultimo decennio si sono contesi i premi individuali e di squadra più importanti al mondo, parliamo di due alieni che hanno segnato una quantità assurda di gol</p>
    <img src="messi.jpeg" alt="Image 1">
  
  </div>
  <div class="section">
  <h2>Bomber della Serie A</h2>
    <p>Alla sinistra colui che è riuscito a eguagliare il record di Nordahl, 36 gol in una sola stagione di Serie A, al centro un altro artista del gol, mentre sulla destra possiamo apprezzare il D10S del calcio</p>
    <img src="maradona.avif " alt="Image 2">
   
  </div>
</div>




<article>
        <div class="dropdown">
  <button class="dropdown-btn">Seleziona stagione <i class="fa fa-caret-down"></i></button>
  <div class="dropdown-content">
    <a href="#">2022</a>
    <a href="#">2021</a>
    <a href="#">2020</a>
    <a href="#">2019</a>
    <a href="#">2018</a>
    <a href="#">2017</a>
    <a href="#">2016</a>
  </div>
</div>
</article>



  <div id="risultato">


		</div> 


	<!--<footer>
		<p>Tutti i diritti riservati.</p>
	</footer> -->
  
</body>
</html>
