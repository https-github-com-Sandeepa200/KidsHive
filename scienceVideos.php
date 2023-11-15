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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css"/>

    <title>Videos</title>
</head>
<body>
    <header>
        <!--Full navigation bar-->
        <?php include 'navigation.php'?>
    </header>
    <!--  emberded video-->
    <div class="vplayer" id="hidePlayer">
        <iframe width="90%" height="90%" name="player"
                src="https://www.youtube.com/embed/G-IS-scTJDo" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
        </iframe>
    </div>
    <div class="container">
        <div id="preSchool">
            <h1>Pre School-Science</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href= "https://www.youtube.com/embed/VS06O0_jn-A" target="player" onclick="openPlayer()">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p> 1:03</p>
                            </div>
                        </a>
                    </div>
                    <h3>Zoo Trip</h3>
                </div>
                <div class="card">
                    <div class="card-image" >
                        <a href="" target="player" onclick="openPlayer()"> 
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Basic colors</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a>
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Basic Shapes</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
        <div id="grade1">
            <h1>Grade 1-Science</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/63v7rfAsAgk" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/wildanimals_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>2:50</p>
                            </div>
                        </a>
                    </div>
                    <h3>Wild Animals</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/lessons/grade1/science/zooanimals_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Zoo Animals</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/lessons/grade1/science/vegitables_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Vegitables</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/lessons/grade1/science/fruits_grade01.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Fruits</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/lessons/grade1/science/days_grade1.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Days in the Week</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
        <div id="grade2">
            <h1>Grade 2-Science</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/1AsOIg5B9W0" target="player" onclick="openPlayer()" >
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p> 2:15</p>
                            </div>
                        </a>
                    </div>
                    <h3>Fruits</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/aYz5TAQVMC8" target="player" onclick="openPlayer()">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>2:48</p>
                            </div>
                        </a>
                    </div>
                    <h3>Vegetables</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
        <div id="grade3">
            <h1>Grade 3-Science</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a >
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3></h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a >
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3></h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play" ></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
    </div>
    <footer class="mainFooter">
        <div class="baseline">Privacy Policy - kids web © 2022 - All Rights Reserved</div>
    </footer>
    
    <script src="js/script.js" ></script>
</body>
</html>