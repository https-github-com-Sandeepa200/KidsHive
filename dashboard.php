<?php
session_start();

    include("connections.php");
    include("functions.php");

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
    <link rel="stylesheet" href="css/dashboard.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css"/>
    <title>Dashboard</title>
</head>
<body>
    <header>
        <!--Full navigation bar-->
        <nav id="navBar">
            <img class="logo" id="logo" src="media/2.remove.png" alt="logo">
            <span><i id="menuIcon" class="fa-solid fa-bars"></i></span>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="">Games</a></li>
                <li><a href="">Lessons</a></li>
                <li><a href="art.php">Art</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
        <div class="container">
            <div class="topic">
                <h1>dashboard</h1>
                <h2>Hello, <?php echo $user_data['first_name'];?></h2> 
            </div>
            
            <div class="cardpack">
                <div class="card">
                    <div class="card-image">
                        <a href="lessons.php"><img src="media/studing.jpg" alt="boy studing with computer"></a>
                    </div>
                    <h3>Study with kidWeb</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="games.php"><img src="media/gaming.jpg" alt="two girls playing games with computer"></a>
                    </div>
                    <h3>Play with kidWeb</h3>
                </div>
                <div class="card">
                    <div class="card-image">
                        <a href="art.php"><img src="media/drawing.jpg" alt="girl drawing with computer"></a>
                    </div>
                    <h3>Draw with kidWeb</h3>
                </div>
            </div>
            <div class="shortfooter">
                <hr>
                <div class="baseline">Privacy Policy - kids web © 2022 - All Rights Reserved</div>
            </div>
        </div>
    </header>
    
</body>
</html>