<?php 

session_start();

include "../php/connection.php";

$sql = "SELECT * FROM add_question ORDER BY id ASC";
$read_ques = mysqli_query($conn, $sql);

$email =  $_SESSION['login_email'] ;

$sqlone = "SELECT * FROM users where email='$email'";
$result_r = mysqli_query($conn, $sqlone);
$rows_r = mysqli_fetch_assoc($result_r)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>AskQ | Home</title>
    <link rel="icon" href="../img/AskQ-Logo.png" size="128x128">
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0" nonce="yLe04A3Y"></script>
    <!--Header-->
    <div class="header">
        <a href="home.php"><img src="../img/AskQ-Logo.png" alt="logo" height="70px"></a>
        <!--<div class="wrap">
             <div class="search">
               <input type="text" class="searchTerm" placeholder="What are you looking for?">
               <button type="submit" class="searchButton">
                 <ion-icon name="search-outline"></ion-icon>
              </button> &nbsp;&nbsp;&nbsp;&nbsp;
              <div class="my_profile">
                  <img src="../img/my_profile.png" alt="my_profile">
              </div>
            </div> 
         </div>-->
         <!-- <i class="fa fa-search"></i> -->

         <div class="header-right">
            <div class="search-box">
                <img src="../img/search.png" >
                <input type="text" placeholder="Search">
            </div>
            <!-- <div class="header-user-icon online"> -->
            <div class="header-user-icon img">
                <img src="../upload/<?php echo $rows_r['img_url']; ?>" ;>
            </div>
            <div style="margin-left: 20px;margin-right: -20px;">
                <a href="../php/logout.php" class='button' style="text-decoration:none">
                    <span class="button__text">Logout</span>
                </a>
            </div>
        </div>
    </div>
    <!--Header end-->
    <!-- <div class="container">  
        <div class="web left_bar"></div>
        <div class ="web content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam aspernatur accusamus consectetur ut autem suscipit rem voluptate commodi ratione sapiente eaque dolorum ex voluptas non, mollitia nemo. Quo in accusamus quisquam soluta, officiis rem velit assumenda nesciunt iusto similique impedit earum tenetur veniam suscipit nihil, laborum quis! Nihil at natus repellat tempora doloremque iste fugiat doloribus, hic nisi iusto nesciunt illum quas ratione. Voluptatem, repellat neque inventore itaque pariatur perferendis dolor earum recusandae quas ex distinctio possimus cum quisquam sint accusantium iure dicta consectetur alias maxime odit. Corrupti distinctio tenetur, dicta pariatur debitis hic obcaecati qui modi dolore saepe nisi! Asperiores repudiandae, veritatis ab tempore porro saepe dolorem illo ut beatae veniam, eius placeat commodi nobis. Sint ducimus fugit architecto non modi corporis, quibusdam debitis laboriosam accusantium et, obcaecati labore assumenda? Consequuntur iusto dolore commodi sequi saepe voluptas quidem aspernatur ipsam accusantium aut minima debitis nemo delectus magni odio, et quis sapiente at vel numquam porro. Quam sapiente impedit, vel id illum pariatur recusandae! Nostrum perferendis repellat vero, cumque labore aspernatur veniam ipsa, reprehenderit cupiditate vel ab? Aspernatur ratione molestiae esse asperiores ullam aperiam maxime nobis inventore deleniti sapiente et, porro quis saepe labore expedita sed dolore nemo ut at quam sit libero laborum. Molestiae explicabo numquam ab facere necessitatibus sit, expedita ipsum magni animi eius impedit incidunt odio, velit nesciunt id quaerat molestias laborum, dolor nisi nobis corrupti? Nesciunt veritatis, expedita, voluptatem dolores dolor necessitatibus minima libero officiis laudantium similique harum sint in, sit corporis optio iusto. Laudantium tenetur inventore voluptatum qui animi officiis cum, quaerat ad eligendi vero omnis vel minima quo architecto ratione dolor mollitia quisquam facilis sequi illo eveniet repudiandae tempore odit? Esse ipsum debitis maiores ratione dolorum eos cum, qui illo nesciunt eaque iste harum eveniet ad dolore odio illum commodi quaerat, dignissimos fugit. Repellendus eos, saepe asperiores autem inventore sapiente quasi alias magnam nemo quibusdam minima temporibus voluptatibus? Labore totam ea dolorum veritatis dolore dicta dolorem quisquam at obcaecati, vitae non, deserunt fugit incidunt delectus esse eaque nemo atque. Nulla et dicta mollitia architecto reiciendis labore cumque saepe illum sed, repudiandae, vel veritatis obcaecati doloribus. Cupiditate reiciendis sunt minima nulla, aliquam suscipit qui voluptates eos nobis assumenda, molestias, corporis doloribus facilis perspiciatis hic quo? Unde, odio aspernatur consequuntur voluptatum libero deserunt architecto minima, sequi non quasi provident? Deleniti, impedit, possimus autem voluptas dolorum distinctio tempore aliquid ratione, unde tempora architecto repudiandae aut! Ullam pariatur totam temporibus rerum sed tempore quasi! Dignissimos minima expedita perferendis aut, nisi at aliquam, nam quam qui, inventore vel non modi consequuntur ipsa reiciendis veritatis est praesentium laboriosam! Aperiam eius laboriosam sequi laudantium? Minus dolorum corporis sed nemo dolore aliquam qui incidunt, voluptate mollitia vitae accusamus, adipisci similique ex dolor, minima assumenda atque officiis repellendus. Exercitationem, assumenda qui. Hic minus quo, ipsa ex eius optio suscipit, impedit exercitationem, facere quaerat nemo inventore? Aliquam quia eaque dolore id provident soluta a suscipit laborum, non pariatur perspiciatis molestias, doloribus dolorum! Praesentium quae nemo obcaecati minus officiis voluptas odit nam unde eius repudiandae similique veniam, beatae hic ut inventore quos mollitia aliquid omnis. Quasi aliquid quis eligendi aut non animi quod nemo eaque explicabo eos. Illum eum, totam error ad earum minus omnis ut! Inventore adipisci mollitia eius dolorem exercitationem, odio quas natus! Id reprehenderit iure enim aliquid vero est voluptatum aliquam ullam officia nemo nulla beatae a libero, odit tempora magni architecto, dolores corporis possimus voluptatibus sint repellat sunt qui magnam! Consequatur ducimus perferendis itaque atque fuga consequuntur voluptatum voluptas doloribus, omnis voluptates corporis eligendi sequi, rem ipsa quas recusandae minus odio neque impedit ipsam maxime architecto. Illo laudantium iusto odit blanditiis aliquam sequi, nam perspiciatis tempore beatae, quisquam, dolores atque minima minus necessitatibus magni quidem nostrum earum soluta fuga. Illo neque saepe similique molestiae, dolorum error maiores consequatur assumenda modi. Magnam, doloremque. Fugit non ipsam voluptatibus eaque exercitationem quod minus, laudantium harum maiores quisquam earum excepturi porro laboriosam quam incidunt quis odio consequuntur velit eligendi? Consectetur, fugiat fuga vero tenetur magni minima sapiente officiis provident id at, animi ratione mollitia impedit nobis iure praesentium ipsum reiciendis cumque et voluptas nam? Nostrum, quae eligendi alias similique minima rerum, deserunt facilis amet dolores cumque autem mollitia praesentium dicta est quo voluptas illum accusantium modi. Libero qui molestias repellat impedit consequatur. Quasi vitae accusamus ex id magni consectetur adipisci in tenetur illo, ipsum maiores ullam a sint doloribus distinctio sed vel fugit. Ipsam omnis in, reiciendis vel laborum iusto aliquid iure ratione natus fugiat, sequi sint eligendi exercitationem nulla. Nisi necessitatibus, saepe atque iure eligendi beatae non id dignissimos cumque esse consequuntur alias tempora nam? Quaerat nostrum beatae voluptates laborum assumenda in cumque vitae voluptate, eligendi molestiae, delectus, eaque consequatur iure earum possimus? Excepturi distinctio porro sit ducimus ratione eum, voluptatibus cum sint molestiae temporibus reiciendis natus et qui beatae ex a quia alias vel obcaecati harum omnis? Fugiat impedit qui itaque assumenda id cum, ipsa in tempora est officia nesciunt magnam eos nemo consequuntur cupiditate, aspernatur facere dolorem, atque voluptatem autem quod sit. Quo nobis facilis aliquid explicabo deleniti harum exercitationem ad dolorum nulla accusamus. Vitae quaerat, quibusdam explicabo eum officiis ratione quasi a dolore ipsam ad aperiam consequuntur, ipsa fugiat perferendis. Neque atque sapiente exercitationem doloremque quia vitae sint necessitatibus sequi ut, nihil laudantium non temporibus voluptatem, inventore quidem libero incidunt delectus pariatur deleniti eaque officiis, reprehenderit vero rerum. Cupiditate consequuntur in quae non unde illum reiciendis animi nisi nemo a molestiae id aliquam deserunt rerum officiis, error, odio cumque eius iusto. Aliquam error doloremque consequatur quod ad deserunt nobis dicta voluptas repudiandae dolorum minima, aliquid corrupti fuga quam a maiores expedita nostrum ducimus perspiciatis consequuntur libero neque distinctio necessitatibus! Nihil sapiente, maxime, sit ipsa neque assumenda obcaecati libero soluta cumque, saepe pariatur autem praesentium vero quis dolorem possimus. Sunt cupiditate ratione delectus, voluptatibus mollitia quis eaque, deserunt laborum sequi est ab. Eligendi earum laborum magnam natus placeat quia, cupiditate saepe corrupti reprehenderit ipsum ex tempora voluptates fugit. Adipisci veniam consequatur non odit ipsum, ipsa perferendis saepe distinctio ea beatae doloremque.</div>
        <div class="web right_bar">
            
            <button type = "button" class = "button" id = "AskQ">
                <span class="button__text">Add Question</span>
                <span class="button__icon">
                    <ion-icon name="add-outline"></ion-icon>
                </span>
            </button>
        </div>
        <div class="web footer">Footer</div>
    </div> -->
    <div class="container">
        <!-- left-sidebar -->
        <div class="left-sidebar">
            <div class="imp-links">
                <a href="aboutUs.php">About us</a>
                <a href="setting.php">Setting</a>
            </div>
        </div>
        <!-- main-content -->
        <div class="main-content">

        <?php if (mysqli_num_rows($read_ques)) { ?>
        
        <?php 
			while($rows = mysqli_fetch_assoc($read_ques)){
                $id = $rows['id'];
		?>
            <div class="post-container">
                <div class="post-row">
                    <div class="user-profile">
                        <div class="profile-image-container">
                            <img src="../upload/<?php echo $rows['img'] ?>">
                        </div>
                        <div>
                            <p><?php echo $rows['name'] ?></p>
                            <span><?php echo $rows['date'] ?></span>
                        </div>
                    </div>
                    <a href="#">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                </div>
                
                <p class="post-text">
                <?php echo $rows['question'] ?>
                </p>
                <!-- <img src="images/feed-image-1.png" class="post-img"> -->
                <div class="post-row">
                    <div class="activity-icons">
                        <div>
                            <img src="../img/like-blue.png">
                            120
                        </div>
                        <div>
                            <a href="comment.php?id=<?php echo $id ?>" style='text-decoration: none;'>
                            <img src="../img/comments.png"></a>
                            <span>
                                <?php 
                                    $sqltwo = "SELECT * FROM answers where ques_id=$id";
                                    $read_ques_amount = mysqli_query($conn, $sqltwo);
                                    $num = mysqli_num_rows($read_ques_amount);
                                    echo $num;
                                ?>
                            </span>    
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php } ?>
        </div>
        <!-- right-sidebar -->
        <div class="right-sidebar">
            <a href="AskQ.php" class='button' style="text-decoration:none">
                <span class="button__text">Add Question</span>
                <span class="button__icon">
                    <ion-icon name="add-outline"></ion-icon>
                </span>
            </a>
        </div>
        
    </div>



    <!--Scripts-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src = "../js/script.js"></script>
</body>
</html>