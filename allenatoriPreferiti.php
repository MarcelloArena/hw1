<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }

    



    $user = $_SESSION['username'];
    $conn = mysqli_connect("localhost","root","","Sito");
    $query = "SELECT Nome, Sorgente FROM AllenatorePreferito WHERE Utente='".$user."' ";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res))
    {
      $dati[] = $row;
    }
    
    mysqli_free_result($res);
    mysqli_close($conn);
    header('Content-Type: application/json');
    $jsonString = json_encode($dati);
    echo $jsonString;
    

?>
