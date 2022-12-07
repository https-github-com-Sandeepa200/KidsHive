<?php
session_start();

    include("connections.php");
    include("functions.php");

    $erro = "";
    global $erro;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //we have to do more validation here
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        //signup part
        function signupform(){

            $valid_fname = "";
            $valid_lname = "";
            $valid_email = "";
            $valid_password = "";
            $erro = "";
            global $erro;

            $fname = test_input($_POST["fname"]);
            $lname = test_input($_POST["lname"]);
            $email = test_input($_POST["email"]);
            $password = test_input($_POST["password"]);
            $repassword = test_input($_POST["repassword"]);

            //user data formate validation
            if(!preg_match("/^[a-zA-Z-' ]*$/",$fname)){
                $erro = "Only letters and white space allowed in the first name";
                
            }else{
                if(!preg_match("/^[a-zA-Z-' ]*$/",$lname)){
                    $erro = "Only letters and white space allowed in the last name";
                }else{
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $erro = "Invalid email format";
                    }else{
                        // Validate password strength
                        $uppercase = preg_match('@[A-Z]@', $password);
                        $lowercase = preg_match('@[a-z]@', $password);
                        $number    = preg_match('@[0-9]@', $password);
                        $specialChars = preg_match('@[^\w]@', $password);

                        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                            $erro = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
                        }else{
                            //password validation
                            if($password!= $repassword){
                                $erro = "Passwords don't match";
                            }else{
                                $valid_fname = $fname;
                                $valid_lname = $lname;
                                $valid_email = $email;
                                $valid_password = $password;
                            }
                        }
                    }
                }
                    
            }


            if(!empty($valid_fname) && !empty($valid_lname) && !empty($valid_email) && !empty($valid_password)){

                $session_id = random_num(20);
                //saving data to database
                $query = "insert into register (first_name,last_name,email,password,session_id) values ('$fname','$lname','$email','$password','$session_id')";
                include("connections.php");
                mysqli_query($con, $query);
                
                alert("signup successfull please login now");
            }
            else{
                    
            }
        }

        

        //login part
        function loginform(){

            $loginerro = "";
            global $loginerro;

            $login_email = test_input($_POST["login_email"]);
            $login_password = test_input($_POST["login_password"]);

            //we have to do more validation here

            if(!empty($login_email) && !empty($login_password)){
            
                //reading data from database
                $query = "select * from register where email = '$login_email' limit 1";
                include("connections.php");
                $result = mysqli_query($con, $query);

                if($result){
                    if ($result && mysqli_num_rows($result) > 0){

                        $user_data = mysqli_fetch_assoc($result);
                        if ($user_data['password'] === $login_password){

                            $_SESSION['session_id'] = $user_data['session_id'];
                            header("Location: dashboard.php");
                            die;
                        }else{
                            $loginerro = "wrong email & password combination";
                        }
                    }else{
                        $loginerro = "Please enter valid email address";
                    }
                }
            }
            else{
                $loginerro = "Please enter your email and password";
            }
        }

        //selectively call to the form function
        if(array_key_exists('signupbtn', $_POST)) {
            signupform();
        }
        else if(array_key_exists('loginbtn', $_POST)) {
            loginform();
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
                    
                    <div class="error">
                    
                        <?php 
                            if(!$erro == ""){
                                echo $erro;
                                registerloader();
                            }elseif(!$loginerro == ""){
                                echo $loginerro;
                            }
                        ?>

                    </div>

                    <!--login form-->
                    <form class="input-group" id="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                            <input type="text" class="input-field" placeholder="email" required name="login_email">
                            <input type="password" class="input-field" placeholder="Enter password" required name="login_password">
                            <!--add password visible button--></br></br></br></br></br>
                            <button type="submit" class="submit-btn" value="submit" name="loginbtn">Login</button>
                        
                    </form>
                        
                    <!--Signup form-->
                    
                    <form class="input-group" id="register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        
                            <input type="text" class="input-field" placeholder="First name" name="fname" required>
                            <input type="text" class="input-field" placeholder="Last name"  name="lname" required>
                            <input type="email" class="input-field" placeholder="Email"   name="email" required>
                            <input type="password" class="input-field" placeholder="Enter password"  name="password" required>
                            <input type="password" class="input-field" placeholder="Confirm password"  name="repassword" required>
                            <input required type="checkbox" class="check-box"><span>Agree To the terms And Conditions</span>
                            <button type="submit" class="submit-btn" value="submit" name="signupbtn">Register</button>

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

