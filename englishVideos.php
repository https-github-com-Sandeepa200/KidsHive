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
            <h1>Pre School-English</h1>
            <!--video selection-->
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/nvgFQ2BQPJ0" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/English/alpherbet_preschool.png" alt="boy studing with computer">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 1:22</p>
                            </div>
                        </a>
                    </div>
                    <h3>Alphabet</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/LgmPVi9Wngc" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/English/color_preschool.png" alt="colours">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>2:10</p>
                            </div>
                        </a>
                    </div>
                    <h3>Colors</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/dJsm3rVa_Nk" target="player" onclick="openPlayer()">
                            <img src="media/lessons/grade1/Science/days_grade1.png" alt="Days of the weel">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p>1:07</p>
                            </div>
                        </a>
                    </div>
                    <h3>Days Of The WEEK</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="https://www.youtube.com/embed/15Av1Z0xPB0?si" target="player" onclick="openPlayer()">
                            <img src="media/lessons/preschool/English/sports.png" alt="sports">
                            <div class="overlayVideo">
                                <i class="fa-regular fa-circle-play"></i>
                                <p> 2:40</p>
                            </div>
                        </a>
                    </div>
                    <h3>Sports</h3>
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
            <h1>Grade 1-English</h1>
            <!--video selection-->
            <div class="cardpack">
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
            <h1>Grade 2-English</h1>
            <!--video selection-->
            <div class="cardpack">
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
            <h1>Grade 3-English</h1>
            <!--video selection-->
            <div class="cardpack">
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
    
<!-- Search Function -->
<script>
function searchCards() {
    const searchValue = document.getElementById('searchInput').value.toLowerCase();
    const cards = document.querySelectorAll('.card h3');

    let scrollToElement = null;

    cards.forEach(card => {
        const cardText = card.textContent.toLowerCase();
        if (cardText.includes(searchValue) && scrollToElement === null) {
            scrollToElement = card.parentNode;
        }
    });

    if (scrollToElement !== null) {
        scrollToElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
    } else {
        // Handle case where no match is found
        console.log('No matching element found.');
    }
}
</script>
</body>

</html>