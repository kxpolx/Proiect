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
	$Data_iesire = mysqli_real_escape_string($con, $_POST['Data_iesire']);
	$Observatii = mysqli_real_escape_string($con, $_POST['Observatii']);

	$sql = "INSERT INTO iesiri (ID, Nume, Data_iesire, Observatii) VALUES ('$ID','$Nume','$Data_iesire','$Observatii')";
	if(!mysqli_query($con,$sql))
	{
		echo 'Neadaugat';
	}
	else
	{
		echo 'Adaugat';
	}
	header("refresh:1; url=iesiri.php");
?>
