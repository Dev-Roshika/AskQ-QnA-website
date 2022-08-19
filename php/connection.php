<?php  

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "question";

$conn  = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo '<script type="text/javascript">';
    echo 'alert("Database Connection Failed")';
    echo '</script>';
}

?>