<?php
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$conn = mysqli_connect('localhost', 'root', '', 'android');
	if($conn){
		$query = "SELECT * FROM accounts WHERE username LIKE '$user' AND pass LIKE '$pass'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0){
			echo "Login Berhasil";
		}else{
			echo "Login Gagal";
		}
	}else{
		echo "Not Connected !";
	}
?>
