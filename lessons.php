<?php
session_start();

include("connections.php");
include("functions.php");

$user_data = check_login($con);
if ($user_data == "") {
    notLoggedUser();
}
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
    <link rel="stylesheet" href="css/lessons.css">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" />

    <title>Lessons</title>
</head>

<body>

    <!--Full navigation bar-->
    <?php include 'navigation.php' ?>

    <div class="container">
        <h1><?php echo $lesson_heading[$languages] ?></h1>
        <!--Subject navigation-->
        <div class="cardpack">
            <div class="card-1">
                <h3><?php echo $lessons[$languages]['0'] ?></h3>
                <ul>
                    <li><a href="mathsVideos.php#preSchool"><?php echo $programmes[$languages]['0'] ?></a></li>
                    <li><a href="mathsVideos.php#grade1"><?php echo $programmes[$languages]['1'] ?></a></li>
                    <li><a href="mathsVideos.php#grade2"><?php echo $programmes[$languages]['2'] ?></a></li>
                    <li><a href="mathsVideos.php#grade3"><?php echo $programmes[$languages]['3'] ?></a></li>
                </ul>
            </div>
            <div class="card-2">
                <h3><?php echo $lessons[$languages]['1'] ?></h3>
                <ul>
                    <li><a href="englishVideos.php#preSchool"><?php echo $programmes[$languages]['0'] ?></a></li>
                    <li><a href="englishVideos.php#grade1"><?php echo $programmes[$languages]['1'] ?></a></li>
                    <li><a href="englishVideos.php#grade2"><?php echo $programmes[$languages]['2'] ?></a></li>
                    <li><a href="englishVideos.php#grade3"><?php echo $programmes[$languages]['3'] ?></a></li>
                </ul>
            </div>
            <div class="card-3">
                <h3><?php echo $lessons[$languages]['2'] ?></h3>
                <ul>
                    <li><a href="scienceVideos.php#preSchool"><?php echo $programmes[$languages]['0'] ?></a></li>
                    <li><a href="scienceVideos.php#grade1"><?php echo $programmes[$languages]['1'] ?></a></li>
                    <li><a href="scienceVideos.php#grade2"><?php echo $programmes[$languages]['2'] ?></a></li>
                    <li><a href="scienceVideos.php#grade2"><?php echo $programmes[$languages]['3'] ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="mainFooter">
        <div class="baseline"><?php echo $footer_contact[$languages]['1'] ?></div>
    </footer>
    <script src="script.js"></script>
</body>

</html>