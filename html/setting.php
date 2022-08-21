<?php
	include '../php/connection.php';
	session_start();

	$email = $_SESSION['login_email'];

	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = $conn -> query($sql);

	if ($result) {
		while ($row = $result -> fetch_row()) {
			$firstname = $row[1];
			$lastname = $row[2];
			$pnumber = $row[6];
			$age = $row[7];
			$gender = $row[8];
			$url = $row[3];
			$pass = md5($row[5]);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>AskQ | Setting</title>
    <link rel="icon" href="../img/AskQ-Logo.png" size="128x128">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/SettingStyle.css">
</head>
<body>
	<section class="py-5 my-5">
		<div class="container">
			<h1 class="mb-5" >Account Settings</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
						<img src="../upload/<?php echo $url; ?>" class="shadow">
							<!-- <img src="../img/member-2.png" alt="Image" class="shadow"> -->
						</div>
						<h4 class="text-center"><?php echo $firstname." ".$lastname ?></h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="background-color:#f6f7f9">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
						<!--<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i> 
							Security
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false" >
							<i class="fa fa-bell text-center mr-1"></i> 
							Notification
						</a>-->
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										  <label>First Name</label>
										  <input type="text" name="firstname" class="form-control" value="<?php echo $firstname?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										  <label>Last Name</label>
										  <input type="text" name="lastname" class="form-control" value="<?php echo $lastname?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										  <label>Email</label>
										  <input type="text" name="email" class="form-control" value="<?php echo $_SESSION['login_email']?>" readonly>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										  <label>Phone number</label>
										  <input type="text" name="pnumber" class="form-control" value="<?php echo $pnumber?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										  <label>Age</label>
										  <input type="text" name="age" class="form-control" value="<?php echo $age?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										  <label>Gender</label>
										  <select name="gender" class="form-control">
										  <option selected value="<?php echo $gender?>"><?php echo $gender?></option>
										  <?php 
										  	if($gender=='Male'){
										  ?>
											<option value="Female">Female</option>
											<?php }else{ ?>
											<option value="Male">Male</option>
											<?php } ?>
										  </select>
									</div>
								</div>
							</div>
							<div>
								<input type="submit" name="update" value="Update" class="btn btn-outline-success"></input>
								<input type="submit" name="cancle" value="Cancle" class="btn btn-light"></input>
							</div>
						</form>
					</div>

					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Old password</label>
										<input type="password" name='oldpass' value="<?php echo $pass; ?>" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>New password</label>
										<input type="password" name="newpass" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Confirm new password</label>
										<input type="password" name="conpass" class="form-control">
									</div>
								</div>
							</div>
							<div>
								<input type="submit" name="update_p" value="Update" class="btn btn-outline-success"></input>
								<input type="submit" name="cancle_p" value="Cancle" class="btn btn-light"></input>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

<?php
	if (isset($_POST['cancle'])) {
		echo "<script>window.location.href='../index.php';</script>";
	} else if (isset($_POST['update'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$pnumber = $_POST['pnumber'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];

		$query = "UPDATE users SET firstname='$firstname', lastname='$lastname', pnum='$pnumber', age='$age', gender='$gender' WHERE email='$email'";

		if ($conn -> query($query) === TRUE) {
			echo "
				<script>
					alert ('User data updated.');
					window.location.href='setting.php';
				</script>";
		} else {
			echo 'error';
		}
	}

	if (isset($_POST['cancle_p'])) {
		echo "<script>window.location.href='../index.php';</script>";
	} else if (isset($_POST['update_p'])) {
		$oldpassword = $_POST['oldpass'];
		$newpassword = $_POST['newpass'];
		$conpassword = $_POST['conpass'];

		if($newpassword==$conpassword){
			$newpassword = md5($newpassword);
			$query = "UPDATE users SET pass='$newpassword' WHERE email='$email'";

			if ($conn -> query($query) === TRUE) {
			echo "
				<script>
					alert ('User data updated.');
					window.location.href='setting.php';
				</script>";
		} else {
			echo 'error';
		}
		}else{
			echo "
				<script>
					alert ('Password is not matched');
					window.location.href='setting.php';
				</script>";
		}

	}

?>