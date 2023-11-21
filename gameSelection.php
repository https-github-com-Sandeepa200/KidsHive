<?php

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
    <link rel="stylesheet" href="css/games.css">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" />

    <title>Games</title>
</head>

<body>

    <!--Full navigation bar-->
    <?php include 'navigation.php' ?>


    <div class="container">
        <h1><?php echo $gameSelecction_heading[$languages] ?></h1>
        <!--Subject navigation-->
        <div class="cardpack">
            <div class="card-1">
                <ul>
                    <li><a href="game.php#preSchool"><?php echo $programmes[$languages]['0'] ?></a></li>
                </ul>
            </div>
            <div class="card-2">
                <ul>
                    <li><a href="game.php#grade1"><?php echo $programmes[$languages]['1'] ?></a></li>
                </ul>
            </div>
            <div class="card-3">
                <ul>
                    <li><a href="game.php#grade2"><?php echo $programmes[$languages]['2'] ?></a></li>
                </ul>
            </div>
            <div class="card-4">
                <ul>
                    <li><a href="game.php#grade3"><?php echo $programmes[$languages]['3'] ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <footer class="mainFooter">
        <div class="baseline"><?php echo $footer_contact[$languages]['1'] ?></div>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>