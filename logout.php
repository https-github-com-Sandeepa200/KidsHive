<?php

session_start();
include("functions.php");

if(isset($_SESSION['session_id'])){
    unset($_SESSION['session_id']);
    alert("You have successfully Signed out");
    echo "<script>document.location = 'index.php'</script>";
}else{
    alert("You have already sign-out!");
    echo "<script>document.location = 'index.php'</script>";
}
    
?>