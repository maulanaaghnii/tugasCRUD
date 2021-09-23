<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$npp_dosen=$_POST['npp_dosen'];
	$nama_dosen=$_POST['nama_dosen'];
	$jabatan_dosen=$_POST['jabatan_dosen'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET npp_dosen ='$npp_dosen',nama_dosen='$nama_dosen', jabatan_dosen='$jabatan_dosen' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$npp_dosen = $user_data['npp_dosen'];
	$nama_dosen = $user_data['nama_dosen'];
	$jabatan_dosen = $user_data['jabatan_dosen'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>NPP dosen</td>
				<td><input type="text" name="npp_dosen" value=<?php echo $npp_dosen;?>></td>
			</tr>
			<tr> 
				<td>Nama dosen</td>
				<td><input type="text" name="nama_dosen" value=<?php echo $nama_dosen;?>></td>
			</tr>
			<tr> 
				<td>Jabatan dosen</td>
				<td><input type="text" name="jabatan_dosen" value=<?php echo $jabatan_dosen;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>