<?php
$connect = mysqli_connect("localhost", "root", "", "DB");
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <script src="js/jquery.min.js"></script>
  <title>
  Adăugare stoc |
  </title>
  <div class="topnav">
	<a href="index.php">Înapoi</a>
    <div class="topnav-right">
      <a class="active" href="./index.php"> </a>
    </div>
  </div>
</head>
<body>
	<h1 align="center">Adăugare stoc</h1>
	<table id="tbladauga" align="center">
	<form action="insert.php" method="POST" align="center">

	<tr>
	<td>ID</td>
	<td><input type="text" name="ID" placeholder="ID"></td>
	</tr>

	<tr>
	<td>Nume</td>
	<td><input type="text" name="Nume" placeholder="Nume"></td>
	</tr>

	<tr>
	<td>Cantitate</td>
	<td><input type="text" name="Cantitate" placeholder="Cantitate"></td>
	</tr>

	<tr>
	<td>Observatii:</td>
	<td><input type="text" name="Observatii" required placeholder="Observatii"></td>
	</tr>
	<tr>
	<td align="right"><input type="submit" value="Adaugă"></input></td>
	</tr>
	</form>
	</table>
</body>
</html>
