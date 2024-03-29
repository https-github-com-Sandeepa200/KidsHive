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

    <!-- animate.css cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" />
    
    <!-- SweetAlert2 cdn link for js animations -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Kids Web</title>
</head>

<body>
    <header>
        <!--Full navigation bar-->
        <?php include 'navigation.php' ?>

        <!--main banner part-->
        <div class="headBanner" id="headBannerSize">
            <h1><?php echo $home_heading[$languages] ?></h1>
            <p>
                <?php echo $home_description[$languages] ?>
            </p>
            <h3><a href="loginPage.php"><?php echo $sign_btn[$languages] ?></a></h3>
        </div>

        <!-- header banner animation part -->
        <div class="headBannerAnimation">
            <div>
                <img id="child" src="media/font_banner1_images/children.png" alt="image of children" width="43%">
            </div>
            <div>
                <img id="big_grass" src="media/font_banner1_images/big_grass.png" alt="image of a grass" width="15%">
            </div>
            <div>
                <img id="small_grass" src="media/font_banner1_images/small_grass.png" alt="image of a small grass" width="10%">
            </div>
            <div>
                <img id="cloud" src="media/font_banner1_images/cloud.png" alt="image of a cloud" width="50%">
            </div>
        </div>
    </header>

    <!-- cursor follower -->
    <img id="cursor_follower" src="media/animation/giphy.gif" alt="flying bee" width="15%">

    <!--landing page part1 (after header)-->
    <div class="container" id="animate">
        <div class="part1">
            <div class="content">
                <h1><?php echo $heading2[$languages] ?></h1>
                <p>
                    <?php echo $description2[$languages] ?>
                </p>
                <h3><a href="loginPage.php"><?php echo $sign_btn[$languages] ?></a></h3>
            </div>
            <!-- header banner animation part -->
            <div class="Banner2Animation">
                <div>
                    <img id="child2" src="media/font_banner2_images/child.png" alt="image of children" width="40%">
                </div>
                <div>
                    <img id="big_grass2" src="media/font_banner2_images/big_grass.png" alt="image of a grass" width="15%">
                </div>
                <div>
                    <img id="small_grass2" src="media/font_banner2_images/small_grass.png" alt="image of a small grass" width="10%">
                </div>

            </div>
        </div>
    </div>

    <!--landing page part2 (programes)-->
    <div class="container">
        <div class="part2">
            <div class="content">
                <h1><?php echo $heading3[$languages] ?></h1>
                <p>
                    <?php echo $description3[$languages] ?>
                </p>
                <div id="animate_zoomInDown" class="hide">
                    <div class="cardpack">
                        <div class="card">
                            <div class="card-image">
                                <a href="lessons.php"><img src="media/animation/lesson.gif" alt="boy studing with computer"></a>
                            </div>
                            <h3><?php echo $cards[$languages]['0'] ?></h3>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <a href="gameSelection.php"><img src="media/animation/play.gif" alt="two girls playing games with computer"></a>
                            </div>
                            <h3><?php echo $cards[$languages]['1'] ?></h3>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <a href="art.php"><img src="media/animation/art.gif" alt="girl drawing with computer"></a>
                            </div>
                            <h3><?php echo $cards[$languages]['2'] ?></h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--landing page part3 (review)-->
    <div class="containerPart3">
        <div class="part3">
            <h1><?php echo $heading4[$languages] ?></h1>
            <div class="content">
                <div class="reviewPic">
                    <img src="media/review.jpg" style="width: 100%;" alt="kid with laptop">
                </div>
                <div class="reviewContent">
                    <i class="fa-solid fa-quote-left"></i>
                    <p><?php echo $review[$languages] ?>
                    </p>
                    <h4><?php echo $name[$languages] ?></h4>
                    <p><?php echo $sentence[$languages] ?></p>
                </div>
            </div>
        </div>
    </div>

    <!--landing page part4 (team)-->
    <div class="container" id="about_container">
        <div class="part4">
            <h1><?php echo $heading5[$languages] ?></h1>
            <div class="profileCards">
                <div class="Pcard">
                    <div class="Pcard-image">
                        <img src="media/profile-pic/dhana.jpg" style="width:250px;" alt="image of the person">
                    </div>
                    <h3><?php echo  $profile_card[$languages]['0'] ?></h3>
                    <h4><?php echo  $profile_card[$languages]['4'] ?></h4>
                </div>
                <div class="Pcard">
                    <div class="Pcard-image">
                        <img src="media/profile-pic/paba.jpg" style="width:250px;" alt="image of the person">
                    </div>
                    <h3><?php echo  $profile_card[$languages]['1'] ?></h3>
                    <h4><?php echo  $profile_card[$languages]['4'] ?></h4>
                </div>
                <div class="Pcard">
                    <div class="Pcard-image">
                        <img src="media/profile-pic/sandeepa.jpg" style="width:250px;" alt="image of the person">
                    </div>
                    <h3><?php echo  $profile_card[$languages]['2'] ?></h3>
                    <h4><?php echo  $profile_card[$languages]['4'] ?></h4>
                </div>
                <div class="Pcard">
                    <div class="Pcard-image">
                        <img src="media/profile-pic/thimali.jpg" style="width:250px;" alt="image of the person">
                    </div>
                    <h3><?php echo  $profile_card[$languages]['3'] ?></h3>
                    <h4><?php echo  $profile_card[$languages]['4'] ?></h4>
                </div>
            </div>
            <h3><a href="about.php"><?php echo $about_btn[$languages] ?></a></h3>
        </div>
    </div>
    <?php include 'footer.php' ?>

    <script type="text/javascript" src="js/script.js" defer></script>


</body>

</html>