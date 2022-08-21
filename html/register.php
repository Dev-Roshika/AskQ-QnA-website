<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registerStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../img/AskQ-Logo.png" size="128x128">
    <title>AskQ | Register</title>
</head>

<body>
    <!--Header-->
    <div class="header">
    <a href="home.php"><img src="../img/AskQ-Logo.png" alt="logo" height="70px"></a>
        <div class="header-right">
            <a href="../index.php"><button type="button" class="btn btn-outline-info" id="Login_Button1">Log
                in</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="button" class="btn btn-outline-info" id="Register_Button">Register</button>
        </div>
    </div>
    <!--Header end-->

    <!--Form-->
    <form class="signup-form" action="../php/reg.php" method="post" autocomplete="off" enctype="multipart/form-data">
    <?php if(isset($_GET['error'])){  ?>
    <div class="alert alert-danger" style='text-align:center;'>
        <strong>Danger!</strong> <?php  echo $_GET['error']; ?>
    </div>
    <?php } ?>
        <!-- form header -->
        <div class="form-header">
            <h2 class="title">Sign Up!</h2>
            <p>Fill out form to get started.</p>
        </div>

        <!-- form body -->
        <div class="form-body">

            <!-- Firstname and Lastname -->
            <div class="horizontal-group">
                <div class="form-group left">
                    <label for="firstname" class="label-title">First name<span class="required-field"></span></label>
                    <input type="text" id="firstname" class="form-input" name='firstname'
                        placeholder="enter your first name" required="required" />
                </div>
                <div class="form-group right">
                    <label for="lastname" class="label-title">Last name</label>
                    <input type="text" id="lastname" name='lastname' class="form-input"
                        placeholder="enter your last name" />
                </div>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="label-title">Email<span class="required-field"></span></label>
                <input type="email" id="email" name='email' class="form-input" placeholder="enter your email"
                    required="required">
            </div>

            <!-- Password and confirm password -->
            <div class="horizontal-group">

                <div class="form-group left">
                    <label for="password" class="label-title">Password<span class="required-field"></span></label>
                    <input type="password" id="password" name='password' class="form-input"
                        placeholder="enter your password" required="required">
                </div>

                <div class="form-group right">
                    <label for="confirm-password" class="label-title">Confirm Password<span
                            class="required-field"></span></label>
                    <input type="password" class="form-input" name='cpassword' id="confirm-password"
                        placeholder="enter your password again" required="required">
                </div>
            </div>

            <!-- Phone number and age -->
            <div class="horizontal-group">
                <div class="form-group left">
                    <label class="label-title">Phone number</label>
                    <div class="input-group">
                        <label for="phone">
                            <input type="tel" id="phone" name="pnumber" class="form-input"
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="0XX-XXX-XXXX">
                        </label>
                    </div>
                </div>
                <div class="form-group right">
                    <label for="experience" class="label-title">Age</label>
                    <input type="number" min="18" max="80" name='age' value="18" class="form-input">
                </div>
            </div>

            <!-- Profile picture and gender -->
            <div class="horizontal-group">
                <div class="form-group right">
                    <label for="choose-file" class="label-title">Upload Profile Picture</label>
                    <input type="file" id="image1" size="80" name="image1" accept=".jpg, .jpeg, .png">
                </div>
                <div class="form-group left">
                    <label class="label-title">Gender:</label>
                    <div class="input-group">
                        <select name="gender" id="id_uoj_stu_or_not" class="dropdown"  style = "width:43%;">
                            <option>--Select--</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="uoj_stu_or_not" class="label-title">Are you student of university of
                    Jaffna?</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="j_yesno" id="id_uoj_stu_or_not" class="dropdown" style = "width:20%;" >
                    <option>--Select--</option>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>

            <!--Faculty name and department name-->
            <div class="horizontal-group">
                <div class="form-group left">
                    <label for="facultyname" class="label-title">Faculty name</label>
                    <input type="text" id="facultyname" name="facultyname" class="form-input" placeholder="enter your faculty name"
                        required="required" />
                </div>
                <div class="form-group right">
                    <label for="departmentname" class="label-title">Department name</label>
                    <input type="text" id="departmentname" name="departmentname" class="form-input" placeholder="enter your department name" /
                        required>
                </div>
            </div>

            <div class="form-group">
                <label for="year_of_study" class="label-title">Year of Study</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="yearofstudy" id="id_year_of_study" class="dropdown"  style = "width:43%;">
                    <option value="">--Select--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

        </div>
        <!--form body end-->

        <div class="form-mid">
            <h5 class="title">If you aren't student of university of Jaffna, please fill this.</h5>
        </div>

        <br>
        <div class="form-group">
            <label for="year_of_studyAL" class="label-title" id="id_label">Year of Study A/L</label>
            <select id="ddlYears" name="year">
                <option value="">--Select--</option>
            </select>
        </div>

        <div class="form-group-p">
            <label class="label-title" id="id_label">Profession (Student/Job holder)</label>
            <div class="input-group">
                <label for="profession">
                    <input type="text" name="profession" placeholder="Student/Job holder" id="id_profession"></label>
            </div>
        </div>


        <div class="form-group">
            <label for="faculty" class="label-title" id="id_label">Your are interested on</label>
            <select name="name_faculty" id="id_faculty" class="dropdown">
                <option value="">--Which faculty?--</option>
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
        </div>

        <!-- form footer -->
        <!-- form footer -->
        <div class="form-footer">
            <span>* required</span>
            <button type="submit" name="sign_up" class="btn">Get Started</button>
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