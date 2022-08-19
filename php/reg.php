<?php 

include 'connection.php';

session_start();

if (isset($_SESSION['email'])) {
    header("Location: ../html/home.php");
}

if (isset($_POST['sign_up'])) {
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
    $pnumber = $_POST['pnumber'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $j_yesno = $_POST['j_yesno'];
    $facultyname = $_POST['facultyname'];
    $departmentname = $_POST['departmentname'];
    $yearofstudy = $_POST['yearofstudy'];
    $year = $_POST['year'];
    $profession = $_POST['profession'];
    $name_faculty = $_POST['name_faculty'];
	

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (firstname, lastname,email,pass,pnum,age,gender,yes_no,fname,dname,y_ofstudy,study_year,profession,nfaculty)
					VALUES ('$firstname', '$lastname','$email', '$password', '$pnumber', '$age', '$gender', '$j_yesno'
                    , '$facultyname', '$departmentname', '$yearofstudy', '$year', '$profession', '$name_faculty')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
                header("Location: ../html/index.php");
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

header("Location: ../html/home.php");

?>