<?php  
$conn = mysqli_connect("localhost","root","","login");

if (!$conn) {
	echo ("koneksi gagal" . mysqli_connect_error());
}

?>