
<?php
session_start();
    include("connections.php");
    include("functions.php");
    include("language.php");

    $user_data = check_login($con);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">

    <!--main css file-->
    <link rel="stylesheet" href="css/style.css">
  
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css"/>

    <title>Kids Web</title>
</head>
<body>
    <header>
        <!--Full navigation bar-->
        <?php include 'navigation.php'?>

        <!--main banner part-->
        <div class="headBanner" id="headBannerSize">
            <h1><?php echo $home_heading[$languages]?></h1>
            <p>
            <?php echo $home_description[$languages]?> 
            </p>
            <h3><a href="loginPage.php"><?php echo $sign_btn[$languages]?></a></h3>
        </div>
    </header>

    <!--landing page part1 (after header)-->
    <div class="container">
        <div class="part1">
            <div class="content">
                <h1><?php echo $heading2[$languages]?></h1>
                <p>
                <?php echo $description2[$languages]?> 
                </p>
                <h3><a href="loginPage.php"><?php echo $sign_btn[$languages]?></a></h3>
            </div>
        </div>
    </div>

    <!--landing page part2 (programes)-->
    <div class="container">
        <div class="part2">
            <div class="content">
                <h1><?php echo $heading3[$languages]?></h1>
                <p>
                <?php echo $description3[$languages]?>
                </p>
                <div class="cardpack">
                    <div class="card">
                        <div class="card-image">
                            <a href="lessons.php"><img src="media/studing.jpg" alt="boy studing with computer"></a>
                        </div>
                        <h3><?php echo $card_1[$languages]?></h3>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <a href="gameSelection.php"><img src="media/gaming.jpg" alt="two girls playing games with computer"></a>
                        </div>
                        <h3><?php echo $card_2[$languages]?></h3>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <a href="art.php"><img src="media/drawing.jpg" alt="girl drawing with computer"></a>
                        </div>
                        <h3><?php echo $card_3[$languages]?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--landing page part3 (review)-->
    <div class="containerPart3">
        <div class="part3">
            <h1><?php echo $heading4[$languages]?></h1>
            <div class="content">
                <div class="reviewPic">
                    <img src="media/review.jpg" style="width: 100%;" alt="kid with laptop">
                </div>
                <div class="reviewContent">
                    <i class="fa-solid fa-quote-left"></i>
                    <p><?php echo $review[$languages]?>
                    </p>
                    <h4><?php echo $name[$languages]?></h4>
                    <p><?php echo $sentence[$languages]?></p>
                </div>
            </div>
        </div>
    </div>

    <!--landing page part4 (team)-->
    <div class="container">
        <div class="part4">
            <h1><?php echo $heading5[$languages]?></h1>
            <div class="profileCards">
                <div class="Pcard">
                    <div class="Pcard-image">
                        <img src="media/profile-pic/dhana.jpg" style="width:250px;" alt="image of the person">
                    </div>
                    <h3>Dhanushka</h3>
                    <h4>Software Engineer</h4>
                </div>
                <div class="Pcard">
                    <div class="Pcard-image">
                        <img src="media/profile-pic/paba.jpg" style="width:250px;" alt="image of the person">
                    </div>
                    <h3>Paba</h3>
                    <h4>Software Engineer</h4>
                </div>
                <div class="Pcard">
                    <div class="Pcard-image">
                        <img src="media/profile-pic/sandeepa.jpg" style="width:220px;" alt="image of the person">
                    </div>
                    <h3>Sandeepa</h3>
                    <h4>Software Engineer</h4>
                </div>
                <div class="Pcard">
                    <div class="Pcard-image">
                        <img src="media/profile-pic/thimali.jpg" style="width:265px;" alt="image of the person">
                    </div>
                    <h3>Thimali</h3>
                    <h4>Software Engineer</h4>
                </div>
            </div>
            <h3><a href="about.php">About Us</a></h3>
        </div>
    </div>
    <?php include 'footer.php'?>
    
    <script type="text/javascript" src="js/script.js" ></script>
</body>
</html>