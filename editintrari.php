<?php
$connect = mysqli_connect("localhost", "root", "", "DB");
?>

<?php
$ID=$_REQUEST['ID'];
$query = "SELECT * from Intrari where ID='".$ID."'";
$result = mysqli_query($connect, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <script src="js/jquery.min.js"></script>
  <title>
  Editare înregistrare |
  </title>
  <div class="topnav">
	<a href="index.php">Înapoi</a>
	<a href="adauga.php?adauga">Adaugă intrare</a>
    <div class="topnav-right">
      <a class="active" href="./manages.php"> </a>
    </div>
  </div>
</head>
<body>
	<?php
		$status = "";
		if(isset($_POST['new']) && $_POST['new']==1)
			{
				$ID=$_REQUEST['ID'];
				$Nume = $_REQUEST['Nume'];
				$Data_intrare = $_REQUEST['Data_intrare'];
				$Observatii = $_REQUEST['Observatii'];
				$update="update Intrari set ID='".$ID."',
				Nume='".$Nume."',
				Data_intrare='".$Data_intrare."',
				Observatii='".$Observatii."'
				where ID='".$ID."'";
				mysqli_query($connect, $update) or die(mysqli_error());
				$status = "Inregistrare modificata cu succes!";
				header("refresh:0; url=intrari.php");
			} else {
	?>



	<table id="tbladauga" align="center">
	<form action="" method="POST" align="center">
	<input type="hidden" name="new" value="1"></input>
	<tr>
	<td>ID:</td>
	<td><input type="text" name="ID" value="<?php echo $row['ID'];?>"></td>
	</tr>
	<tr>
	<td>Nume</td>
	<td><input type="text" name="Nume" value="<?php echo $row['Nume'];?>"></td>
	</tr>
	<tr>
	<td>Data intrare:</td>
	<td><input type="date" name="Data_intrare" value="<?php echo $row['Data_intrare'];?>"></td>
	</tr>

	<tr>
	<td>Observatii:</td>
	<td><input type="text" name="Observatii" value="<?php echo $row['Observatii'];?>"></td>
	</tr>
	<tr>
	<td align="right"><input name="submit" type="submit" value="Modifică"></input></td>
	</tr>
	</form>
	</table>
			<?php } ?>
</body>
</html>
