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
    <link rel="stylesheet" href="css/about.css">

    <!--js link-->
    <script src="script.js"></script>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css" />

    <title>About Us</title>
</head>

<body>
    <header>
        <!--Full navigation bar-->
        <?php include 'navigation.php'?>

        <!--main banner part-->
        <div class="headBanner" id="headBannerSize">
            <h1><?php echo $about_heading1[$languages]?></h1>
            <p>
            <?php echo $about_description1[$languages]?>
            </p>
        </div>
    </header>
    <!--members part-->
    <div class="backgroundPart">
        <div class="allMembers">
            <h1 class="aboutHead"><?php echo $about_heading2[$languages]?></h1>
            
            <div class="memberRight">
                <img class="profilePic" src="media/profile-pic/paba.jpg" alt="profilePic">
                <img class="background" src="media/labels/blueLable.png" alt="background">
                <div class="lableContent">
                    <h3><?php echo $about_members[$languages]['0']?></h3>
                    <h4><?php echo $profile_card[$languages]['4']?></h4>
                    <p><?php echo $about_membersDesdriptions[$languages]['0']?></p>
                </div>
            </div>
            <div class="memberLeft">
                <img class="profilePic" src="media/profile-pic/dhana.jpg" alt="profilePic">
                <img class="background" src="media/labels/purpleLable.png" alt="background">
                <div class="lableContent">
                    <h3><?php echo $about_members[$languages]['1']?></h3>
                    <h4><?php echo $profile_card[$languages]['4']?></h4>
                    <p><?php echo $about_membersDesdriptions[$languages]['1']?></p>
                </div>
            </div>
            <div class="memberRight">
                <img class="profilePic" src="media/profile-pic/thimali.jpg" alt="profilePic">
                <img class="background" src="media/labels/redLable.png" alt="background">
                <div class="lableContent">
                    <h3><?php echo $about_members[$languages]['2']?></h3>
                    <h4><?php echo $profile_card[$languages]['4']?></h4>
                    <p><?php echo $about_membersDesdriptions[$languages]['2']?></p>
                </div>
            </div>
            <div class="memberLeft">
                <img class="profilePic" src="media/profile-pic/sandeepa.jpg" alt="profilePic">
                <img class="background" src="media/labels/greenLable.png" alt="background">
                <div class="lableContent">
                    <h3><?php echo $about_members[$languages]['3']?></h3>
                    <h4><?php echo $profile_card[$languages]['4']?></h4>
                    <p><?php echo $about_membersDesdriptions[$languages]['3']?></p>
                </div>
            </div>
        </div>
    </div>

    <br>
    <?php include 'footer.php'?>
    <script src="js/script.js"></script>
</body>

</html>