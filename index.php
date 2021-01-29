<?php
$connect = mysqli_connect("localhost", "root", "", "DB");
$query = "SELECT * FROM Stoc ORDER BY ID ASC";
$result = mysqli_query($connect, $query);
?>



<html>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <script src="js/jquery.min.js"></script>
  <title>
  </title>
  <div id="top" class="topnav">
	<a href="index.php">Acasă</a>
  <a href="Intrari.php">Intrari</a>
  <a href="Iesiri.php">Iesiri</a>
	<a href="adauga.php?adauga">Adaugă stoc</a>
    <div class="topnav-right">
    </div>
  </div>
</head>
<body>
	<h1 align="center">STOC</h1>
	<table align="center" border="1px" style="line-height:25px;">
		<tr>
		<th>ID</th>
		<th>NUME</th>
		<th>CANTITATE</th>
		<th>OBSERVATII</th>
		</tr>

	<?php
	//Fetch data
	if($result -> num_rows > 0){
		while($row = $result->fetch_assoc()){
			?>
			<tr>
			<td><?php echo $row['ID']; ?> </td>
			<td><?php echo $row['Nume']; ?></td>
			<td><?php echo $row['Cantitate']; ?></td>
			<td><?php echo $row['Observatii']; ?></td>
			<!-- Edit -->
			<td><a href="edit.php?ID=<?php echo $row['ID']; ?>" alt="edit" > Modifică </a></td>
			</tr>
		<?php
		}
	}
	else
	{
		?>
		<tr>
		<th colspan="2">Nu s-au gasit inregistrari!</th>
		</tr>
		<?php
	}
	?>
	</table>

	</body>
</html>
