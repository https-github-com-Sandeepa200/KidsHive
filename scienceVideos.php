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
        <iframe width="90%" height="90%" name="player" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
    <div class="container">
        <div id="preSchool">
            <h1>Pre School-Science</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/VS06O0_jn-A" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/zooanimals_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 1:03</p>
                            </div>
                        </a>
                    </div>
                    <h3>Zoo Trip</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/63v7rfAsAgk?si=WHwHtOeX3SzlgUF-" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/wildanimals_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Wild Animals</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/1AsOIg5B9W0?si=QJkHp57Y9qP7EsG0" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/fruits_grade01.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Fruits</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/aYz5TAQVMC8?si=MUDgQsQx_ofrewr4" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/vegitables_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Vegitables</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/m9uaCCcpF0Y?si=82RvFHKqkT9csLu7" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/Food Chain.jpg" alt="food chain thumbnail">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1.22</p>
                            </div>
                        </a>
                    </div>
                    <h3>Amazing Food Chain Adventure</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/U0IQf67glrQ?si=mAwKJHQohBD-WQAF" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/ocean.png" alt="ocean thumbnails">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>11.11</p>
                            </div>
                        </a>
                    </div>
                    <h3>Marvels of the Ocean</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/XYlGkyS7Myw?si=iZmDLolfVZCRPJvX" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/Our Solar System.png" alt="solar system thumbnails">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>3.46</p>
                            </div>
                        </a>
                    </div>
                    <h3>Our Solar Syatem</h3>
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
                                <i class="fa-regular fa-circle-play"></i>
                                <p>2:50</p>
                            </div>
                        </a>
                    </div>
                    <h3>Wild Animals</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/VS06O0_jn-A" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/zooanimals_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Zoo Animals</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/aYz5TAQVMC8?si=MUDgQsQx_ofrewr4" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/vegitables_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Vegitables</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/1AsOIg5B9W0?si=QJkHp57Y9qP7EsG0" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/fruits_grade01.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
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
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Video</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/m9uaCCcpF0Y?si=82RvFHKqkT9csLu7" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/Food Chain.jpg" alt="food chain thumbnail">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1.22</p>
                            </div>
                        </a>
                    </div>
                    <h3>Amazing Food Chain Adventure</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/U0IQf67glrQ?si=mAwKJHQohBD-WQAF" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/ocean.png" alt="ocean thumbnails">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>11.11</p>
                            </div>
                        </a>
                    </div>
                    <h3>Marvels of the Ocean</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/XYlGkyS7Myw?si=iZmDLolfVZCRPJvX" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/Our Solar System.png" alt="solar system thumbnails">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>3.46</p>
                            </div>
                        </a>
                    </div>
                    <h3>Our Solar Syatem</h3>
                </div>
            </div>
        </div>
        <div id="grade2">
            <h1>Grade 2-Science</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/1AsOIg5B9W0" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/fruits_grade01.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 2:15</p>
                            </div>
                        </a>
                    </div>
                    <h3>Fruits</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/aYz5TAQVMC8" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/vegitables_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>2:48</p>
                            </div>
                        </a>
                    </div>
                    <h3>Vegetables</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/VS06O0_jn-A" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/zooanimals_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Zoo Trip</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/63v7rfAsAgk" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/wildanimals_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Wild Animals</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/m9uaCCcpF0Y?si=82RvFHKqkT9csLu7" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/Food Chain.jpg" alt="food chain thumbnail">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1.22</p>
                            </div>
                        </a>
                    </div>
                    <h3>Amazing Food Chain Adventure</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/U0IQf67glrQ?si=mAwKJHQohBD-WQAF" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/ocean.png" alt="ocean thumbnails">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>11.11</p>
                            </div>
                        </a>
                    </div>
                    <h3>Marvels of the Ocean</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/XYlGkyS7Myw?si=iZmDLolfVZCRPJvX" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/Our Solar System.png" alt="solar system thumbnails">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>3.46</p>
                            </div>
                        </a>
                    </div>
                    <h3>Our Solar Syatem</h3>
                </div>
            </div>
        </div>
        <div id="grade3">
            <h1>Grade 3-Science</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/m9uaCCcpF0Y?si=82RvFHKqkT9csLu7" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/Food Chain.jpg" alt="food chain thumbnail">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1.22</p>
                            </div>
                        </a>
                    </div>
                    <h3>Amazing Food Chain Adventure</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/U0IQf67glrQ?si=mAwKJHQohBD-WQAF" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/ocean.png" alt="ocean thumbnails">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>11.11</p>
                            </div>
                        </a>
                    </div>
                    <h3>Marvels of the Ocean</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/XYlGkyS7Myw?si=iZmDLolfVZCRPJvX" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/Our Solar System.png" alt="solar system thumbnails">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>3.46</p>
                            </div>
                        </a>
                    </div>
                    <h3>Our Solar Syatem</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/1AsOIg5B9W0" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/fruits_grade01.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 2:15</p>
                            </div>
                        </a>
                    </div>
                    <h3>Fruits</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/aYz5TAQVMC8" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/vegitables_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>2:48</p>
                            </div>
                        </a>
                    </div>
                    <h3>Vegetables</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/VS06O0_jn-A" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/zooanimals_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Zoo Trip</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/63v7rfAsAgk" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/science/wildanimals_grade1.jpg" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>10.00</p>
                            </div>
                        </a>
                    </div>
                    <h3>Wild Animals</h3>
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