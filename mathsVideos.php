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
    <link rel="stylesheet" href="css/videoSet.css">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" />

    <title>Videos</title>
</head>

<body>

    <!--Full navigation bar-->
    <?php include 'navigation.php' ?>
    
<!-- HTML structure for the search bar -->
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <button onclick="searchCards()">
            <img src="media/find.png" alt="Search">
        </button>
    </div>
    <div id="searchResults"></div>

    <!--  emberded video-->
    <div class="vplayer" id="hidePlayer">
        <iframe width="90%" height="90%" name="player" src="https://www.youtube.com/embed/G-IS-scTJDo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
    <div class="container">
        <div id="preSchool">
            <h1>Pre School-Maths</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/iSpyyxAUcDI" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/1 to 10 _ preschool.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 1:16</p>
                            </div>
                        </a>
                    </div>
                    <h3>Count 1 to 10</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/TzVZweQVato" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/shape_preschool.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 1:26</p>
                            </div>
                        </a>
                    </div>
                    <h3>Basic Shapes</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/pZG9Lf1Qic0?si=Mgi1C47rvJdEpp9m" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/pattern Party" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1.55</p>
                            </div>
                        </a>
                    </div>
                    <h3>Pattern Party</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/YXHAc_ycDeY" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/maths/1-100 01.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1:59</p>
                            </div>
                        </a>
                    </div>
                    <h3>Count 1 to 100</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
        <div id="grade1">
            <h1>Grade 1-Maths</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/YXHAc_ycDeY" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/maths/1-100 01.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1:59</p>
                            </div>
                        </a>
                    </div>
                    <h3>Count 1 to 100</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/iSpyyxAUcDI" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/1 to 10 _ preschool.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 1:16</p>
                            </div>
                        </a>
                    </div>
                    <h3>Count 1 to 10</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/TzVZweQVato" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/shape_preschool.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 1:26</p>
                            </div>
                        </a>
                    </div>
                    <h3>Basic Shapes</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/pZG9Lf1Qic0?si=Mgi1C47rvJdEpp9m" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/pattern Party" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1.55</p>
                            </div>
                        </a>
                    </div>
                    <h3>Pattern Party</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
        <div id="grade2">
            <h1>Grade 2-Maths</h1>
            <!--video selection-->
            <div class="cardpack">
            <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/pZG9Lf1Qic0?si=Mgi1C47rvJdEpp9m" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/pattern Party" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1.55</p>
                            </div>
                        </a>
                    </div>
                    <h3>Pattern Party</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/TzVZweQVato" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/shape_preschool.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 1:26</p>
                            </div>
                        </a>
                    </div>
                    <h3>Basic Shapes</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/iSpyyxAUcDI" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/1 to 10 _ preschool.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 1:16</p>
                            </div>
                        </a>
                    </div>
                    <h3>Count 1 to 10</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/YXHAc_ycDeY" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/maths/1-100 01.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1:59</p>
                            </div>
                        </a>
                    </div>
                    <h3>Count 1 to 100</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
            </div>
        </div>
        <div id="grade3">
            <h1>Grade 3-Maths</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/TzVZweQVato" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/shape_preschool.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 1:26</p>
                            </div>
                        </a>
                    </div>
                    <h3>Basic Shapes</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/pZG9Lf1Qic0?si=Mgi1C47rvJdEpp9m" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/pattern Party" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1.55</p>
                            </div>
                        </a>
                    </div>
                    <h3>Pattern Party</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/iSpyyxAUcDI" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/maths/1 to 10 _ preschool.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 1:16</p>
                            </div>
                        </a>
                    </div>
                    <h3>Count 1 to 10</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/YXHAc_ycDeY" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/maths/1-100 01.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1:59</p>
                            </div>
                        </a>
                    </div>
                    <h3>Count 1 to 100</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php">
                            <img src="media/studing.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>video name</h3>
                </div>
                
            </div>
        </div>
    </div>
    <footer >
        <div class="baseline">Privacy Policy - kids web © 2022 - All Rights Reserved</div>
    </footer>

    <script src="js/script.js"></script>

      



</body>

</html>