<?php

if(isset($_POST['logout']))
{

    session_start();
    session_destroy();
    header("Location: homepage.php");
    exit;
}



?>





<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="profilo.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<header>
    <h1>Il mio profilo</h1>
  </header>

<nav>
      <a href="homepage.php">Home</a>
      <a href="allenatore.php">Allenatori</a>
      <a href="squadra.php">Squadre</a>
      <a href="calciatore.php">Calciatori</a>
      <a href="preferiti.php">Preferiti</a>



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











  <div class="profile">
    <img class="profile-image" src="utente.png" alt="Profile Image">
    <div class="profile-info">

    <?php
     /* <p><strong>Email:</strong> your_email@example.com</p>
      <p><strong>Username:</strong> your_username</p>
      <p><strong>Telefono:</strong> +1 123-456-7890</p>*/
        //echo $_SESSION['username'];
        $query = "SELECT * FROM Utente WHERE username='".$_SESSION['username']."' ";
        $conn = mysqli_connect("localhost","root","","Sito");
        $res = mysqli_query($conn,$query);
       // echo $query;
        $row = mysqli_fetch_assoc($res);
        //echo count($row);
        $user = $_SESSION['username'];
        $email = $row['email'];
        $telefono = $row['telefono'];

        echo "<p><strong>Email: </strong>" . $email . "</p>" . "<br>";
        echo "<p><strong>Username: </strong>" . $user . "</p>" . "<br>";
        echo "<p><strong>Telefono: </strong>" . $telefono . "</p>" . "<br>";

      ?>
    </div>
  </div>
</body>
</html>
