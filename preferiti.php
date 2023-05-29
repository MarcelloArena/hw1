<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
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
  <title>Contenuti Preferiti</title>
  <link rel="stylesheet" type="text/css" href="preferiti.css">
  <script src="preferiti.js" defer="true"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
  <header>
    <h1>I Miei Contenuti Preferiti</h1>
  </header>

  <nav>
      <a href="homepage.php">Home</a>
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
            echo "<input type='submit' class='btn' name='logout' value='Logout'>";
        }
        else
        {
            echo "<input type='submit' class='btn' name='login' value='Login'>";
        }
      
      ?>
      </form>



    </nav> 





  <div class="preferiti">
    <h2>Allenatori Preferiti</h2>
        
  </div>



  <div class="preferiti">
  <h2>Squadre Preferite</h2>



  </div>


</body>
</html>


