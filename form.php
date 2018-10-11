<?php
	include 'aksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM MAHASISWA</title>
</head>
<body>
	<form action="" method="POST">
		<table>
			<tr>
				<td colspan="3" align="left"><h2><marquee>FORMULIR MAHASISWA</marquee></h2></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td>
					<input type="text" name="nama"><br>
				</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
					<input type="text" name="nim"><br>
				</td>
			</tr>
			<tr>
				<td valign="top">Kelas</td>
				<td valign="top">:</td>
				<td>
					<input type="hidden" name="kelas" checked>
					<input type="radio" name="kelas" value="D3 MI 41-01">D3 MI 41-01<br>
					<input type="radio" name="kelas" value="D3 MI 41-02">D3 MI 41-02<br>
					<input type="radio" name="kelas" value="D3 MI 41-03">D3 MI 41-03<br>
					<input type="radio" name="kelas" value="D3 MI 41-04">D3 MI 41-04<br>

				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="hidden" name="jenisKelamin" checked>
					<input type="radio" name="jenisKelamin" value="Pria">Pria
					<input type="radio" name="jenisKelamin" value="Wanita">Wanita<br>
					
				</td>
			</tr>
			<tr>
				<td valign="top">Hobi</td>
				<td valign="top">:</td>
				<td>
					<input type="hidden" name="hobi[]" value="">
					<input type="checkbox" name="hobi[]" value="musik">Musik<br>
					<input type="checkbox" name="hobi[]" value="dancing">Dancing<br>
					<input type="checkbox" name="hobi[]" value="gaming">Gaming<br>
					<input type="checkbox" name="hobi[]" value="travelling">travelling<br>
					<input type="checkbox" name="hobi[]" value="olahraga">olahraga<br>

				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
						<option value="">Pilih Fakultas</option>
						<option value="FIT">Fakultas Ilmu Terapan</option>
						<option value="FKB">Fakultas Komunikasi Bisnis</option>
						<option value="FEB">Fakultas Ekonomi Bisnis</option>
						<option value="FIK">Fakultas Industri Kreatif</option>
						<option value="FIF">Fakultas Informatika</option>
						<option value="FTE">Fakultas Teknik Elektri</option>
						<option value="FRI">Fakultas Rekayasa Industri</option>
					</select><br>

				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<input type="textarea" name="alamat">
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input type="text" name="username"><br>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" name="password"><br>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<br>
					<input type="submit" name="save" value="REGISTER" class="save"><br>
				</td>
			</tr>
			<?php if (isset($_POST['save'])) {
				if (empty($err)) { ?>
					<tr>
						<td colspan="3">
							<button class="save" formaction="login.php">LANJUT LOGIN</button>
						</td>
					</tr>
			<?php } }?>
		</table>
	</form>
</body>
</html>
