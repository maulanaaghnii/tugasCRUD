<html>
<head>
	<title>Add Users</title>
</head>
 ty
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>NPP</td>
				<td><input type="text" name="npp_dosen"></td>
			</tr>
			<tr> 
				<td>Nama Dosen</td>
				<td><input type="text" name="nama_dosen"></td>
			</tr>
			<tr> 
				<td>Jabatan Fungsional</td>
				<td><input type="text" name="jabatan_dosen"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$npp_dosen = $_POST['npp_dosen'];
		$nama_dosen = $_POST['nama_dosen'];
		$jabatan_dosen = $_POST['jabatan_dosen'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(npp_dosen, nama_dosen, jabatan_dosen) VALUES('$npp_dosen','$nama_dosen','$jabatan_dosen')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>