<?php

session_start();
$user = $_SESSION['username'];
$nome = $_POST['nome'];


$conn = mysqli_connect("localhost","root","","Sito");

if(isset($_POST['stadio']))
{

    $verifica = "SELECT * FROM SquadraPreferita WHERE Utente = '".$user."' AND Nome = '".$nome."' ";
    $res = mysqli_query($conn,$verifica);
    if(mysqli_num_rows($res)>0)
    {
        header('Content-Type: application/json');
        http_response_code(400);

    }

    else
    {
        $logo = $_POST['logo'];
        $stadio = $_POST['stadio'];
        $fotoStadio = $_POST['fotoStadio'];

        $query = "INSERT INTO SquadraPreferita (Nome, Logo, Stadio, FotoStadio, Utente) VALUES(\"$nome\", \"$logo\", \"$stadio\", \"$fotoStadio\", \"$user\")";
        $res = mysqli_query($conn,$query);


    }
}

else
{

    $src = $_POST['src'];


    $query_verifica = "SELECT * FROM AllenatorePreferito WHERE Utente = '".$user."' AND Sorgente = '".$src."'";

    $ver = mysqli_query($conn,$query_verifica);
    if(mysqli_num_rows($ver)>0)
    {
        header('Content-Type: application/json');
        http_response_code(400);

    }
    else
    {
        $query = "INSERT INTO AllenatorePreferito (Nome, Sorgente, Utente) VALUES (\"$nome\", \"$src\", \"$user\")";
        $res = mysqli_query($conn,$query);
    }

}

        mysqli_close($conn);





?>