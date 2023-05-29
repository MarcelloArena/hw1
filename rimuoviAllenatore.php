<?php

session_start();
$utente = $_SESSION['username'];
$allenatore = $_GET['allenatore'];


$conn = mysqli_connect("localhost","root","","Sito");
$query = "DELETE FROM AllenatorePreferito WHERE Nome = '".$allenatore."' AND Utente = '".$utente."' ";

echo $query;
mysqli_query($conn,$query);
mysqli_close($conn);



?>