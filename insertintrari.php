<?php

?>
<?php
	$con = mysqli_connect('localhost', 'root', '', 'DB');
	if(!$con)
	{
		echo 'Not connected to the server';
	}


	$ID = mysqli_real_escape_string($con, $_POST['ID']);
	$Nume = mysqli_real_escape_string($con, $_POST['Nume']);
	$Data_intrare = mysqli_real_escape_string($con, $_POST['Data_intrare']);
	$Observatii = mysqli_real_escape_string($con, $_POST['Observatii']);

	$sql = "INSERT INTO intrari (ID, Nume, Data_intrare, Observatii) VALUES ('$ID','$Nume','$Data_intrare','$Observatii')";
	if(!mysqli_query($con,$sql))
	{
		echo 'Neadaugat';
	}
	else
	{
		echo 'Adaugat';
	}
	header("refresh:1; url=intrari.php");
?>
