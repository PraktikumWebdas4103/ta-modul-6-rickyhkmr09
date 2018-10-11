<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form action="" method="POST">
		<table>
			<tr>
				<td colspan="3"><h2>LOGIN</h2></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="login" value="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	include 'koneksi.php';
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM datamahasiswa WHERE username = '$username' AND password = '$password'";
		$query = mysqli_query($conn, $sql);

		if ($query) {
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header('Location: halamanawal.php');
		}else{
			echo "Username Atau Password Tidak Terdaftar";
		}
	}
?>
