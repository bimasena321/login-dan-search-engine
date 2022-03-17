<?php
session_start();
include 'koneksi.php';  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BIASS2</title>
	<link rel="icon" type="icon" href="">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="oca">
	<div class="box">
		<h1>Login</h1>
		<form action="" method="POST">
		<input type="teks" name="fuser" placeholder="username..." class="input" autosave="off">
		<br>
		<input type="password" name="fpass" placeholder="password..." class="pass">
		<br>
		<br>
		<button type="submit" name="flogin">Login</button>
		</form>
		<?php
		if (isset($_POST['flogin'])) {
		  	$username = $_POST['fuser'];
		  	$password = $_POST['fpass'];
		  	$qry = mysqli_query($koneksi,"SELECT * FROM tab_login WHERE username= '$username' AND password= md5('$password')");
		  	$cek = mysqli_num_rows($qry);
		  	if ($cek==1) {
		  		$_SESSION['userweb'] = $username;
		  		header("location:admin.php");
		  		exit;
		  	}
		  	else{
		  		echo "maaf username dan password salah!!!";
		  	}
		  }  


		?>
	</div>
	</div>
</body>
</html>