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
            <h1>About Our Team</h1>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia doloribus optio excepturi nostrum
                fuga obcaecati iste ex deleniti libero perspiciatis?
            </p>
        </div>
    </header>
    <!--members part-->
    <div class="backgroundPart">
        <div class="allMembers">
            <h1 class="aboutHead">Team Members</h1>
            
            <div class="memberRight">
                <img class="profilePic" src="media/profile-pic/paba.jpg" alt="profilePic">
                <img class="background" src="media/labels/blueLable.png" alt="background">
                <div class="lableContent">
                    <h2>Ms. Paba Waruni</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugiat suscipit aspernatur non
                        voluptate. Fugiat eaque tempore omnis quae illo.</p>
                </div>
            </div>
            <div class="memberLeft">
                <img class="profilePic" src="media/profile-pic/dhana.jpg" alt="profilePic">
                <img class="background" src="media/labels/purpleLable.png" alt="background">
                <div class="lableContent">
                    <h2>Mr. Dhanushka Dharmasiri</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugiat suscipit aspernatur non
                        voluptate. Fugiat eaque tempore omnis quae illo.</p>
                </div>
            </div>
            <div class="memberRight">
                <img class="profilePic" src="media/profile-pic/thimali.jpg" alt="profilePic">
                <img class="background" src="media/labels/redLable.png" alt="background">
                <div class="lableContent">
                    <h2>Ms. Thimali Ruwanthika</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugiat suscipit aspernatur non
                        voluptate. Fugiat eaque tempore omnis quae illo.</p>
                </div>
            </div>
            <div class="memberLeft">
                <img class="profilePic" src="media/profile-pic/sandeepa.jpg" alt="profilePic">
                <img class="background" src="media/labels/greenLable.png" alt="background">
                <div class="lableContent">
                    <h2>Mr. Sandeepa Rambukwella</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis fugiat suscipit aspernatur non
                        voluptate. Fugiat eaque tempore omnis quae illo.</p>
                </div>
            </div>
        </div>
    </div>

    <br>
    <?php include 'footer.php'?>
    <script src="js/script.js"></script>
</body>

</html>