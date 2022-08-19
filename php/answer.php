<?php 

session_start();

if (isset($_POST['answer_submit'])) {
	include "connection.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$ques_id = validate($_POST['ques_id']);
    $answer = validate($_POST['answer']);
    $email = $_SESSION['login_email'];
    $date_time = date("Y.m.d")." , ".date("h:i:sa");

    $sql1 = "SELECT * FROM users where email='$email'";
    $user_read = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($user_read);
    $name = $row['firstname']." ".$row['lastname'];

    if(!empty($answer)){
        $sql = "INSERT INTO answers(ques_id,name,da_time,answer) VALUES('$ques_id', '$name','$date_time','$answer')";
    $result = mysqli_query($conn, $sql);
       if (!$result) {
            echo '<script type="text/javascript">';
            echo 'alert("Data is not inserted")';
            echo '</script>';
            header("Location: ../html/comment.php");
       }else{
            header("Location: ../html/comment.php?id=$ques_id");
       }
    }else{
            echo '<script type="text/javascript">';
            echo 'alert("Data is empty")';
            echo '</script>';
            header("Location: ../html/comment.php");
    }
    

	

}