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
    <link rel="stylesheet" href="css/style.css?version=1">
    <link rel="stylesheet" href="css/art.css?version=1">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css"/>

    <title>Kids Web</title>
</head>
<body>
    <div id="navHide">
       <header>
            <!--Full navigation bar-->
            <?php include 'navigation.php'?>

            <!--main banner part-->
        
        </header>
        <div class="drawHead">
            <h1>Draw anything you like</h1>
        </div> 
    </div>
    
        
    <!--canvas part-->
    <div class="fullCanvas" id="canvasPrt">
        <div class="show-settings">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <canvas id="board" >
            Sorry your browser doesnt support canvas
        </canvas>
        <div class="settings">
            <div class="color-cont">
                <div class="colors">
                    <div class="clr" data-color-name="red"></div>
                    <div class="clr" data-color-name="orange"></div>
                    <div class="clr" data-color-name="yellow"></div>
                    <div class="clr" data-color-name="green"></div>
                    <div class="clr" data-color-name="blue"></div>
                    <div class="clr" data-color-name="pink"></div>
                    <div class="clr" data-color-name="brown"></div>
                    <div class="clr" data-color-name="black"></div>
                    <div class="clr" data-color-name="grey"></div>
                </div>
                <button id="color-btn">Color</button>
            </div>

            <div class="brush-cont">
                <div class="brush">
                    <div class="brush-size br1" data-size="5"></div>
                    <div class="brush-size br2" data-size="15"></div>
                    <div class="brush-size br3" data-size="30"></div>
                </div>
        
                <button id="brush-btn">Brush Size</button>
            </div>

            <div class="eraser">
                <button id="eraser">Eraser</button>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php'?>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/art.js"></script>
</body>
</html>