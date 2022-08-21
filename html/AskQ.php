<?php 

session_start();

$data = date("Y.m.d")." , ".date("h:i:sa");
$name = $_SESSION['name'];

if(isset($_GET['name'])){
    $name = $_GET['name'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registerStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <link rel="icon" href="../img/AskQ-Logo.png" size = "128x128">
    <style>
        textarea{
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
    </script>
    <title>AskQ | Ask Question</title>
    <link rel="icon" href="../img/AskQ-Logo.png" size="128x128">
</head>
<body>
   <!--Header-->
    <div class="header">
        <img src="../img/AskQ-Logo.png" alt="logo" height="70px">
        <div class="header-right">
            <!-- <button type="button" class="btn btn-outline-info" id = "Login_Button">Log in</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-outline-info" id = "Register_Button">Register</button> -->
        </div>
    </div>
  <!--Header end--> 

  <!--Form-->
    <form class="signup-form" action="../php/save_question.php" method="post">
        <!-- form header -->
        <div class="form-header">
            <h2 class="title">Ask a Question!</h2>
            <p>lets start.</p>
        </div>

        <!-- form body -->
        <div class="form-body">
            <textarea id="" cols="30" rows="10" name='ques' placeholder="Write your question here......"></textarea>
            <input type="hidden" name='date_and_time' value="<?php echo $data ?>">
            <input type="hidden" name='name' value="<?php echo $name ?>">
        </div>
        <!--form body end-->

        <!-- <div class="form-mid">
            <h5 class="title">If you aren't student of university of Jaffna, please fill this.</h5>
        </div> -->
        
       <!-- <br>
        <div class="form-group">
            <label for="year_of_studyAL" class="label-title" id = "id_label" >Year of Study A/L</label>
            <select id="ddlYears">
                <option value="">--Select--</option>
            </select>
        </div>

        <div class="form-group-p">
            <label class="label-title" id = "id_label">Profession (Student/Job holder)</label>
                    <div class="input-group">
                        <label for="profession">
                            <input type="text" name="profession" placeholder="Student/Job holder" id="id_profession"></label>
                    </div>     
        </div>
 
        
        <div class="form-group">
            <label for="faculty" class="label-title" id = "id_label" >Your are interested on</label>
            <select name="name_faculty" id="id_faculty" class = "dropdown">
                <option value="" >--Which faculty?--</option>
                <option value="Agriculture">Agriculture</option>
                <option value="AHS">Allied Health Sciences</option>
                <option value="art">Art</option>  
                <option value="Engineering">Engineering</option>  
                <option value="GS">Graduate Studies</option> 
                <option value="HS">Hindu Studies</option>
                <option value="Management">Management Studies & Commerce</option>
                <option value="Med">Medicine</option>
                <option value="Sci">Science</option>
                <option value="Tech">Technology</option>
            </select>
        </div> -->

        <!-- form footer -->
        <!-- form footer -->
        <div class="form-footer">
            <span>* required</span>
            <a href="home.php" class='btn'>Cancel</a>
            <button type="submit" class="btn" id="addQuestion" name='add_question'>Add Question</button>
        </div>
    </form>

  <!--Js-->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/registerjs.js"></script>
  <!--Some of code from https://softauthor.com/registration-form-design-in-html-css-with-code/-->
</body>
</html>