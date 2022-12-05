<?php
session_start();

    include("connections.php");
    include("functions.php");


    //signup part
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];

        //we have to do more validation here

        if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) && !empty($repassword)){

            $session_id = random_num(20);
            //saving data to database
            $query = "insert into register (first_name,last_name,email,password,session_id) values ('$fname','$lname','$email','$password','$session_id')";
            
            mysqli_query($con, $query);
            /*
            header("Location: loginPage.php");
            die;
            */
            echo "register successful please login now";
        
        }
        else{
            echo "something went wrong please try again";
        }
    }

    //login part

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $login_email = $_POST["login_email"];
        $login_password = $_POST["login_password"];

        //we have to do more validation here

        if(!empty($login_email) && !empty($login_password)){

            
            //reading data from database
            $query = "select * from register where email = '$login_email' limit 1";
            
            $result = mysqli_query($con, $query);

            if($result){
                if ($result && mysqli_num_rows($result) > 0){

                    $user_data = mysqli_fetch_assoc($result);
                    if ($user_data['password'] === $login_password){

                        $_SESSION['session_id'] = $user_data['session_id'];
                        header("Location: dashboard.php");
                        die;
                    }
        
                } 
            }
            
            
            echo "wrong email & password combination";
        
        }
        else{
            echo "something went wrong please try again";
        }
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
    <link rel="stylesheet" href="css/login.css">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/regular.min.css"/>

    <title>login & Signup</title>
</head>
<body>
    <header>
        <!--Full navigation bar-->
        <nav id="navBar">
            <img id="logo" src="media/logo.png" alt="logo">
            <span><i id="menuIcon" class="fa-solid fa-bars"></i></span>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="lessons.html">Lessons</a></li>
                <li><a href="art.php">Art</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>

        <!--main banner part-->
        <div class="headBanner" id="headBannerSize">
            <div class="hero">
                <div class="formbox">
                    <!--swipe button-->
                    <div class="button-box">
                        <div id="btn"></div>
                        <button type="button" class="toggle-btn" onclick="login()">Login</button>
                        <button type="button" class="toggle-btn" onclick="register()">Register</button>
                    </div>
                    
                    

                    <!--login form-->
                    <form class="input-group" id="login" method="post">

                            <input type="text" class="input-field" placeholder="email" required name="login_email">
                            <input type="password" class="input-field" placeholder="Enter password" required name="login_password">
                            <!--add password visible button--></br></br></br></br></br>
                            <button type="submit" class="submit-btn" value="submit">Login</button>
                        
                    </form>
                        
                    <!--Signup form-->
                    
                    <form class="input-group" id="register" method="post">
                        
                            <input type="text" class="input-field" placeholder="First name" name="fname">
                            <input type="text" class="input-field" placeholder="Last name"  name="lname">
                            <input type="email" class="input-field" placeholder="Email"   name="email">
                            <input type="password" class="input-field" placeholder="Enter password"  name="password">

                            <input type="password" class="input-field" placeholder="Confirm password"  name="repassword">
                            <input required type="checkbox" class="check-box"><span>Agree To the terms And Conditions</span>
                            <button type="submit" class="submit-btn" value="submit">Register</button>

                        
                    </form>
                    
                </div>     
            </div>
        </div>
    </header>
    <!--login and signup form part-->
    
    <!--swipe button script-->
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-460px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }


    </script>
    
    <script type="text/javascript" src="js/script.js" ></script>
</body>
</html>