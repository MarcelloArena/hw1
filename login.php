
<?php



session_start();

if(isset($_SESSION['username']))
{
    header("Location: homepage.php");
    exit;
}

if(isset($_POST['username']) && preg_match('/[A-Z]/', $_POST['password']) && preg_match('/\d/', $_POST['password']) && strlen($_POST['password'])>=8)  // Verifico se la password ha una lettera maiuscola, un numero, e se la sua lunghezza e almeno pari ad 8
{
    $conn = mysqli_connect("localhost","root","","Sito");
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT * FROM UTENTE WHERE username = '".$username."' AND password = '".$password."' ";
    $res = mysqli_query($conn,$query);

    if(mysqli_num_rows($res)>0)
    {
            $_SESSION['username']=$_POST['username'];
            header("Location: homepage.php");
            mysqli_free_result($res);
            mysqli_close($conn);
            exit;
    }
    else
    {
        $errore=true;

    }

}


?>










<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
    <script src="login.js" defer="true"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<header>


</header>

<body>

	<form method='post' name='login'>

		<h2>Login</h2>
        <div>
            
        </div>
        <?php
            if(isset($errore))
            {
                echo "<p class='errore'>";
                echo "Credenziali non valide";
                echo "</p>";
            }
        ?>
		<label for="username"><b>Username</b></label>
		<input type="text" placeholder="Username" name="username" id ="user" required>  
		<label for="password"><b>Password</b></label>
		<input type="password" placeholder="Password" name="password" id="pass" required>
		<input type="submit" value="Accedi">
		<a href="registrazione.php">Registrati</a>
	</form>
</body>
</html>










