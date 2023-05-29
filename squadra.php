


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
	<title>Ricerca squadre</title>
	<link rel="stylesheet" type="text/css" href="squadra.css">
	<script src="squadra.js" defer="true"></script> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<header>
		<h1>Ricerca squadre</h1>
	</header>
<body>
	
	<nav>
		<a href="homepage.php">Home</a>
		<a href="calciatore.php">Calciatori</a>
		<a href="allenatore.php">Allenatori</a>


		<div class="user-section">
  
    <?php
          session_start();
          if(isset($_SESSION['username']))
          {
             echo '<div class="username">Username: ';
             echo $_SESSION['username'];
             echo '</div>';
             echo '<a href="preferiti.php" class="preferiti-link">Preferiti</a>';
             echo '<div class="profile-wrapper">
             <a href="profilo.php">
               <img src="utente.png" class="profile-image" alt="Immagine profilo">
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
	<section>
		<h2>Inserisci campionato</h2>
		<form id="ricerca" action="#" method="post" name="cerca">
			<input type="text" placeholder="(es. La Liga, Serie A)" id="campionato" name="campionato">
			<button type="submit" name="cerca" id="butt">Cerca</button>
		</form>
	</section>
		<div id="risultato">
		

		</div>


</body>
</html>
