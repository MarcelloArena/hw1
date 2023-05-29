



<?php
if(isset($_POST['logout']))
{

    session_start();
    session_destroy();
    header("Location: homepage.php");
    exit;
}

if(isset($_POST['login']))
{
    header("Location: login.php");
}

?>




<!DOCTYPE html>
<html>
  <head>
    <title>Soccer For You</title>
    <link rel="stylesheet" href="homepage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <header>
      <h1>SOCCER FOR YOU</h1>
    </header>
    <nav>
      <a href="allenatore.php">Allenatori</a>
      <a href="squadra.php">Squadre</a>
      <a href="calciatore.php">Calciatori</a>

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
       session_start();

        if(isset($_SESSION['username']))
        {
           // echo "<form method='POST' action='login.php'></form>";
            echo "<input type='submit' class='btn' name='logout' value='Logout'>";
        }
        else
        {
            echo "<input type='submit' class='btn' name='login' value='Login'>";
        }
      
      ?>
      </form>



      


    </nav> 


  

    </header>



    <section class="hero">
  <div class="hero-content">
    <h1>Il mondo del calcio a portata di click</h1>
    <p>Scopri i goleador dei principali campionati europei, le squadre allenate dai tuoi allenatori preferiti, e tanto altro ancora. Entra a far parte della community del Soccer For You.</p>
  </div>
</section>



<section class="content-section">
  <div class="content-wrapper">
    <h2>Allenatori</h2>
    <p>L’allenatore di calcio, una figura importantissima, in quanto costituisce l’esempio per i giocatori.

Il mister non è, infatti, solo colui che insegna tecniche e strategie calcistiche, egli deve essere consapevole che c’è da imparare da ogni persona e da ogni situazione.
Cerca i tuoi allenatori preferiti!
</p>
  </div>
</section>

<section class="content-section">
  <div class="content-wrapper">
    <h2>Calciatori</h2>
    <p>I calciatori sono l'anima di questo sport, sin dai primi anni in cui è nato il calcio ci sono sempre stati grandi campioni all'interno di questo sport che si sono contraddistinti per capacità tecniche ed anche umane, oggi per esempio possiamo ammirare grandi giocatori come Mbappè, Vinicius jr, Benzema.
      Qui potrai trovare le statistiche sui bomber dei principali campionati europei!
    </p>
  </div>
</section>









    <main>
      <div class="section">
      <a href="allenatore.php">
        <img src="allenatori.jpeg" alt="Allenatori">
        <h2>Allenatori</h2>
        <p>Cerca e scopri gli allenatori di calcio di tutto il mondo.</p>
        </a>
      </div>
      <div class="section">
      <a href="squadra.php">

        <img src="campionati.webp" alt="Squadra">
        <h2>Squadre</h2>
        <p>Scopri le squadre dei più grandi campionati al mondo</p>
    </a>
      </div>
      <div class="section">
      <a href="calciatore.php">

        <img src="calciatori.jpeg" alt="Calciatori">
        <h2>Calciatori</h2>
        <p>Cerca i cannonieri dei principali campionati europei e le loro statistiche.</p>
    </a>
      </div>
    </main>

    <footer>
		<p>
			Copyright 
			&copy; 
			<a href="https://www.soccerforyou.com">www.soccerforyou.com</a> 
			Tutti i diritti riservati.
		</p>
	</footer>
  </body>
</html>


