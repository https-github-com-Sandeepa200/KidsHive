<?php 

function check_login($con){

    if(isset($_SESSION['session_id'])){

        $id = $_SESSION['session_id'];
        global $query;
        $query = "select * from register where session_id = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0){

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    /*
    //not logged user
    header("location: loginPage.php");
    die;
    //collect data for dynamic alert messages
    */
}

//session_id genarator
function random_num($length){
    $text = "";
    if ($length <5){
        $length = 5;
    }

    $len = rand(4, $length);

    for ( $i = 0;  $i < $len; $i++) {

        $text .= rand(0,9);
    }

    return $text;
};

//alert box function
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

//alert box function
// function register_pageload() {
//     echo "<style type='text/css'>

//         </style>";
//             x.style.left = "-460px",
//             y.style.left = "50px",
//             z.style.left = "110px",
// ";
// }

?>