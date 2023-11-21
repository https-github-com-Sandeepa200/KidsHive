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
    <link rel="stylesheet" href="css/videoSet.css">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" />

    <title>Games</title>
</head>

<body>
    <!--Full navigation bar-->
    <?php include 'navigation.php' ?>


    <div class="container">
        <div id="preSchool">
            <h1><?php echo $games_headings[$languages]['0'] ?></h1>
            <!--game selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="games/snake/snake.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Snake Game</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="games/boxGame/box.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Box Game</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="games/countApple/countApple.php">
                            <img src="games/countApple/media/cover.png" alt="count Apples">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Count Apples</h3>
                </div>

            </div>
        </div>
        <div id="grade1">
            <h1><?php echo $games_headings[$languages]['1'] ?></h1>
            <!--game selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/jWQRCOrXxgE">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Number Guesing</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/jWQRCOrXxgE">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Game name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/jWQRCOrXxgE">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Game name</h3>
                </div>
            </div>
        </div>
        <div id="grade2">
            <h1><?php echo $games_headings[$languages]['2'] ?></h1>
            <!--game selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="games/Game_HangMan/HangMan.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Hang Man</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/jWQRCOrXxgE">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Game name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/jWQRCOrXxgE">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Game name</h3>
                </div>
            </div>
        </div>
        <div id="grade3">
            <h1><?php echo $games_headings[$languages]['3'] ?></h1>
            <!--game selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="games/mathsgames/addition.php">
                            <img src="media/animation/addition.gif" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Addition</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="games/mathsgames/subtraction.php">
                            <img src="media/animation/subraction.gif" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Subtraction</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="games/mathsgames/division.php">
                            <img src="media/animation/divition.gif" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Divition</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="games/mathsgames/multiplication.php">
                            <img src="media/animation/multiplication.gif" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                        </a>
                    </div>
                    <h3>Multiplication</h3>
                </div>
            </div>
        </div>
    </div>
    <footer class="mainFooter">
        <div class="baseline"><?php echo $footer_contact[$languages]['1'] ?></div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>