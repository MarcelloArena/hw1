
<?php

session_start();

if(isset($_SESSION['username']))
{
    header("Location: homepage.php");
}

if(strlen($_POST['username'])>0 && preg_match('/[A-Z]/', $_POST['password']) && preg_match('/\d/', $_POST['password']) && strlen($_POST['password'])>=8 && $_POST['confirmPassword']===$_POST['password'] && strlen($_POST['email'])>0 && is_numeric($_POST['telefono']))
{

	$conn = mysqli_connect("localhost","root","","Sito");
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$telefono = mysqli_real_escape_string($conn,$_POST['telefono']);




	$query_user= "SELECT * FROM Utente WHERE username = '".$username."'";
	$query_email = "SELECT * FROM Utente WHERE email = '".$email."'";

	$res = mysqli_query($conn,$query_user);
	$res2 = mysqli_query($conn,$query_email);

	if(mysqli_num_rows($res)>0 || mysqli_num_rows($res2)>0)
	{
		$errore=true;	
	}


	else
	{
		$query = "INSERT INTO Utente (username, email, telefono, password) VALUES ('".$username."', '".$email."', '".$telefono."', '".$password."' )";
		$res = mysqli_query($conn,$query);

	if($res)
	{
		echo "Inserito";
		header("Location: login.php");

	}
	}
	mysqli_free_result($res);
    mysqli_close($conn);

}




?>












<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registrazione</title>
	<script src="registrazione.js" defer="true"></script> 
    <link rel="stylesheet" href="registrazione.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
	<form method='post' name='login'>
		<h2>Registrazione</h2>
		<div>
			
		</div>
		<?php 
			if(isset($errore))
            {
                echo "<p class='errore'>";
                echo "Username o Email già in uso";
                echo "</p>";
            }
		?>
		<label for="username"><b>Username</b></label>
		<input type="text" placeholder="Inserisci username" name="username" required>
        <label for="email"><b>Email</b></label>
		<input type="text" placeholder="Inserisci l'indirizzo email" name="email" required>
        <label for="telefono"><b>Telefono</b></label>
		<input type="text" placeholder="Inserisci numero di telefono" name="telefono" required>
        
		<label for="password"><b>Password</b></label>
		<input type="password" placeholder="Inserisci password" name="password" required>
		<label for="confirm-password"><b>Conferma password</b></label>
		<input type="password" placeholder="Inserisci di nuovo la password" name="confirmPassword" required>
		
		<input type="submit" value="Registrati">

</select>







