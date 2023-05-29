<?php

	$conn = mysqli_connect("localhost","root","","Sito");
	$dati = array();
	$query = "SELECT * FROM SQUADRA WHERE Lega = '".$_GET['lega']."'";
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
