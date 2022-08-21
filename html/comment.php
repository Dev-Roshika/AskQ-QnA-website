<?php 

session_start();

include "../php/connection.php";

$ques_id = 0;

if(isset($_GET['id'])){
    $ques_id = $_GET['id'];
}

$sql = "SELECT * FROM add_question where id=$ques_id";
$read_ques = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($read_ques);

$sql1 = "SELECT * FROM answers where ques_id=$ques_id";
$ans_ques = mysqli_query($conn, $sql1);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/comment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../img/AskQ-Logo.png" size="128x128">
    <style>
        textarea {
            margin: 5px;
            border: none;
            outline: none;
            resize: none;
            width: 100%;
        }
    </style>
    <script>
        document.getElementById("addQuestion").onclick = function () {
            location.href = "home.php";
        };
        document.getElementById("cancle").onclick = function () {
            location.href = "home.php";
        };
    </script>
    <title>AskQ | Register</title>
</head>

<body>
    <!--Header-->
    <div class="header">
        <a href="home.php"><img src="../img/AskQ-Logo.png" alt="logo" height="70px"></a>
        <div class="header-right">
        </div>
    </div>
    <!--Header end-->

    <div class="main-content">
        <div class="post-container">
            <div class="post-row">
                <div class="user-profile">
                    <img src="../upload/<?php echo $rows['img'] ?>">
                    <div>
                        <p>
                            <?php echo $rows['name'] ?>
                        </p>
                        <span>
                            <?php echo $rows['date'] ?>
                        </span>
                    </div>
                </div>
                <a href="#">
                    <i class="fa fa-ellipsis-v"></i>
                </a>
            </div>

            <p class="post-text">
                <?php echo $rows['question'] ?>
            </p>
        </div>

        <div class="post-answers">
            <hr>
            <?php if (mysqli_num_rows($ans_ques)) { ?>
        
            <?php 
			    while($data_rows = mysqli_fetch_assoc($ans_ques)){
                    $id = $data_rows['ques_id'];
		    ?>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <img src="../upload/<?php echo $data_rows['img_url'] ?>">
                        <div>
                            <p><?php echo $data_rows['name'] ?></p>
                            <span><?php echo $data_rows['da_time'] ?></span>
                        </div>
                    </div>
                    <a href="#">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                </div>
                <div style="padding-left: 55px;">
                    <p class="post-text">
                    <?php echo $data_rows['answer'] ?>
                    </p>
                </div>
            </div>

            <hr>

            <?php } ?>
            <?php } ?>
        </div>
    </div>


    <!--Form-->
    <form class="signup-form" action="../php/answer.php" method="post">
        <!-- form header -->
        <div class="form-header">
            <h2 class="title">Answer to a Question!</h2>
            <p>lets start.</p>
        </div>

        <!-- form body -->
        <div class="form-body">
            <input type="hidden" name='ques_id' value=<?php echo $ques_id ?>>
            <textarea name="answer" id="" cols="30" rows="10" placeholder="Write your answer here......"></textarea>
        </div>
        <!--form body end-->



        <!-- form footer -->
        <!-- form footer -->
        <div class="form-footer">
            <span>* required</span>
            <a href="home.php" class='btn'>Cancel</a>
            <button type="submit" class="btn" id="submitQuestion" name='answer_submit'>Submit</button>
        </div>
    </form>

    <!--Js-->
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
    <script src="./script.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/registerjs.js"></script>
    <!--Some of code from https://softauthor.com/registration-form-design-in-html-css-with-code/-->
</body>

</html>