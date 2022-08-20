<?php 

include 'connection.php';

session_start();


if (isset($_SESSION['login_email'])) {
    header("Location: ../html/home.php");
}

if (isset($_POST['sign_in'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['login_email'] = $row['email'];
		$_SESSION['image_url'] = $row['img_url'];
		$_SESSION['name'] = $row['firstname']." ".$row['lastname'];
		header("Location: ../html/home.php");
		
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
        $_POST['email'] = "";
		$_POST['password'] = "";
	}
}

?>