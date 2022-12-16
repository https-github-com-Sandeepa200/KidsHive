<?php

//alert box function
function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

//not logged user
function notLoggedUser(){
    alert("please login first!");
    echo "<script>document.location = 'loginPage.php'</script>";
    
}

function check_login($con)
{

    if (isset($_SESSION['session_id'])) {

        $id = $_SESSION['session_id'];
        global $query;
        $query = "select * from register where session_id = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }else{
        //not logged user
        
    }
    
    
    
}

//session_id genarator
function random_num($length)
{
    $text = "";
    if ($length < 5) {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {

        $text .= rand(0, 9);
    }

    return $text;
};


function registerloader()
{
    echo "<style type='text/css'>
            #btn{
                left: 110px;
            }
            #register{
                left: 50px;
            }
            #login{
                left: -460px;
            }
        </style>";
}
