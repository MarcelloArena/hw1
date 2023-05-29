<?php
    session_start();
    $utente = $_SESSION['username'];
    $squadra = $_GET['squadra'];
    
    
    $conn = mysqli_connect("localhost","root","","Sito");
    $query = "DELETE FROM SquadraPreferita WHERE Nome = '".$squadra."' AND Utente = '".$utente."' ";
    
    mysqli_query($conn,$query);
    mysqli_close($conn);


?>