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

	$fileName = $_FILES["image1"]["name"];
	$fileSize = $_FILES["image1"]["size"];
	$tmpName = $_FILES["image1"]["tmp_name"];
	
	$validImageExtension = ['jpg', 'jpeg', 'png'];
	$imageExtension1 = explode('.', $fileName);
	$imageExtension = strtolower(end($imageExtension1));

	if($_FILES["image"]["error"] == 4){
		header("Location: ../html/register.php?error=Image doesn't exits");
	}else{
		
		if ( !in_array($imageExtension, $validImageExtension) ){
			header("Location: ../html/register.php?error=Invalid Image Extension&image=$fileName");
		}
		else if($fileSize > 1000000){
			header("Location: ../html/register.php?error=Image Size Is Too Large");
		}
	
	}

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {

			$newImageName = uniqid();
      		$newImageName .= '.' . $imageExtension;

      		move_uploaded_file($tmpName, '../upload/' . $newImageName);

			$sql = "INSERT INTO users (firstname, lastname,img_url,email,pass,pnum,age,gender,yes_no,fname,dname,y_ofstudy,study_year,profession,nfaculty)
					VALUES ('$firstname', '$lastname','$newImageName','$email', '$password', '$pnumber', '$age', '$gender', '$j_yesno'
                    , '$facultyname', '$departmentname', '$yearofstudy', '$year', '$profession', '$name_faculty')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
                header("Location: ../index.php");
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

?>