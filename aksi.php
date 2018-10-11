<?php 
	include 'koneksi.php';

	if (isset($_POST['save'])) {
		$nama			= $_POST['nama'];
		$nim			= $_POST['nim'];
		$kelas			= $_POST['kelas'];
		$kelamin		= $_POST['jenisKelamin'];
		$hobi 			= $_POST['hobi'];
		$tmp_hobi		= implode(', ', $_POST['hobi']);
		$fakultas		= $_POST['fakultas'];
		$alamat			= $_POST['alamat'];
		$username		= $_POST['username'];
		$password		= $_POST['password'];

		$err = $erNama = $erNim = $erUser = $erPass = '';

		if (empty($nama) || empty($nim) || empty($username) || empty($password)) { $err = 'Isi Data Terlebih Dahulu'; }

		if (empty($nama)) { $erNama = 'Nama Tidak Boleh Kosong'; }

		if (empty($nim)) { $erNim = 'NIM Tidak Boleh Kosong'; }

		if (empty($username)) { $erUser = 'Username Tidak Boleh Kosong'; }

		if (empty($password)) { $erPass = 'Password Tidak Boleh Kosong'; }

		if (empty($err)) { 
			$sql = "INSERT INTO datamahasiswa (nama, nim, kelas, jenis_kelamin, hobi, fakultas, alamat, username, password) VALUES ('$nama','$nim','$kelas','$kelamin','$tmp_hobi','$fakultas','$alamat', '$username', '$password')";
			$query = mysqli_query($conn, $sql);

			if ($query) {
				echo "* Data Berhasil Disimpan";
					}else{
				echo "* Data Gagal Disimpan. Pastikan NIM tidak pernah didaftarkan".mysqli_connect_error()."</span>";
			}
		}
	}
?>