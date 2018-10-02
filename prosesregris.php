<?php
if (isset($_POST['submit'])){
$nim= $_POST['nim'];
$nama = $_POST['nama'];
$email = ($_POST['email']);
include "koneksi.php";
$sql ="INSERT INTO regis (nim,nama,email) values ('$nim','$nama','$email')";
if (mysqli_query($con,$sql)){
	echo "Registrasi Telah Berhasil";
}else{
	echo "Gagal Regis";
}
}
?>
