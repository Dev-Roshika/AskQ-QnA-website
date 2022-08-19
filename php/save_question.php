<?php 

if (isset($_POST['add_question'])) {
	include "connection.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$ques = validate($_POST['ques']);
    $da_time = validate($_POST['date_and_time']);

    $sql1 = "SELECT * FROM users ORDER BY id ASC";
    $user_read = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($user_read);
    $name = $row['firstname']." ".$row['lastname'];

	if (empty($name)) {
		header("Location: ../html/AskQ.php?error=empy name");
	}else if (empty($ques)) {
		header("Location: ../html/AskQ.php?error=empy question");
    }else if (empty($da_time)) {
		header("Location: ../html/AskQ.php?error=empy time");
    }else {

       $sql = "INSERT INTO add_question(name,date,question) VALUES('$name', '$da_time','$ques')";
       $result = mysqli_query($conn, $sql);
       if (!$result) {
            echo '<script type="text/javascript">';
            echo 'alert("Data is not inserted")';
            echo '</script>';
            header("Location: ../html/home.php");
       }else{
            header("Location: ../html/home.php");
       }
	}

}