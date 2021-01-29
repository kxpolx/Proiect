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
	$Cantitate = mysqli_real_escape_string($con, $_POST['Cantitate']);
	$Observatii = mysqli_real_escape_string($con, $_POST['Observatii']);

	$sql = "INSERT INTO stoc (ID, Nume, Cantitate, Observatii) VALUES ('$ID','$Nume','$Cantitate','$Observatii')";
	if(!mysqli_query($con,$sql))
	{
		echo 'Neadaugat';
	}
	else
	{
		echo 'Adaugat';
	}
	header("refresh:1; url=index.php");
?>
